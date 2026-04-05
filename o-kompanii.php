<?php
$pageTitle       = 'О компании Intact | Бухгалтерский аутсорсинг Алматы';
$pageDescription = 'Intact — надёжный партнёр по бухгалтерскому обслуживанию бизнеса в Алматы. Работаем с ИП и ТОО, удалённо и в офисе. 7+ лет опыта.';
$pageSlug        = 'o-kompanii';
$pageCanonical   = 'https://intact.kz/o-kompanii.php';
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
        {"@type":"ListItem","position":2,"name":"О компании","item":"<?=$pageCanonical?>"}
    ]}</script>
</head>
<body class="page page--about">
<?php include $basePath . '/includes/header.php'; ?>

<main class="page-offset" role="main">

    <section class="section">
        <div class="container container--narrow">
            <div class="reveal">
                <h1>О компании Intact — бухгалтерские услуги в Алматы</h1>

                <p class="lead" style="font-size:clamp(1.05rem,2vw,1.2rem);line-height:1.8">Intact — это команда профессиональных бухгалтеров с опытом работы в казахстанском бизнесе. Мы работаем с ИП и ТОО в Алматы: от стартапов, которые только открывают первое дело, до действующих компаний с десятками сотрудников и миллионными оборотами.</p>

                <p>Наша задача проста и конкретна: взять на себя всю бухгалтерскую рутину, чтобы вы могли сосредоточиться на том, что приносит деньги — на своём бизнесе. Мы не просто считаем цифры. Мы следим за сроками, контролируем изменения в законодательстве, защищаем ваши интересы перед налоговой и экономим ваше время.</p>
            </div>
        </div>
    </section>

    <!-- Счётчики -->
    <section class="section section--surface">
        <div class="container">
            <div class="counters reveal">
                <div class="counter">
                    <div class="counter__number" data-target="50">0</div>
                    <div class="counter__suffix">+</div>
                    <div class="counter__label">клиентов на обслуживании</div>
                </div>
                <div class="counter">
                    <div class="counter__number" data-target="7">0</div>
                    <div class="counter__suffix">+</div>
                    <div class="counter__label">лет опыта в бухгалтерии РК</div>
                </div>
                <div class="counter">
                    <div class="counter__number" data-target="500">0</div>
                    <div class="counter__suffix">+</div>
                    <div class="counter__label">отчётов сдано вовремя</div>
                </div>
                <div class="counter">
                    <div class="counter__number" data-target="0">0</div>
                    <div class="counter__suffix"></div>
                    <div class="counter__label">штрафов по вине Intact</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container container--narrow">
            <div class="reveal">
                <h2>Наша миссия</h2>
                <p>Мы верим, что предприниматель не должен разбираться в формах ФНО, кодах ОКЭД и ставках социальных отчислений. Это наша работа. Ваша работа — строить бизнес, создавать продукты, обслуживать клиентов. Наша миссия — освободить вас от бухгалтерской рутины и дать уверенность, что с учётом и налогами всё в полном порядке.</p>

                <h2>Как мы работаем</h2>
                <p><strong>Основной формат — удалённое сопровождение.</strong> Вы передаёте документы через WhatsApp, email или в облачное хранилище. Мы ведём учёт в 1С, считаем налоги, сдаём отчётность — всё дистанционно. Вам не нужно приезжать к нам и тратить время на дорогу. Связь — в рабочее время по любому удобному каналу.</p>

                <p><strong>Онлайн-консультации</strong> по видеосвязи или телефону. Разберём любой вопрос: от выбора режима налогообложения до реакции на уведомление из налоговой. Для клиентов на обслуживании — без ограничений по количеству.</p>

                <p><strong>Офлайн-встречи при необходимости.</strong> Если ситуация требует личного общения (передача документов, сложные переговоры, подготовка к проверке) — встречаемся в удобном месте. Мы располагаемся в мкр. Аксай-4, г. Алматы.</p>

                <h2>Наши принципы</h2>

                <p><strong>Надёжность.</strong> Каждая операция проверяется дважды. Ответственность за ошибки — наша, и это закреплено в договоре. За всё время работы у нас ноль штрафов, наложенных по вине бухгалтера.</p>

                <p><strong>Прозрачность.</strong> Фиксированная цена в договоре, никаких скрытых платежей. Ежемесячный отчёт о проделанной работе. Вы всегда знаете, что происходит с вашей бухгалтерией — и сколько это стоит.</p>

                <p><strong>Индивидуальный подход.</strong> У нас нет конвейера. За каждым клиентом закрепляется персональный бухгалтер, который знает специфику вашего бизнеса, ваших контрагентов и вашу историю. Не нужно каждый раз объяснять всё с нуля.</p>

                <p><strong>Актуальность.</strong> Налоговый кодекс РК обновляется регулярно. Мы следим за всеми изменениями и оперативно адаптируем учёт наших клиентов. Вы узнаёте о важных изменениях раньше, чем они вступают в силу.</p>

                <h2>Почему аутсорсинг, а не штатный бухгалтер</h2>
            </div>

            <div class="comparison-table reveal" style="max-width:720px">
                <table>
                    <thead><tr><th>Параметр</th><th>Штатный бухгалтер</th><th>Intact</th></tr></thead>
                    <tbody>
                        <tr><td>Стоимость</td><td>от 500 000+ ₸/мес (ЗП+налоги+место)</td><td>от 500 000+ ₸/мес</td></tr>
                        <tr><td>Непрерывность</td><td>Отпуск/больничный = простой</td><td>Работа не прерывается</td></tr>
                        <tr><td>Ответственность</td><td>Штрафы — ваши</td><td>В договоре</td></tr>
                        <tr><td>Экспертиза</td><td>1 человек</td><td>Команда специалистов</td></tr>
                        <tr><td>Обновления</td><td>За ваш счёт</td><td>Включено</td></tr>
                        <tr><td>ПО (1С)</td><td>Лицензия за ваш счёт</td><td>Включено</td></tr>
                    </tbody>
                </table>
            </div>

            <div class="reveal" style="margin-top:var(--space-xl)">
                <p>Аутсорсинг — это не компромисс, а более эффективная модель. Вы получаете тот же (и более высокий) уровень сервиса за значительно меньшую стоимость. А при необходимости всегда можете перейти на штатного бухгалтера — мы передадим базу 1С в полном порядке.</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--primary">
        <div class="container" style="text-align:center">
            <div class="reveal">
                <h2>Готовы передать бухгалтерию профессионалам?</h2>
                <p style="max-width:600px;margin-inline:auto;opacity:.85;margin-bottom:var(--space-lg)">Первая консультация бесплатна. Расскажите о своём бизнесе — подберём оптимальное решение.</p>
                <a href="https://wa.me/77074463576" target="_blank" class="btn btn--white btn--lg">Написать в WhatsApp</a>
            </div>
        </div>
    </section>

</main>

<?php include $basePath . '/includes/footer.php'; ?>
<script src="/assets/js/main.js"></script>

<style>
.comparison-table{overflow-x:auto;border-radius:var(--radius-md);border:1px solid var(--color-border)}
.comparison-table table{width:100%;border-collapse:collapse;font-size:var(--fs-small)}
.comparison-table th,.comparison-table td{padding:.75rem 1rem;text-align:left;border-bottom:1px solid var(--color-border)}
.comparison-table th{background:var(--color-primary);color:#fff;font-weight:600;font-size:var(--fs-xs);text-transform:uppercase;letter-spacing:.5px}
.comparison-table th:last-child{background:var(--color-accent)}
.comparison-table tr:last-child td{border-bottom:none}
.comparison-table tr:nth-child(even) td{background:var(--color-bg)}
.comparison-table td:last-child{color:var(--color-primary);font-weight:600}

.counters{display:grid;grid-template-columns:repeat(4,1fr);gap:var(--space-xl);text-align:center}
@media(max-width:768px){.counters{grid-template-columns:repeat(2,1fr)}}
.counter__number{font-family:var(--font-display);font-size:clamp(2.5rem,5vw,3.5rem);color:var(--color-accent);display:inline}
.counter__suffix{display:inline;font-family:var(--font-display);font-size:clamp(2rem,4vw,2.5rem);color:var(--color-accent)}
.counter__label{font-size:var(--fs-small);color:var(--color-text-light);margin-top:var(--space-xs)}
</style>

<!-- Counter animation -->
<script>
(function(){
    const observer = new IntersectionObserver((entries)=>{
        entries.forEach(entry=>{
            if(!entry.isIntersecting) return;
            const counters = entry.target.querySelectorAll('.counter__number');
            counters.forEach(el=>{
                const target = parseInt(el.dataset.target);
                if(target===0){el.textContent='0';return}
                const duration = 1500;
                const step = target / (duration/16);
                let current = 0;
                const timer = setInterval(()=>{
                    current+=step;
                    if(current>=target){current=target;clearInterval(timer)}
                    el.textContent=Math.round(current);
                },16);
            });
            observer.unobserve(entry.target);
        });
    },{threshold:0.3});
    const el=document.querySelector('.counters');
    if(el) observer.observe(el);
})();
</script>

</body>
</html>
