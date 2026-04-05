<?php

declare(strict_types=1);

/**
 * INTACT.KZ — Конфигурация
 * ─────────────────────────
 * Заполни TELEGRAM_BOT_TOKEN и TELEGRAM_CHAT_ID перед деплоем.
 */

// ── Telegram Bot API ──
define('TELEGRAM_BOT_TOKEN', '8745221779:AAEFQWWsy68HyLVpA8ILWnwSX2Hu-22pCHs');          // Токен из @BotFather
define('TELEGRAM_CHAT_ID', '6708367489');            // ID чата (узнать через @userinfobot)

// ── Почта ──
define('ADMIN_EMAIL', 'info@intact.kz');

// ── WhatsApp ──
define('WHATSAPP_NUMBER', '77074463576');

// ── Домен ──
define('SITE_DOMAIN', 'https://intact.kz');
define('ALLOWED_ORIGIN', 'https://intact.kz');

// ── Rate Limiting ──
define('RATE_LIMIT_MAX', 3);               // Макс. запросов с одного IP
define('RATE_LIMIT_WINDOW', 600);          // За N секунд (600 = 10 мин)
define('RATE_LIMIT_PHONE_MAX', 2);         // Макс. заявок с одного номера телефона
define('RATE_LIMIT_PHONE_WINDOW', 86400);  // За сутки (86400 сек)

// ── Допустимые префиксы операторов КЗ ──
// Источник: КЦМР (Казахстан), актуально на 2025 год
define('KZ_PHONE_PREFIXES', [
    '700','701','702','705','706','707','708',
    '711','712','713','714','715','716','717','718',
    '721','722','723','724','725','726','727','728','729',
    '747','751',
    '771','775','776','777','778',
]);

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
