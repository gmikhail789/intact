# INTACT.KZ — Инструкция по деплою на Plesk

## Структура проекта (финальная)

```
/httpdocs/                          ← document root в Plesk
├── .htaccess                       ← безопасность, gzip, кеш, HTTPS
├── index.php                       ← главная (лендинг)
├── pakety.php                      ← пакеты + калькулятор
├── o-kompanii.php                  ← о компании
├── faq.php                         ← FAQ (18 вопросов)
├── kontakty.php                    ← контакты + форма
├── privacy-policy.php              ← политика конфиденциальности
├── 404.php                         ← страница ошибки
├── send.php                        ← обработчик всех форм
├── config.php                      ← конфигурация (ЗАПОЛНИТЬ!)
├── robots.txt                      ← для поисковиков
├── sitemap.xml                     ← карта сайта
├── includes/
│   ├── header.php
│   └── footer.php
├── assets/
│   ├── css/
│   │   ├── style.css               ← основные стили
│   │   └── service.css             ← стили страниц услуг
│   └── js/
│       ├── main.js                 ← меню, скролл, анимации
│       └── forms.js                ← обработка форм (fetch)
├── uslugi/
│   ├── vedenie-ucheta.php
│   ├── sdacha-otchetnosti.php
│   ├── nalogovoe-soprovozhdenie.php
│   ├── vosstanovlenie-ucheta.php
│   ├── registratsiya-ip-too.php
│   └── kadrovyj-uchet.php
└── logs/
    ├── .htaccess                   ← deny from all
    └── .gitkeep
```

**Удалить перед деплоем:** `template.php` (шаблон-справочник, не для продакшена).


---

## Пошаговая инструкция

### 1. Подготовка домена в Plesk

1. Зайди в **Plesk → Websites & Domains**
2. Убедись, что домен `intact.kz` создан и указывает на сервер (A-запись → IP сервера)
3. Document root должен быть `/httpdocs/`


### 2. Загрузка файлов

1. Открой **File Manager** в Plesk (или подключись по SFTP)
2. Загрузи **всё содержимое** папки `intact-site/` в `/httpdocs/`
3. Убедись, что `.htaccess` загрузился (скрытые файлы!)
4. Убедись, что структура папок сохранилась (`includes/`, `assets/`, `uslugi/`, `logs/`)


### 3. Проверка PHP

1. **Plesk → PHP Settings** для домена
2. Версия: **PHP 8.1+** (идеально 8.4)
3. Расширения (должны быть включены):
   - `mbstring`
   - `json` (встроен с 8.0)
   - `fileinfo`
   - `openssl` (для Telegram API)
   - `curl` (альтернатива для Telegram)
4. `allow_url_fopen = On` (нужно для Telegram через `file_get_contents`)
5. `mail()` — должна работать (проверь в Plesk → Mail)


### 4. Настройка SSL

1. **Plesk → SSL/TLS Certificates**
2. Установи **Let's Encrypt** (бесплатный)
3. Включи **Redirect HTTP to HTTPS** (если Plesk поддерживает — иначе это делает `.htaccess`)
4. Проверь: `https://intact.kz` — должен открываться без предупреждений


### 5. Заполнение config.php

Открой `config.php` и заполни:

```php
define('TELEGRAM_BOT_TOKEN', 'СЮДА_ТОКЕН');  // из @BotFather
define('TELEGRAM_CHAT_ID', 'СЮДА_CHAT_ID');  // из @userinfobot
```

**Как получить:**
1. Напиши `/newbot` боту `@BotFather` в Telegram → получишь токен
2. Напиши боту `@userinfobot` → получишь свой chat_id
3. Напиши что-нибудь своему новому боту (обязательно — чтобы он мог отвечать)


### 6. Права доступа

В SSH или File Manager:

```bash
# Папки — 755
find /var/www/vhosts/intact.kz/httpdocs -type d -exec chmod 755 {} \;

# Файлы — 644
find /var/www/vhosts/intact.kz/httpdocs -type f -exec chmod 644 {} \;

# Logs — запись для PHP
chmod 755 /var/www/vhosts/intact.kz/httpdocs/logs/
```


### 7. Тестирование формы

Отправь тестовую заявку через curl:

```bash
curl -X POST https://intact.kz/send.php \
  -H "Content-Type: application/json" \
  -H "Origin: https://intact.kz" \
  -d '{
    "type": "callback",
    "name": "Тест",
    "phone": "+77001234567",
    "_token": '$(date +%s)'
  }'
```

Ожидаемый ответ:
```json
{
  "success": true,
  "message": "Спасибо! Мы свяжемся с вами в течение часа.",
  "whatsapp_link": "https://wa.me/77074463576?text=..."
}
```

**Проверь:**
- Пришло ли сообщение в Telegram-бота
- Пришло ли письмо на info@intact.kz
- Появилась ли строка в `logs/leads.csv`


### 8. Проверка безопасности

```bash
# config.php — должен вернуть 403
curl -sI https://intact.kz/config.php | head -1
# Ожидается: HTTP/2 403

# logs/ — должен вернуть 403
curl -sI https://intact.kz/logs/leads.csv | head -1
# Ожидается: HTTP/2 403

# Несуществующая страница — 404
curl -sI https://intact.kz/blabla | head -1
# Ожидается: HTTP/2 404
```


### 9. Регистрация в поисковиках

**Яндекс.Вебмастер:**
1. Перейди на https://webmaster.yandex.ru
2. Добавь сайт `https://intact.kz`
3. Подтверди владение (мета-тег или DNS)
4. Загрузи sitemap: `https://intact.kz/sitemap.xml`

**Google Search Console:**
1. Перейди на https://search.google.com/search-console
2. Добавь ресурс `https://intact.kz`
3. Подтверди (DNS TXT-запись — самый надёжный способ)
4. Отправь sitemap: `https://intact.kz/sitemap.xml`


### 10. Яндекс.Метрика (опционально)

1. Создай счётчик на https://metrika.yandex.ru
2. Скопируй код счётчика
3. Вставь в `includes/footer.php` перед `</body>` (или в `includes/header.php` перед `</head>`)
4. Настрой цели: отправка формы, клик по WhatsApp, клик по телефону


---

## Чек-лист финальной проверки

```
□  Все 11 страниц открываются без ошибок (200 OK)
□  HTTPS работает, HTTP → HTTPS редирект
□  www.intact.kz → intact.kz редирект
□  Формы отправляются → приходят в Telegram + email
□  Калькулятор на /pakety.php работает, кнопка CTA ведёт в WhatsApp
□  Мобильная версия корректна (DevTools → 375px, 768px)
□  config.php недоступен через браузер (403)
□  /logs/ недоступен через браузер (403)
□  sitemap.xml доступен и валиден
□  robots.txt доступен и корректен
□  404.php показывается для несуществующих URL
□  PageSpeed Insights: Mobile > 80
□  Яндекс.Вебмастер: сайт добавлен, sitemap загружен
□  Google Search Console: сайт добавлен, sitemap загружен
```


---

## Быстрые проверки через браузер

| URL | Ожидание |
|-----|----------|
| https://intact.kz | Главная, 200 |
| https://intact.kz/pakety.php | Пакеты + калькулятор |
| https://intact.kz/uslugi/vedenie-ucheta.php | Статья |
| https://intact.kz/config.php | **403 Forbidden** |
| https://intact.kz/logs/ | **403 Forbidden** |
| https://intact.kz/nonexistent | **404** с навигацией |
| https://intact.kz/sitemap.xml | XML-карта |
| https://intact.kz/robots.txt | Текст robots |
| http://intact.kz | Редирект → https:// |
| http://www.intact.kz | Редирект → https://intact.kz |
