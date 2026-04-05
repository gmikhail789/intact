<?php

declare(strict_types=1);

/**
 * INTACT.KZ — Конфигурация
 * ─────────────────────────
 * Заполни TELEGRAM_BOT_TOKEN и TELEGRAM_CHAT_ID перед деплоем.
 */

// ── Telegram Bot API ──
define('TELEGRAM_BOT_TOKEN', '');          // Токен из @BotFather
define('TELEGRAM_CHAT_ID', '');            // ID чата (узнать через @userinfobot)

// ── Почта ──
define('ADMIN_EMAIL', 'info@intact.kz');

// ── WhatsApp ──
define('WHATSAPP_NUMBER', '77074463576');

// ── Домен ──
define('SITE_DOMAIN', 'https://intact.kz');
define('ALLOWED_ORIGIN', 'https://intact.kz');

// ── Rate Limiting ──
define('RATE_LIMIT_MAX', 5);               // Макс. запросов
define('RATE_LIMIT_WINDOW', 600);          // За N секунд (600 = 10 мин)

// ── Белый список услуг ──
define('ALLOWED_SERVICES', [
    'Ведение бухгалтерского учёта',
    'Сдача отчётности',
    'Налоговое сопровождение',
    'Восстановление учёта',
    'Регистрация / ликвидация ИП и ТОО',
    'Кадровый учёт и расчёт зарплаты',
    'Главный бухгалтер',
    'Разовая консультация',
    'Другое',
]);

// ── Белые списки параметров калькулятора ──
define('CALC_BIZ_TYPES', ['ip', 'too']);
define('CALC_TAX_MODES', ['simple', 'general']);
define('CALC_EMPLOYEES', ['0', '1-5', '6-15', '16+']);
define('CALC_OPERATIONS', ['30', '100', '300', '300+']);
define('CALC_EXTRAS', ['kadry', 'esf', 'restore', 'nds']);

// ── Пути ──
define('LOG_DIR', __DIR__ . '/logs');
define('RATE_LIMIT_FILE', sys_get_temp_dir() . '/intact_rate_limit.json');
