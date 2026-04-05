<?php
$pageTitle       = 'Контакты Intact — бухгалтерские услуги Алматы';
$pageDescription = 'Свяжитесь с Intact: +7 707 446 35 76, info@intact.kz, мкр. Аксай-4, Алматы. Бесплатная консультация по бухгалтерским услугам.';
$pageSlug        = 'kontakty';
$pageCanonical   = 'https://intact.kz/kontakty.php';
$basePath        = __DIR__;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($pageCanonical) ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($pageCanonical) ?>">
    <meta property="og:site_name" content="Intact — бухгалтерские услуги">
    <meta property="og:locale" content="ru_RU">
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
        {"@type":"ListItem","position":1,"name":"Главная","item":"https://intact.kz/"},
        {"@type":"ListItem","position":2,"name":"Контакты","item":"<?=$pageCanonical?>"}
    ]}</script>
</head>
<body class="page page--contacts">
<?php include $basePath . '/includes/header.php'; ?>

<main class="page-offset" role="main">

    <section class="section">
        <div class="container">
            <div class="section__header reveal">
                <h1>Контакты Intact — бухгалтерские услуги Алматы</h1>
                <p>Свяжитесь удобным способом — ответим в течение часа в рабочее время</p>
            </div>

            <div class="contacts-grid reveal">

                <!-- Контактная информация -->
                <div class="contacts-info">
                    <div class="contact-block">
                        <div class="contact-block__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <div>
                            <h3>Телефон</h3>
                            <a href="tel:+77074463576" class="contact-block__value">+7 707 446 35 76</a>
                        </div>
                    </div>

                    <div class="contact-block">
                        <div class="contact-block__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <a href="mailto:info@intact.kz" class="contact-block__value">info@intact.kz</a>
                        </div>
                    </div>

                    <div class="contact-block">
                        <div class="contact-block__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <h3>Адрес</h3>
                            <p class="contact-block__value">г. Алматы, мкр. Аксай-4, д. 51</p>
                        </div>
                    </div>

                    <div class="contact-block">
                        <div class="contact-block__icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <div>
                            <h3>Режим работы</h3>
                            <p class="contact-block__value">Пн–Пт: 9:00–18:00<br>Сб: по предварительной записи</p>
                        </div>
                    </div>

                    <div class="contact-messengers">
                        <a href="https://wa.me/77074463576" target="_blank" rel="noopener" class="messenger-btn messenger-btn--wa">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            WhatsApp
                        </a>
                        <a href="https://t.me/+77074463576" target="_blank" rel="noopener" class="messenger-btn messenger-btn--tg">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.479.33-.913.492-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>
                            Telegram
                        </a>
                    </div>
                </div>

                <!-- Форма обратной связи -->
                <div class="contacts-form" id="consultation">
                    <div class="contacts-form__card">
                        <h2>Напишите нам</h2>
                        <p style="font-size:var(--fs-small);color:var(--color-text-light);margin-bottom:var(--space-lg)">Заполните форму — мы перезвоним в течение часа в рабочее время</p>
                        <form action="/send.php" method="POST" data-form="service">
                            <input type="hidden" name="source" value="contacts">
                            <div class="form-group">
                                <label for="cName" class="form-label">Ваше имя</label>
                                <input type="text" id="cName" name="name" class="form-input" placeholder="Как к вам обращаться?" required>
                            </div>
                            <div class="form-group">
                                <label for="cPhone" class="form-label">Телефон</label>
                                <input type="tel" id="cPhone" name="phone" class="form-input" placeholder="+7 (___) ___-__-__" required>
                            </div>
                            <div class="form-group">
                                <label for="cEmail" class="form-label">Email</label>
                                <input type="email" id="cEmail" name="email" class="form-input" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label for="cMsg" class="form-label">Сообщение</label>
                                <textarea id="cMsg" name="message" class="form-input" rows="4" placeholder="Опишите вашу ситуацию или задайте вопрос..."></textarea>
                            </div>
                            <button type="submit" class="btn btn--primary" style="width:100%">Отправить</button>
                            <p style="font-size:var(--fs-xs);color:var(--color-text-light);margin-top:var(--space-sm);text-align:center">Нажимая кнопку, вы соглашаетесь с <a href="/privacy-policy.php">политикой конфиденциальности</a></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Карта -->
    <section class="section section--surface">
        <div class="container">
            <div class="map-wrapper reveal" id="mapWrapper">
                <div class="map-placeholder" id="mapPlaceholder">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--color-text-light)" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    <p><strong>г. Алматы, мкр. Аксай-4, д. 51</strong></p>
                    <button class="btn btn--secondary btn--sm" id="loadMap">Показать на карте</button>
                    <p style="margin-top:var(--space-sm)"><a href="https://2gis.kz/almaty/search/Аксай-4%2C%2051" target="_blank" rel="noopener" style="font-size:var(--fs-xs);color:var(--color-accent)">Открыть в 2GIS →</a></p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include $basePath . '/includes/footer.php'; ?>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/forms.js"></script>

<style>
.contacts-grid{display:grid;grid-template-columns:1fr 1fr;gap:var(--space-2xl);align-items:start}
@media(max-width:768px){.contacts-grid{grid-template-columns:1fr}}

.contacts-info{display:flex;flex-direction:column;gap:var(--space-lg)}
.contact-block{display:flex;gap:var(--space-md);align-items:flex-start}
.contact-block__icon{width:48px;height:48px;border-radius:var(--radius-md);background:var(--color-accent-light);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.contact-block h3{font-size:var(--fs-small);color:var(--color-text-light);font-weight:400;margin-bottom:2px}
.contact-block__value{font-size:var(--fs-body);font-weight:600;color:var(--color-text);line-height:1.5}
a.contact-block__value:hover{color:var(--color-accent)}

.contact-messengers{display:flex;gap:var(--space-sm);margin-top:var(--space-sm)}
.messenger-btn{display:inline-flex;align-items:center;gap:var(--space-xs);padding:.6rem 1.2rem;border-radius:var(--radius-full);font-size:var(--fs-small);font-weight:600;color:#fff;transition:opacity var(--transition-fast)}
.messenger-btn:hover{opacity:.85;color:#fff}
.messenger-btn--wa{background:#25D366}
.messenger-btn--tg{background:#0088cc}

.contacts-form__card{background:var(--color-surface);border-radius:var(--radius-lg);padding:var(--space-xl);box-shadow:var(--shadow-card);border:1px solid var(--color-border)}
.contacts-form__card h2{font-size:var(--fs-h3);margin-bottom:var(--space-xs)}
.contacts-form__card h2::after{display:none}
.form-label{display:block;font-size:var(--fs-small);font-weight:600;margin-bottom:var(--space-xs);color:var(--color-text)}

.map-wrapper{border-radius:var(--radius-lg);overflow:hidden;height:400px;position:relative}
.map-placeholder{height:100%;display:flex;flex-direction:column;align-items:center;justify-content:center;background:var(--color-surface);border:2px dashed var(--color-border);text-align:center;gap:var(--space-sm);padding:var(--space-lg)}
.map-placeholder p{margin:0;color:var(--color-text-light)}
.map-wrapper iframe{width:100%;height:100%;border:0}
</style>

<script>
document.getElementById('loadMap')?.addEventListener('click',function(){
    const wrapper = document.getElementById('mapWrapper');
    const iframe = document.createElement('iframe');
    iframe.src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.8!2d76.87!3d43.22!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z!5e0!3m2!1sru!2skz!4v1';
    iframe.loading = 'lazy';
    iframe.allowFullscreen = true;
    iframe.referrerPolicy = 'no-referrer-when-downgrade';
    wrapper.innerHTML = '';
    wrapper.appendChild(iframe);
});
</script>

</body>
</html>
