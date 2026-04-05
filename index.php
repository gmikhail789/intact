<?php
/**
 * INTACT.KZ — Главная страница
 */
$pageTitle       = 'Бухгалтерские услуги в Алматы под ключ | Intact';
$pageDescription = 'Ведение бухгалтерского учёта, сдача отчётности и налоговое сопровождение для ИП и ТОО в Алматы. Первая консультация — бесплатно.';
$pageSlug        = 'home';
$pageCanonical   = 'https://intact.kz/';
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Schema.org: Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AccountingService",
        "name": "Intact — бухгалтерские услуги",
        "url": "https://intact.kz",
        "telephone": "+77074463576",
        "email": "info@intact.kz",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "мкр. Аксай-4, д. 51",
            "addressLocality": "Алматы",
            "addressCountry": "KZ"
        },
        "areaServed": { "@type": "City", "name": "Алматы" },
        "description": "<?= htmlspecialchars($pageDescription) ?>",
        "priceRange": "₸₸",
        "sameAs": ["https://wa.me/77074463576"]
    }
    </script>

    <!-- Schema.org: FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Сколько стоят бухгалтерские услуги для ИП?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Стоимость бухгалтерского обслуживания ИП на упрощённом режиме начинается от от 300 000 ₸ в месяц (пакет «Старт»). Цена зависит от количества операций и режима налогообложения."
                }
            },
            {
                "@type": "Question",
                "name": "Чем аутсорсинг бухгалтерии лучше штатного бухгалтера?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Аутсорсинг обходится в 2-3 раза дешевле штатного бухгалтера (ЗП + налоги + рабочее место). При этом вы получаете команду специалистов вместо одного человека, а ответственность за ошибки несёт аутсорсинговая компания."
                }
            },
            {
                "@type": "Question",
                "name": "Какие формы отчётности сдаёт Intact?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Мы сдаём все формы налоговой отчётности в РК: ФНО 910, 700, 200, 300, 100, а также статистическую отчётность. Работаем через кабинет налогоплательщика и eSalyk."
                }
            },
            {
                "@type": "Question",
                "name": "Как быстро вы можете начать обслуживание?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Обычно мы начинаем работу в течение 1-3 рабочих дней после подписания договора. Если требуется восстановление учёта, сначала проводим бесплатный аудит текущей ситуации."
                }
            },
            {
                "@type": "Question",
                "name": "Работаете ли вы с ИП на упрощёнке?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Да, ИП на упрощённом режиме налогообложения — одно из основных направлений. Пакет «Старт» включает ведение учёта, сдачу ФНО 910 и выписку ЭСФ."
                }
            }
        ]
    }
    </script>
</head>

<body class="page page--home">

<?php include $basePath . '/includes/header.php'; ?>

<main class="page-offset" role="main">

    <!-- ==================== 1. HERO ==================== -->
    <section class="hero section--lg">
        <div class="hero__bg"></div>
        <div class="container">
            <div class="hero__content reveal">
                <h1>Бухгалтерские услуги под ключ для бизнеса в Алматы</h1>
                <p class="hero__subtitle">Надёжно. Прозрачно. Без лишних забот.</p>
                <p>Берём на себя ведение учёта, сдачу отчётности и налоговое сопровождение — вы сосредотачиваетесь на развитии бизнеса. Работаем с ИП и ТОО на любом режиме налогообложения.</p>
                <div class="hero__actions">
                    <a href="#callback" class="btn btn--primary btn--lg">Получить бесплатную консультацию</a>
                    <a href="/pakety.php" class="btn btn--white btn--lg">Смотреть тарифы</a>
                </div>
                <div class="hero__badges">
                    <span class="hero__badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                        eSalyk / ФНО
                    </span>
                    <span class="hero__badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                        1С: Бухгалтерия
                    </span>
                    <span class="hero__badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                        ЭСФ / Виртуальный склад
                    </span>
                    <span class="hero__badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="5"/><path d="M20 21a8 8 0 10-16 0"/></svg>
                        7+ лет опыта
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 2. УСЛУГИ ==================== -->
    <section class="section section--surface" id="uslugi">
        <div class="container">
            <div class="section__header reveal">
                <h2>Наши услуги</h2>
                <p>Полный спектр бухгалтерских и налоговых услуг для ИП и ТОО в Казахстане</p>
            </div>
            <div class="grid grid--3">
                <a href="/uslugi/vedenie-ucheta.php" class="card reveal reveal-delay-1">
                    <div class="card__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1-2-1z"/><path d="M8 8h8M8 12h8M8 16h4"/></svg>
                    </div>
                    <h3 class="card__title">Ведение бухгалтерского учёта</h3>
                    <p class="card__text">Полный цикл учёта в 1С: доходы, расходы, ТМЗ, основные средства, банковские операции.</p>
                    <span class="btn btn--link">Подробнее →</span>
                </a>
                <a href="/uslugi/sdacha-otchetnosti.php" class="card reveal reveal-delay-2">
                    <div class="card__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <h3 class="card__title">Сдача налоговой отчётности</h3>
                    <p class="card__text">Все формы ФНО (910, 700, 200, 300, 100) и статистика — точно в срок через eSalyk.</p>
                    <span class="btn btn--link">Подробнее →</span>
                </a>
                <a href="/uslugi/nalogovoe-soprovozhdenie.php" class="card reveal reveal-delay-3">
                    <div class="card__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="card__title">Налоговое сопровождение</h3>
                    <p class="card__text">Выбор оптимального режима, легальная оптимизация налогов, защита при проверках.</p>
                    <span class="btn btn--link">Подробнее →</span>
                </a>
                <a href="/uslugi/vosstanovlenie-ucheta.php" class="card reveal reveal-delay-1">
                    <div class="card__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 102.13-9.36L1 10"/></svg>
                    </div>
                    <h3 class="card__title">Восстановление учёта</h3>
                    <p class="card__text">Приведём бухгалтерию в порядок после смены бухгалтера или длительного простоя.</p>
                    <span class="btn btn--link">Подробнее →</span>
                </a>
                <a href="/uslugi/registratsiya-ip-too.php" class="card reveal reveal-delay-2">
                    <div class="card__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                    </div>
                    <h3 class="card__title">Регистрация ИП и ТОО</h3>
                    <p class="card__text">Открытие и ликвидация бизнеса с нуля: документы, ОКЭД, выбор режима налогообложения.</p>
                    <span class="btn btn--link">Подробнее →</span>
                </a>
                <a href="/uslugi/kadrovyj-uchet.php" class="card reveal reveal-delay-3">
                    <div class="card__icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <h3 class="card__title">Кадровый учёт и зарплата</h3>
                    <p class="card__text">Расчёт ЗП, ОПВ, ВОСМС, СО, ИПН. Кадровые приказы, табели, трудовые договоры.</p>
                    <span class="btn btn--link">Подробнее →</span>
                </a>
            </div>

            <!-- Главный бухгалтер — выделенная карточка -->
            <a href="/uslugi/glavnyj-buhgalter.php" class="card card--featured reveal" style="margin-top:var(--space-lg);display:flex;align-items:center;gap:var(--space-xl);background:linear-gradient(135deg,var(--color-primary-dark) 0%,#1a2040 100%);color:#fff">
                <div style="flex:0 0 auto">
                    <div class="card__icon" style="background:rgba(255,255,255,0.12);color:#fff">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                </div>
                <div style="flex:1;min-width:0">
                    <div style="font-size:var(--fs-small);font-weight:600;opacity:.7;text-transform:uppercase;letter-spacing:.06em;margin-bottom:4px">Премиум-услуга</div>
                    <h3 class="card__title" style="color:#fff;margin-bottom:var(--space-xs)">Главный бухгалтер на аутсорсинге</h3>
                    <p class="card__text" style="color:rgba(255,255,255,.8);margin-bottom:0">Подпись отчётности, учётная политика, взаимодействие с КГД — вместо штатного главбуха за 800 000–1 200 000 ₸/мес. Экономия в 2–4 раза при полной договорной ответственности.</p>
                </div>
                <div style="flex:0 0 auto;display:flex;flex-direction:column;align-items:flex-end;gap:var(--space-xs)">
                    <div style="font-size:1.5rem;font-weight:700;white-space:nowrap">от 300 000 ₸</div>
                    <div style="font-size:var(--fs-small);opacity:.7">/месяц</div>
                    <span class="btn btn--white btn--sm" style="margin-top:var(--space-xs)">Подробнее →</span>
                </div>
            </a>
        </div>
    </section>

    <!-- ==================== 3. ПАКЕТЫ (превью) ==================== -->
    <section class="section" id="pakety">
        <div class="container">
            <div class="section__header reveal">
                <h2>Пакеты обслуживания</h2>
                <p>Прозрачные цены без скрытых платежей. Выберите подходящий вариант.</p>
            </div>
            <div class="grid grid--2" style="max-width:840px;margin-inline:auto">
                <div class="pricing-card reveal reveal-delay-1">
                    <h3 class="pricing-card__title">Старт</h3>
                    <p style="color:var(--color-text-light);font-size:var(--fs-small)">Для ИП на упрощённом режиме</p>
                    <div class="pricing-card__price">от 300 000 ₸ <span>/ мес</span></div>
                    <ul class="pricing-card__list">
                        <li>Ведение учёта в 1С</li>
                        <li>Сдача ФНО 910 (раз в полгода)</li>
                        <li>Выписка ЭСФ до 30 шт/мес</li>
                        <li>Расчёт налогов и соц. отчислений</li>
                        <li>Консультации по WhatsApp</li>
                    </ul>
                    <a href="/pakety.php" class="btn btn--secondary" style="width:100%">Подробнее</a>
                </div>
                <div class="pricing-card pricing-card--popular reveal reveal-delay-2">
                    <span class="pricing-card__badge">Популярный</span>
                    <h3 class="pricing-card__title">Бизнес</h3>
                    <p style="color:var(--color-text-light);font-size:var(--fs-small)">Для ТОО на общеустановленном режиме</p>
                    <div class="pricing-card__price">от 400 000 ₸ <span>/ мес</span></div>
                    <ul class="pricing-card__list">
                        <li>Всё из пакета «Старт»</li>
                        <li>ФНО 100, 200, 300, 700</li>
                        <li>Кадровый учёт до 5 сотрудников</li>
                        <li>Расчёт заработной платы</li>
                        <li>Налоговое сопровождение</li>
                        <li>Статистическая отчётность</li>
                    </ul>
                    <a href="/pakety.php" class="btn btn--primary" style="width:100%">Оставить заявку</a>
                </div>
            </div>
            <p class="text-center reveal" style="margin-top:var(--space-xl)">
                <a href="/pakety.php" class="btn btn--link">Все пакеты и дополнительные услуги →</a>
            </p>
        </div>
    </section>

    <!-- ==================== 4. ПРЕИМУЩЕСТВА ==================== -->
    <section class="section section--surface">
        <div class="container">
            <div class="section__header reveal">
                <h2>Почему выбирают Intact</h2>
                <p>Мы не просто считаем цифры — мы берём на себя ответственность за ваш учёт</p>
            </div>
            <div class="grid grid--3">
                <div class="card reveal reveal-delay-1" style="text-align:center">
                    <div class="card__icon" style="margin-inline:auto">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
                    </div>
                    <h3 class="card__title">Надёжность</h3>
                    <p class="card__text">Каждая операция проверяется дважды. Ответственность за ошибки закреплена в договоре — мы отвечаем финансово за качество работы.</p>
                </div>
                <div class="card reveal reveal-delay-2" style="text-align:center">
                    <div class="card__icon" style="margin-inline:auto">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <h3 class="card__title">Экономия времени</h3>
                    <p class="card__text">Вам не нужно разбираться в формах ФНО и сроках сдачи. Мы берём рутину на себя — вы занимаетесь тем, что приносит деньги.</p>
                </div>
                <div class="card reveal reveal-delay-3" style="text-align:center">
                    <div class="card__icon" style="margin-inline:auto">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                    <h3 class="card__title">Снижение рисков</h3>
                    <p class="card__text">Штрафы за несвоевременную сдачу отчётности в РК начинаются от 45 МРП. Мы контролируем все сроки и исключаем просрочки.</p>
                </div>
                <div class="card reveal reveal-delay-1" style="text-align:center">
                    <div class="card__icon" style="margin-inline:auto">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </div>
                    <h3 class="card__title">Прозрачность</h3>
                    <p class="card__text">Фиксированная цена в договоре. Ежемесячный отчёт о проделанной работе. Вы всегда знаете, что происходит с вашей бухгалтерией.</p>
                </div>
                <div class="card reveal reveal-delay-2" style="text-align:center">
                    <div class="card__icon" style="margin-inline:auto">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h3 class="card__title">Индивидуальный подход</h3>
                    <p class="card__text">За вами закрепляется персональный бухгалтер, который знает специфику вашего бизнеса. Связь через WhatsApp в рабочее время.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 5. КАК МЫ РАБОТАЕМ ==================== -->
    <section class="section">
        <div class="container">
            <div class="section__header reveal">
                <h2>Как мы работаем</h2>
                <p>4 простых шага от заявки до полного бухгалтерского порядка</p>
            </div>
            <div class="steps">
                <div class="step reveal reveal-delay-1">
                    <h4 class="step__title">Оставляете заявку</h4>
                    <p class="step__text">Позвоните, напишите в WhatsApp или заполните форму на сайте. Мы свяжемся в течение часа.</p>
                </div>
                <div class="step reveal reveal-delay-2">
                    <h4 class="step__title">Бесплатная консультация</h4>
                    <p class="step__text">Анализируем вашу ситуацию, определяем объём работ и подбираем оптимальный пакет обслуживания.</p>
                </div>
                <div class="step reveal reveal-delay-3">
                    <h4 class="step__title">Заключаем договор</h4>
                    <p class="step__text">Фиксируем объём услуг, сроки и стоимость. Никаких скрытых платежей — всё прозрачно.</p>
                </div>
                <div class="step reveal reveal-delay-4">
                    <h4 class="step__title">Работаем и отчитываемся</h4>
                    <p class="step__text">Ведём учёт, сдаём отчётность, отвечаем на вопросы. Ежемесячно — отчёт о выполненной работе.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 6. ОТЗЫВЫ ==================== -->
    <section class="section section--surface">
        <div class="container">
            <div class="section__header reveal">
                <h2>Отзывы наших клиентов</h2>
                <p>Что говорят предприниматели, которые доверили нам свою бухгалтерию</p>
            </div>
            <div class="grid grid--3">
                <div class="card reveal reveal-delay-1">
                    <div style="display:flex;align-items:center;gap:var(--space-sm);margin-bottom:var(--space-md)">
                        <div style="width:48px;height:48px;border-radius:50%;background:var(--color-primary);color:#fff;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:1.25rem">А</div>
                        <div>
                            <strong style="display:block;font-size:var(--fs-small)">Асет Нурланов</strong>
                            <span style="font-size:var(--fs-xs);color:var(--color-text-light)">ИП, интернет-магазин электроники</span>
                        </div>
                    </div>
                    <p class="card__text">«Перешёл на аутсорсинг после того, как штатный бухгалтер допустил ошибку в ФНО 910 и пришёл штраф на 180 000 тенге. За 8 месяцев работы с Intact — ни одной просрочки, все формы сдаются вовремя. Экономлю около 150 000 ₸ в месяц по сравнению со штатным сотрудником.»</p>
                </div>
                <div class="card reveal reveal-delay-2">
                    <div style="display:flex;align-items:center;gap:var(--space-sm);margin-bottom:var(--space-md)">
                        <div style="width:48px;height:48px;border-radius:50%;background:var(--color-accent);color:#fff;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:1.25rem">М</div>
                        <div>
                            <strong style="display:block;font-size:var(--fs-small)">Мадина Калиева</strong>
                            <span style="font-size:var(--fs-xs);color:var(--color-text-light)">Директор ТОО «КалиСтрой»</span>
                        </div>
                    </div>
                    <p class="card__text">«У нас 12 сотрудников, общий режим. Раньше зарплатный расчёт занимал у бухгалтера неделю. Intact делает это за 2 дня — с правильным расчётом ОПВ, ВОСМС, СО. Особенно ценю ежемесячные отчёты: вижу всю картину по налогам в понятном формате.»</p>
                </div>
                <div class="card reveal reveal-delay-3">
                    <div style="display:flex;align-items:center;gap:var(--space-sm);margin-bottom:var(--space-md)">
                        <div style="width:48px;height:48px;border-radius:50%;background:var(--color-primary-light);color:#fff;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);font-size:1.25rem">Д</div>
                        <div>
                            <strong style="display:block;font-size:var(--fs-small)">Дамир Оспанов</strong>
                            <span style="font-size:var(--fs-xs);color:var(--color-text-light)">ИП, сфера услуг</span>
                        </div>
                    </div>
                    <p class="card__text">«Открывал ИП через Intact — помогли выбрать правильный ОКЭД, подсказали оптимальный режим налогообложения. Сейчас на полном обслуживании: я просто скидываю чеки и накладные в WhatsApp, а ребята всё разносят по 1С. Спокоен за свой бизнес.»</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== 7. FAQ ==================== -->
    <section class="section" id="faq">
        <div class="container container--narrow">
            <div class="section__header reveal">
                <h2>Частые вопросы</h2>
            </div>
            <div class="faq-list reveal">
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Сколько стоят бухгалтерские услуги для ИП?</span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="faq-answer">
                        <p>Стоимость бухгалтерского обслуживания ИП на упрощённом режиме начинается от от 300 000 ₸ в месяц (пакет «Старт»). Цена зависит от количества операций, режима налогообложения и дополнительных услуг. Мы подберём оптимальный вариант на бесплатной консультации.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Чем аутсорсинг бухгалтерии лучше штатного бухгалтера?</span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="faq-answer">
                        <p>Аутсорсинг обходится в 2-3 раза дешевле штатного бухгалтера. Средняя зарплата бухгалтера в Алматы — от 400 000 ₸ плюс налоги, рабочее место и отпускные. При аутсорсинге вы получаете команду специалистов за фиксированную сумму, а ответственность за ошибки несёт компания.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Какие формы отчётности вы сдаёте?</span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="faq-answer">
                        <p>Мы сдаём все формы налоговой отчётности в РК: ФНО 910 (для ИП на упрощёнке), 700 (по земельному/имущественному налогу), 200 (по ИПН и соц. налогу), 300 (НДС), 100 (КПН), а также статистическую отчётность. Всё через кабинет налогоплательщика и eSalyk.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Как быстро вы можете начать обслуживание?</span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="faq-answer">
                        <p>Обычно мы начинаем работу в течение 1-3 рабочих дней после подписания договора. Если учёт запущен и требуется восстановление, сначала проводим бесплатный аудит текущей ситуации — это занимает 1-2 дня.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Работаете ли вы с ИП на упрощёнке?</span>
                        <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="faq-answer">
                        <p>Да, ИП на упрощённом режиме налогообложения — одно из основных наших направлений. Пакет «Старт» за от 300 000 ₸/мес включает ведение учёта в 1С, сдачу ФНО 910, выписку ЭСФ и расчёт налогов. Для более сложных случаев подберём индивидуальное решение.</p>
                    </div>
                </div>
            </div>
            <p class="text-center reveal" style="margin-top:var(--space-xl)">
                <a href="/faq.php" class="btn btn--link">Все вопросы и ответы →</a>
            </p>
        </div>
    </section>

    <!-- ==================== 8. CTA-СЕКЦИЯ с формой ==================== -->
    <section class="section section--primary" id="callback">
        <div class="container container--narrow">
            <div class="cta-form-section reveal">
                <div class="cta-form-section__text">
                    <h2>Начните без стресса — первая консультация бесплатно</h2>
                    <p>Оставьте заявку, и мы перезвоним в течение часа. Расскажем, как навести порядок в бухгалтерии и сколько это будет стоить для вашего бизнеса.</p>
                </div>
                <form class="cta-form" action="/send.php" method="POST" data-form="callback" id="callbackForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-input form-input--dark" placeholder="Ваше имя" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" class="form-input form-input--dark" placeholder="+7 ___ ___ __ __" required>
                    </div>
                    <button type="submit" class="btn btn--primary btn--lg" style="width:100%">Перезвоните мне</button>
                    <p style="font-size:var(--fs-xs);opacity:.6;margin-top:var(--space-sm);text-align:center">Нажимая кнопку, вы соглашаетесь с <a href="/privacy-policy.php" style="color:rgba(255,255,255,.8);text-decoration:underline">политикой конфиденциальности</a></p>
                </form>
            </div>
        </div>
    </section>

    <!-- ==================== 9. КОНТАКТЫ (превью) ==================== -->
    <section class="section" id="kontakty">
        <div class="container">
            <div class="section__header reveal">
                <h2>Контакты</h2>
            </div>
            <div class="grid grid--2 reveal">
                <div>
                    <div class="contact-list">
                        <div class="contact-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                            <div>
                                <strong>Телефон</strong><br>
                                <a href="tel:+77074463576">+7 707 446 35 76</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <div>
                                <strong>Email</strong><br>
                                <a href="mailto:info@intact.kz">info@intact.kz</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <div>
                                <strong>Адрес</strong><br>
                                г. Алматы, мкр. Аксай-4, д. 51
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <div>
                                <strong>Режим работы</strong><br>
                                Пн-Пт: 9:00 — 18:00
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Заглушка карты -->
                    <div class="map-placeholder" style="width:100%;height:320px;background:var(--color-surface);border-radius:var(--radius-lg);border:2px dashed var(--color-border);display:flex;align-items:center;justify-content:center;color:var(--color-text-light);text-align:center;padding:var(--space-lg)">
                        <div>
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="margin:0 auto var(--space-sm)"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <p style="font-size:var(--fs-small)">г. Алматы, мкр. Аксай-4, д. 51</p>
                            <a href="https://2gis.kz/almaty/search/Аксай-4%2C%2051" target="_blank" rel="noopener" class="btn btn--sm btn--secondary" style="margin-top:var(--space-sm)">Открыть на карте 2GIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include $basePath . '/includes/footer.php'; ?>

<!-- Скрипты -->
<script src="/assets/js/main.js"></script>
<script src="/assets/js/forms.js"></script>

<!-- Дополнительные стили главной -->
<style>
/* ── HERO ── */
.hero {
    position: relative;
    overflow: hidden;
    background: linear-gradient(135deg, #2D3561 0%, #1a1f3d 60%, #2D3561 100%);
    color: #fff;
    padding: clamp(4rem, 10vw, 7rem) 0 clamp(3rem, 8vw, 5rem);
}

.hero__bg {
    position: absolute;
    inset: 0;
    opacity: .07;
    background-image:
        radial-gradient(circle at 20% 50%, rgba(232,85,61,.5) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255,255,255,.15) 0%, transparent 40%);
    pointer-events: none;
}

.hero .container {
    position: relative;
    z-index: 1;
}

.hero h1 {
    color: #fff;
    font-size: clamp(1.8rem, 5vw, 3.2rem);
    line-height: 1.15;
    margin-bottom: var(--space-md);
    max-width: 700px;
}

.hero h1::after { display: none; }

.hero__subtitle {
    font-family: var(--font-display);
    font-size: clamp(1.05rem, 2.5vw, 1.4rem);
    opacity: .85;
    margin-bottom: var(--space-sm);
    font-style: italic;
    color: rgba(255,255,255,.9);
}

.hero > .container > .hero__content > p {
    font-size: clamp(.95rem, 1.5vw, 1.1rem);
    max-width: 600px;
    opacity: .8;
    line-height: 1.7;
    margin-bottom: var(--space-lg);
}

.hero__actions {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-sm);
    margin-bottom: var(--space-xl);
}

.btn--white {
    background: rgba(255,255,255,.12);
    color: #fff;
    border: 2px solid rgba(255,255,255,.3);
}
.btn--white:hover {
    background: rgba(255,255,255,.2);
    border-color: rgba(255,255,255,.5);
    color: #fff;
}

.hero__badges {
    display: flex;
    flex-wrap: wrap;
    gap: .5rem;
}

.hero__badge {
    display: inline-flex;
    align-items: center;
    gap: .4rem;
    padding: .4rem .9rem;
    background: rgba(255,255,255,.1);
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 100px;
    font-size: .8rem;
    color: rgba(255,255,255,.85);
    white-space: nowrap;
    backdrop-filter: blur(4px);
}

.hero__badge svg {
    flex-shrink: 0;
    opacity: .7;
}

@media (max-width: 480px) {
    .hero__badges {
        gap: .4rem;
    }
    .hero__badge {
        font-size: .75rem;
        padding: .35rem .7rem;
    }
}

/* FAQ-аккордеон */
.faq-list { max-width: 720px; margin-inline: auto; }
.faq-item { border-bottom: 1px solid var(--color-border); }
.faq-question {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--space-md) 0;
    text-align: left;
    font-size: var(--fs-body);
    font-weight: 600;
    color: var(--color-text);
    cursor: pointer;
    background: none;
    border: none;
    gap: var(--space-md);
}
.faq-question:hover { color: var(--color-accent); }
.faq-icon {
    flex-shrink: 0;
    transition: transform var(--transition-base);
}
.faq-item.is-open .faq-icon { transform: rotate(180deg); }
.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, padding 0.3s ease;
    padding: 0;
}
.faq-item.is-open .faq-answer {
    padding-bottom: var(--space-md);
}
.faq-answer p {
    color: var(--color-text-light);
    font-size: var(--fs-small);
    line-height: 1.7;
}

/* CTA-форма */
.cta-form-section {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: var(--space-2xl);
    align-items: center;
}
.cta-form-section__text h2 { color: #fff; }
.cta-form-section__text h2::after { display: none; }
.cta-form-section__text p { opacity: .85; }
.form-input--dark {
    background: rgba(255,255,255,0.1);
    border-color: rgba(255,255,255,0.2);
    color: #fff;
}
.form-input--dark::placeholder { color: rgba(255,255,255,0.5); }
.form-input--dark:focus {
    border-color: var(--color-accent);
    box-shadow: 0 0 0 3px rgba(232,85,61,0.2);
    background: rgba(255,255,255,0.15);
}

/* Контакты */
.contact-list { display: flex; flex-direction: column; gap: var(--space-lg); }
.contact-item {
    display: flex;
    align-items: flex-start;
    gap: var(--space-md);
    font-size: var(--fs-small);
}
.contact-item strong {
    display: block;
    margin-bottom: 2px;
    font-size: var(--fs-body);
}

/* Pricing-карточки (из preview) */
.pricing-card { background:var(--color-surface);border-radius:var(--radius-lg);padding:var(--space-xl);box-shadow:var(--shadow-card);border:2px solid transparent;transition:all var(--transition-base);text-align:center;position:relative }
.pricing-card:hover { box-shadow:var(--shadow-lg) }
.pricing-card--popular { border-color:var(--color-accent) }
.pricing-card__badge { position:absolute;top:-14px;left:50%;transform:translateX(-50%);background:var(--color-accent);color:#fff;padding:.35rem 1.25rem;border-radius:var(--radius-full);font-size:var(--fs-xs);font-weight:700;text-transform:uppercase;letter-spacing:.5px;white-space:nowrap }
.pricing-card__title { font-family:var(--font-display);font-size:var(--fs-h3);margin-bottom:var(--space-xs) }
.pricing-card__price { font-size:2.5rem;font-weight:700;color:var(--color-primary-dark);margin:var(--space-md) 0 var(--space-xs) }
.pricing-card__price span { font-size:var(--fs-small);font-weight:400;color:var(--color-text-light) }
.pricing-card__list { text-align:left;margin:var(--space-lg) 0 }
.pricing-card__list li { padding:.4rem 0;font-size:var(--fs-small);color:var(--color-text);display:flex;align-items:flex-start;gap:var(--space-sm) }
.pricing-card__list li::before { content:'✓';color:var(--color-success);font-weight:700;flex-shrink:0 }

/* Steps */
.steps { display:grid;grid-template-columns:repeat(4,1fr);gap:var(--space-lg);counter-reset:step }
.step { text-align:center;position:relative;counter-increment:step }
.step::before { content:counter(step);display:flex;align-items:center;justify-content:center;width:48px;height:48px;margin:0 auto var(--space-md);background:var(--color-accent);color:#fff;border-radius:50%;font-family:var(--font-display);font-size:1.25rem }
.step__title { font-family:var(--font-display);font-size:var(--fs-h4);margin-bottom:var(--space-xs) }
.step__text { font-size:var(--fs-small);color:var(--color-text-light) }

@media (max-width: 1024px) {
    .cta-form-section { grid-template-columns: 1fr; gap: var(--space-xl); }
    .steps { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 640px) {
    .steps { grid-template-columns: 1fr; }
}
</style>

<!-- JS для FAQ аккордеона -->
<script>
document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
        const item = btn.parentElement;
        const answer = item.querySelector('.faq-answer');
        const isOpen = item.classList.contains('is-open');

        // Закрываем все
        document.querySelectorAll('.faq-item').forEach(i => {
            i.classList.remove('is-open');
            i.querySelector('.faq-answer').style.maxHeight = null;
            i.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        });

        // Открываем текущий (если был закрыт)
        if (!isOpen) {
            item.classList.add('is-open');
            answer.style.maxHeight = answer.scrollHeight + 'px';
            btn.setAttribute('aria-expanded', 'true');
        }
    });
});
</script>

</body>
</html>
