<?php

declare(strict_types=1);

/**
 * INTACT.KZ — Обработчик форм (send.php)
 * ────────────────────────────────────────
 * Принимает POST-запросы от всех форм сайта.
 * Валидирует, уведомляет (email + Telegram), логирует.
 *
 * Типы форм:
 *   callback   — краткая форма «Перезвоните мне»
 *   service    — заявка на услугу
 *   calculator — расчёт с калькулятора
 */

require_once __DIR__ . '/config.php';

// ── Заголовки ──
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// CORS
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if ($origin === ALLOWED_ORIGIN) {
    header('Access-Control-Allow-Origin: ' . ALLOWED_ORIGIN);
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');
}

// Preflight
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// ── Только POST ──
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    jsonResponse(false, message: 'Метод не поддерживается.');
}

// ── Rate Limiting по IP ──
$clientIp = getClientIp();
if (isRateLimited($clientIp)) {
    http_response_code(429);
    jsonResponse(false, message: 'Слишком много запросов. Попробуйте через несколько минут.');
}

// ── Получение данных ──
$contentType = $_SERVER['CONTENT_TYPE'] ?? '';
if (str_contains($contentType, 'application/json')) {
    $raw  = file_get_contents('php://input');
    $data = json_decode($raw, true) ?: [];
} else {
    $data = $_POST;
}

// ── Honeypot (бот-ловушка) ──
if (!empty($data['website'] ?? '')) {
    // Бот заполнил скрытое поле — тихий успех
    jsonResponse(true, message: 'Спасибо!');
}

// ── JS-токен (timestamp) ──
// Если токен отсутствует (JS не загрузился) — пропускаем проверку
// Если токен есть — проверяем что не старше 1 часа
$token = (int)($data['_token'] ?? 0);
$now   = time();
if ($token > 0 && (($now - $token) > 3600 || ($now - $token) < 0)) {
    jsonResponse(false, message: 'Ошибка безопасности. Обновите страницу и попробуйте снова.');
}

// ── Определение типа формы ──
$formType = sanitize($data['type'] ?? 'callback');
if (!in_array($formType, ['callback', 'service', 'calculator'], true)) {
    $formType = 'callback';
}

// ── Валидация ──
$errors = [];

// Имя (обязательно для всех)
$name = sanitize($data['name'] ?? '');
if ($name === '') {
    $errors['name'] = 'Укажите ваше имя';
} elseif (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    $errors['name'] = 'Имя: от 2 до 100 символов';
} elseif (!preg_match('/^[\p{L}\s\-\.]+$/u', $name)) {
    $errors['name'] = 'Имя содержит недопустимые символы';
}

// Телефон (обязательно для всех)
$phoneRaw = $data['phone'] ?? '';
$phone    = preg_replace('/[^\d+]/', '', $phoneRaw);
if ($phone === '') {
    $errors['phone'] = 'Укажите номер телефона';
} else {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) < 10 || strlen($digits) > 15) {
        $errors['phone'] = 'Номер телефона должен содержать 10-15 цифр';
    }
}

// Email (опционально, но если указан — валидируем)
$email = sanitize($data['email'] ?? '');
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Некорректный email';
}

// Тип услуги (для service)
$service = '';
if ($formType === 'service') {
    $service = sanitize($data['service'] ?? '');
    if ($service !== '' && !in_array($service, ALLOWED_SERVICES, true)) {
        $errors['service'] = 'Выберите услугу из списка';
    }
}

// Сообщение (опционально)
$message = '';
if (in_array($formType, ['service'], true)) {
    $message = sanitize($data['message'] ?? '');
    if (mb_strlen($message) > 1000) {
        $errors['message'] = 'Сообщение не более 1000 символов';
    }
}

// Параметры калькулятора
$calcParams = [];
if ($formType === 'calculator') {
    $calcParams = validateCalcParams($data);
    if ($calcParams === null) {
        $errors['calculator'] = 'Некорректные параметры калькулятора';
        $calcParams = [];
    }
}

// ── Ошибки валидации? ──
if (!empty($errors)) {
    http_response_code(422);
    jsonResponse(false, errors: $errors);
}

// ── Записываем rate limit ──
recordRequest($clientIp);

// ── Формируем данные заявки ──
$lead = [
    'date'       => date('Y-m-d H:i:s'),
    'type'       => $formType,
    'name'       => $name,
    'phone'      => $phone,
    'email'      => $email,
    'service'    => $service,
    'message'    => $message,
    'calc'       => $calcParams,
    'ip'         => $clientIp,
    'user_agent' => mb_substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200),
];

// ── Логирование в CSV ──
logLead($lead);

// ── Email-уведомление ──
try {
    sendEmail($lead);
} catch (\Throwable $e) {
    logError('Email error: ' . $e->getMessage());
}

// ── Telegram-уведомление ──
try {
    sendTelegram($lead);
} catch (\Throwable $e) {
    logError('Telegram error: ' . $e->getMessage());
}

// ── WhatsApp-ссылка ──
$waText = buildWhatsAppText($lead);
$waLink = 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . rawurlencode($waText);

// ── Успех ──
jsonResponse(true,
    message: 'Спасибо! Мы свяжемся с вами в течение часа.',
    whatsappLink: $waLink,
);


// ═══════════════════════════════════════════════════════════
// ФУНКЦИИ
// ═══════════════════════════════════════════════════════════

/**
 * Санитизация строки
 */
function sanitize(string $value): string
{
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

/**
 * JSON-ответ и завершение
 */
function jsonResponse(
    bool    $success,
    string  $message = '',
    array   $errors  = [],
    string  $whatsappLink = '',
): never {
    $response = ['success' => $success];

    if ($message !== '') {
        $response['message'] = $message;
    }
    if (!empty($errors)) {
        $response['errors'] = $errors;
    }
    if ($whatsappLink !== '') {
        $response['whatsapp_link'] = $whatsappLink;
    }

    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

/**
 * Получение IP клиента
 */
function getClientIp(): string
{
    $headers = ['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP', 'REMOTE_ADDR'];
    foreach ($headers as $header) {
        $ip = $_SERVER[$header] ?? '';
        if ($ip !== '') {
            // X-Forwarded-For может содержать цепочку
            $ip = explode(',', $ip)[0];
            $ip = trim($ip);
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
    return '0.0.0.0';
}

/**
 * Проверка rate limit
 */
function isRateLimited(string $ip): bool
{
    $data = loadRateLimitData();
    $now  = time();
    $key  = md5($ip);

    // Очистка старых записей
    $requests = array_filter(
        $data[$key] ?? [],
        fn(int $ts): bool => ($now - $ts) < RATE_LIMIT_WINDOW
    );

    return count($requests) >= RATE_LIMIT_MAX;
}

/**
 * Запись запроса в rate limit
 */
function recordRequest(string $ip): void
{
    $data = loadRateLimitData();
    $now  = time();
    $key  = md5($ip);

    // Очистка устаревших для этого IP
    $data[$key] = array_filter(
        $data[$key] ?? [],
        fn(int $ts): bool => ($now - $ts) < RATE_LIMIT_WINDOW
    );
    $data[$key][] = $now;

    // Очистка IP без записей (мусор)
    foreach ($data as $k => $timestamps) {
        $data[$k] = array_filter($timestamps, fn(int $ts): bool => ($now - $ts) < RATE_LIMIT_WINDOW);
        if (empty($data[$k])) {
            unset($data[$k]);
        }
    }

    file_put_contents(RATE_LIMIT_FILE, json_encode($data), LOCK_EX);
}

/**
 * Загрузка данных rate limit
 */
function loadRateLimitData(): array
{
    if (!file_exists(RATE_LIMIT_FILE)) {
        return [];
    }
    $content = file_get_contents(RATE_LIMIT_FILE);
    return json_decode($content, true) ?: [];
}

/**
 * Валидация параметров калькулятора
 */
function validateCalcParams(array $data): ?array
{
    $bizType    = $data['calc_biz']       ?? '';
    $taxMode    = $data['calc_tax']       ?? '';
    $employees  = $data['calc_employees'] ?? '';
    $operations = $data['calc_ops']       ?? '';
    $extras     = $data['calc_extras']    ?? '';
    $price      = $data['calc_price']     ?? '';

    if (!in_array($bizType, CALC_BIZ_TYPES, true)) return null;
    if (!in_array($taxMode, CALC_TAX_MODES, true)) return null;
    if (!in_array($employees, CALC_EMPLOYEES, true)) return null;
    if (!in_array($operations, CALC_OPERATIONS, true)) return null;

    // Extras — запятая-разделённый список
    $extraList = [];
    if ($extras !== '') {
        $extraList = explode(',', $extras);
        foreach ($extraList as $e) {
            if (!in_array(trim($e), CALC_EXTRAS, true)) return null;
        }
    }

    return [
        'biz_type'   => $bizType,
        'tax_mode'   => $taxMode,
        'employees'  => $employees,
        'operations' => $operations,
        'extras'     => $extraList,
        'price'      => sanitize($price),
    ];
}

/**
 * Логирование заявки в CSV
 */
function logLead(array $lead): void
{
    $dir = LOG_DIR;
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }

    $file   = $dir . '/leads.csv';
    $exists = file_exists($file);
    $fp     = @fopen($file, 'a');
    if (!$fp) {
        logError('Cannot write to leads.csv');
        return;
    }

    // Заголовок
    if (!$exists) {
        fputcsv($fp, ['Дата', 'Тип', 'Имя', 'Телефон', 'Email', 'Услуга', 'Сообщение', 'Калькулятор', 'IP']);
    }

    $calcStr = '';
    if (!empty($lead['calc'])) {
        $c = $lead['calc'];
        $calcStr = "{$c['biz_type']}/{$c['tax_mode']}, сотр:{$c['employees']}, опер:{$c['operations']}";
        if (!empty($c['extras'])) {
            $calcStr .= ', доп:' . implode('+', $c['extras']);
        }
        if ($c['price'] !== '') {
            $calcStr .= ", от {$c['price']} ₸";
        }
    }

    fputcsv($fp, [
        $lead['date'],
        $lead['type'],
        $lead['name'],
        $lead['phone'],
        $lead['email'],
        $lead['service'],
        $lead['message'],
        $calcStr,
        $lead['ip'],
    ]);

    fclose($fp);
}

/**
 * Логирование ошибок
 */
function logError(string $msg): void
{
    $dir = LOG_DIR;
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
    $line = '[' . date('Y-m-d H:i:s') . '] ' . $msg . PHP_EOL;
    @file_put_contents($dir . '/errors.log', $line, FILE_APPEND | LOCK_EX);
}

/**
 * Отправка email
 */
function sendEmail(array $lead): void
{
    $to = ADMIN_EMAIL;

    // Тема
    $subject = match ($lead['type']) {
        'callback'   => '📞 Обратный звонок — ' . $lead['name'],
        'service'    => '📋 Заявка: ' . ($lead['service'] ?: 'Услуга') . ' — ' . $lead['name'],
        'calculator' => '🧮 Расчёт с калькулятора — ' . $lead['name'],
        default      => '📩 Новая заявка — ' . $lead['name'],
    };

    // Тело HTML
    $body = buildEmailBody($lead);

    // Заголовки
    $headers  = "From: noreply@intact.kz\r\n";
    $headers .= "Reply-To: " . ($lead['email'] ?: ADMIN_EMAIL) . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "MIME-Version: 1.0\r\n";

    $result = @mail($to, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, $headers);

    if (!$result) {
        throw new \RuntimeException('mail() returned false');
    }
}

/**
 * HTML-тело email
 */
function buildEmailBody(array $lead): string
{
    $typeLabel = match ($lead['type']) {
        'callback'   => 'Обратный звонок',
        'service'    => 'Заявка на услугу',
        'calculator' => 'Расчёт с калькулятора',
        default      => 'Заявка',
    };

    $rows = '';
    $rows .= emailRow('Тип заявки', $typeLabel);
    $rows .= emailRow('Имя', $lead['name']);
    $rows .= emailRow('Телефон', $lead['phone']);

    if ($lead['email']) {
        $rows .= emailRow('Email', $lead['email']);
    }
    if ($lead['service']) {
        $rows .= emailRow('Услуга', $lead['service']);
    }
    if ($lead['message']) {
        $rows .= emailRow('Сообщение', nl2br($lead['message']));
    }
    if (!empty($lead['calc'])) {
        $c = $lead['calc'];
        $bizLabel = $c['biz_type'] === 'ip' ? 'ИП' : 'ТОО';
        $taxLabel = $c['tax_mode'] === 'simple' ? 'Упрощённый' : 'Общеустановленный';
        $rows .= emailRow('Форма бизнеса', $bizLabel);
        $rows .= emailRow('Режим', $taxLabel);
        $rows .= emailRow('Сотрудников', $c['employees']);
        $rows .= emailRow('Операций/мес', $c['operations']);
        if (!empty($c['extras'])) {
            $extrasMap = ['kadry'=>'Кадровый учёт','esf'=>'ЭСФ','restore'=>'Восстановление','nds'=>'НДС'];
            $labels = array_map(fn(string $e) => $extrasMap[$e] ?? $e, $c['extras']);
            $rows .= emailRow('Доп. услуги', implode(', ', $labels));
        }
        if ($c['price'] !== '') {
            $rows .= emailRow('Расчёт калькулятора', 'от ' . $c['price'] . ' ₸/мес');
        }
    }

    $rows .= emailRow('Дата', $lead['date']);
    $rows .= emailRow('IP', $lead['ip']);

    return <<<HTML
    <!DOCTYPE html>
    <html>
    <head><meta charset="utf-8"></head>
    <body style="font-family:Arial,sans-serif;color:#2B2B35;max-width:600px;margin:0 auto">
        <div style="background:#2D3561;color:#fff;padding:20px;border-radius:8px 8px 0 0">
            <h2 style="margin:0;font-size:18px">{$typeLabel} — intact.kz</h2>
        </div>
        <table style="width:100%;border-collapse:collapse;background:#fff">
            {$rows}
        </table>
        <div style="padding:16px;background:#F7F5F2;border-radius:0 0 8px 8px;font-size:12px;color:#7A7A8C">
            Это автоматическое уведомление с сайта intact.kz
        </div>
    </body>
    </html>
    HTML;
}

function emailRow(string $label, string $value): string
{
    return <<<HTML
    <tr>
        <td style="padding:10px 16px;border-bottom:1px solid #eee;font-weight:600;width:35%;vertical-align:top;font-size:14px">{$label}</td>
        <td style="padding:10px 16px;border-bottom:1px solid #eee;font-size:14px">{$value}</td>
    </tr>
    HTML;
}

/**
 * Отправка уведомления в Telegram
 */
function sendTelegram(array $lead): void
{
    $token  = TELEGRAM_BOT_TOKEN;
    $chatId = TELEGRAM_CHAT_ID;

    if ($token === '' || $chatId === '') {
        return; // Не настроено — молча пропускаем
    }

    $text = buildTelegramText($lead);

    $url = "https://api.telegram.org/bot{$token}/sendMessage";

    $payload = [
        'chat_id'    => $chatId,
        'text'       => $text,
        'parse_mode' => 'MarkdownV2',
    ];

    $context = stream_context_create([
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-Type: application/json',
            'content' => json_encode($payload),
            'timeout' => 5,
        ],
    ]);

    $result = @file_get_contents($url, false, $context);

    if ($result === false) {
        throw new \RuntimeException('Telegram API request failed');
    }

    $response = json_decode($result, true);
    if (!($response['ok'] ?? false)) {
        throw new \RuntimeException('Telegram API error: ' . ($response['description'] ?? 'unknown'));
    }
}

/**
 * Форматирование текста для Telegram (MarkdownV2)
 */
function buildTelegramText(array $lead): string
{
    $esc = fn(string $s): string => preg_replace('/([_*\[\]()~`>#+\-=|{}.!\\\\])/u', '\\\\$1', $s);

    $typeEmoji = match ($lead['type']) {
        'callback'   => '📞',
        'service'    => '📋',
        'calculator' => '🧮',
        default      => '📩',
    };

    $typeLabel = match ($lead['type']) {
        'callback'   => 'Обратный звонок',
        'service'    => 'Заявка на услугу',
        'calculator' => 'Расчёт с калькулятора',
        default      => 'Новая заявка',
    };

    $lines = [];
    $lines[] = "{$typeEmoji} *" . $esc($typeLabel) . "*";
    $lines[] = '';
    $lines[] = "👤 *Имя:* " . $esc($lead['name']);
    $lines[] = "📱 *Тел:* " . $esc($lead['phone']);

    if ($lead['email']) {
        $lines[] = "📧 *Email:* " . $esc($lead['email']);
    }
    if ($lead['service']) {
        $lines[] = "📂 *Услуга:* " . $esc($lead['service']);
    }
    if ($lead['message']) {
        $lines[] = "💬 *Сообщение:* " . $esc($lead['message']);
    }

    if (!empty($lead['calc'])) {
        $c = $lead['calc'];
        $bizLabel = $c['biz_type'] === 'ip' ? 'ИП' : 'ТОО';
        $taxLabel = $c['tax_mode'] === 'simple' ? 'Упрощённый' : 'Общеустановленный';
        $lines[] = '';
        $lines[] = '🧮 *Параметры калькулятора:*';
        $lines[] = "• Форма: " . $esc($bizLabel);
        $lines[] = "• Режим: " . $esc($taxLabel);
        $lines[] = "• Сотрудников: " . $esc($c['employees']);
        $lines[] = "• Операций/мес: " . $esc($c['operations']);
        if (!empty($c['extras'])) {
            $extrasMap = ['kadry'=>'Кадровый учёт','esf'=>'ЭСФ','restore'=>'Восстановление','nds'=>'НДС'];
            $labels = array_map(fn(string $e) => $extrasMap[$e] ?? $e, $c['extras']);
            $lines[] = "• Доп: " . $esc(implode(', ', $labels));
        }
        if ($c['price'] !== '') {
            $lines[] = "💰 *Расчёт:* от " . $esc($c['price']) . " ₸/мес";
        }
    }

    $lines[] = '';
    $lines[] = "🕐 " . $esc($lead['date']);

    return implode("\n", $lines);
}

/**
 * Формирование текста для WhatsApp-ссылки
 */
function buildWhatsAppText(array $lead): string
{
    $lines = ['Здравствуйте! Оставил(а) заявку на сайте intact.kz.'];

    if ($lead['service']) {
        $lines[] = "Услуга: {$lead['service']}";
    }

    if (!empty($lead['calc'])) {
        $c = $lead['calc'];
        $bizLabel = $c['biz_type'] === 'ip' ? 'ИП' : 'ТОО';
        $taxLabel = $c['tax_mode'] === 'simple' ? 'упрощённый' : 'общий';
        $lines[] = "Параметры: {$bizLabel}, {$taxLabel}, сотр. {$c['employees']}, опер. {$c['operations']}/мес";
        if ($c['price'] !== '') {
            $lines[] = "Калькулятор: от {$c['price']} ₸/мес";
        }
    }

    $lines[] = "Имя: {$lead['name']}";
    $lines[] = "Прошу связаться для уточнения деталей.";

    return implode("\n", $lines);
}
