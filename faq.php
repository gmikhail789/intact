<?php
$pageTitle       = 'FAQ — вопросы о бухгалтерских услугах | Intact Алматы';
$pageDescription = 'Ответы на частые вопросы о бухгалтерском обслуживании для ИП и ТОО в Алматы: цены, сроки, формат работы, гарантии.';
$pageSlug        = 'faq';
$pageCanonical   = 'https://intact.kz/faq.php';
$basePath        = __DIR__;

$faqCategories = [
    'Общие вопросы' => [
        ['q'=>'Чем аутсорсинг бухгалтерии лучше штатного бухгалтера?','a'=>'Аутсорсинг обходится в 3-5 раз дешевле (от от 300 000 ₸/мес вместо 300 000+ ₸ на штатного сотрудника). Вы получаете команду специалистов вместо одного человека, непрерывность работы (нет простоев из-за отпуска или больничного) и договорную ответственность за ошибки. <a href="/o-kompanii.php">Подробнее о нашем подходе</a>.'],
        ['q'=>'Как начать работу с Intact?','a'=>'Напишите нам в <a href="https://wa.me/77074463576" target="_blank">WhatsApp</a> или позвоните. На бесплатной консультации мы разберём вашу ситуацию, определим объём работ и предложим оптимальный пакет. После подписания договора начинаем работу в течение 1-3 рабочих дней.'],
        ['q'=>'Работаете ли вы с компаниями из других городов Казахстана?','a'=>'Да. Наш основной формат — удалённое сопровождение, поэтому мы работаем с клиентами из любого города РК. Документы передаются электронно, отчётность сдаётся дистанционно через кабинет налогоплательщика и eSalyk.'],
        ['q'=>'Какой формат работы: удалённо или в офисе?','a'=>'Основной формат — удалённый. Вы отправляете документы через WhatsApp, email или облачное хранилище, мы ведём учёт и сдаём отчётность дистанционно. При необходимости встречаемся лично — наш офис в мкр. Аксай-4, Алматы.'],
    ],
    'Услуги и цены' => [
        ['q'=>'Сколько стоит бухгалтерское обслуживание?','a'=>'Пакет «Старт» для ИП на упрощённом режиме — от от 300 000 ₸/мес. Пакет «Бизнес» для ТОО на общем режиме — от от 400 000 ₸/мес. Точная стоимость зависит от количества операций, сотрудников и дополнительных услуг. <a href="/pakety.php#calculator">Рассчитайте стоимость в калькуляторе</a>.'],
        ['q'=>'Что входит в ежемесячное обслуживание?','a'=>'Ведение учёта в 1С, обработка первичных документов, расчёт всех налогов и обязательных платежей, <a href="/uslugi/sdacha-otchetnosti.php">сдача отчётности</a> в установленные сроки, выписка ЭСФ, контроль дедлайнов и ежемесячный управленческий отчёт. Полный перечень зависит от <a href="/pakety.php">выбранного пакета</a>.'],
        ['q'=>'Можно ли заказать разовую услугу?','a'=>'Да. Мы оказываем разовые услуги: <a href="/uslugi/vosstanovlenie-ucheta.php">восстановление учёта</a>, <a href="/uslugi/registratsiya-ip-too.php">регистрация или ликвидация</a> ИП/ТОО, налоговая консультация, аудит бухгалтерии, постановка учёта с нуля. Полный <a href="/pakety.php">список и цены</a>.'],
        ['q'=>'Работаете ли вы с 1С?','a'=>'Да, мы ведём учёт в 1С: Бухгалтерия для Казахстана — это отраслевой стандарт в РК. Лицензия 1С включена в стоимость обслуживания. Мы используем актуальную версию с последними обновлениями законодательства.'],
        ['q'=>'Есть ли скидки при заключении долгосрочного договора?','a'=>'Да, мы предоставляем скидку при оплате за квартал (5%) или за год (10%). Также действуют специальные условия для клиентов, перешедших на обслуживание после восстановления учёта.'],
    ],
    'Отчётность и налоги' => [
        ['q'=>'Какие формы отчётности нужно сдавать ИП на упрощёнке?','a'=>'ИП на упрощённом режиме сдаёт <a href="/uslugi/sdacha-otchetnosti.php">ФНО 910</a> — раз в полугодие (до 15 августа и 15 февраля). Если есть сотрудники — также ФНО 200 ежеквартально. Плюс статистическая отчётность по видам деятельности.'],
        ['q'=>'Какие сроки сдачи отчётности в Казахстане?','a'=>'Зависит от формы: ФНО 910 — раз в полугодие, ФНО 200 — ежеквартально, ФНО 300 (НДС) — ежеквартально, ФНО 100 (КПН) — раз в год до 31 марта. Мы формируем индивидуальный календарь дедлайнов для каждого клиента и напоминаем заранее.'],
        ['q'=>'Что будет, если просрочить сдачу ФНО?','a'=>'Штраф за несвоевременную сдачу — от 15 МРП (~55 380 ₸) для малого бизнеса. Повторное нарушение — 30 МРП. Плюс пеня за несвоевременную уплату налогов. За всё время работы Intact — ни одной просрочки у наших клиентов.'],
        ['q'=>'Помогаете ли вы при налоговых проверках?','a'=>'Да. <a href="/uslugi/nalogovoe-soprovozhdenie.php">Налоговое сопровождение</a> включает: анализ уведомлений, подготовку пояснений, представительство при камеральном контроле, подготовку документов для тематических и комплексных проверок. Стоимость — от 50 000 ₸ или включена в пакет «Бизнес».'],
    ],
    'Гарантии и безопасность' => [
        ['q'=>'Кто несёт ответственность за ошибки в учёте?','a'=>'Ответственность Intact за корректность ведения учёта и своевременность сдачи отчётности закреплена в договоре. Если ошибка допущена по нашей вине и привела к штрафу — мы компенсируем убытки. За всё время работы таких случаев не было.'],
        ['q'=>'Как обеспечивается конфиденциальность данных?','a'=>'Конфиденциальность закреплена в договоре (раздел о неразглашении). Доступ к вашей базе 1С и кабинетам имеют только закреплённые за вами специалисты. Мы не передаём данные клиентов третьим лицам ни при каких обстоятельствах.'],
        ['q'=>'Есть ли договор на оказание услуг?','a'=>'Обязательно. Мы работаем только по договору, в котором чётко прописаны: перечень услуг, сроки, стоимость, ответственность сторон, условия конфиденциальности. Никаких устных договорённостей — всё фиксируется документально.'],
        ['q'=>'Что произойдёт, если мы решим расторгнуть договор?','a'=>'Вы можете расторгнуть договор в любой момент с уведомлением за 30 дней. Мы передадим вам полностью актуальную базу 1С, все документы и отчётность. Никаких штрафов за расторжение — вы свободны в выборе.'],
    ],
];

// Build Schema.org FAQPage
$faqSchema = ['@context'=>'https://schema.org','@type'=>'FAQPage','mainEntity'=>[]];
foreach($faqCategories as $cat=>$items){
    foreach($items as $item){
        $faqSchema['mainEntity'][] = [
            '@type'=>'Question',
            'name'=>$item['q'],
            'acceptedAnswer'=>['@type'=>'Answer','text'=>strip_tags($item['a'])]
        ];
    }
}
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
        {"@type":"ListItem","position":2,"name":"FAQ","item":"<?=$pageCanonical?>"}
    ]}</script>
    <script type="application/ld+json"><?= json_encode($faqSchema, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) ?></script>
</head>
<body class="page page--faq">
<?php include $basePath . '/includes/header.php'; ?>

<main class="page-offset" role="main">
    <section class="section">
        <div class="container container--narrow">
            <div class="section__header reveal">
                <h1>Частые вопросы о бухгалтерских услугах</h1>
                <p>Не нашли ответ? <a href="https://wa.me/77074463576" target="_blank">Напишите нам</a> — ответим в течение часа.</p>
            </div>

            <?php foreach($faqCategories as $category => $items): ?>
            <div class="faq-category reveal">
                <h2 class="faq-category__title"><?= htmlspecialchars($category) ?></h2>
                <div class="faq-list">
                    <?php foreach($items as $item): ?>
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span><?= htmlspecialchars($item['q']) ?></span>
                            <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                        </button>
                        <div class="faq-answer">
                            <p><?= $item['a'] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </section>

    <section class="section section--primary">
        <div class="container" style="text-align:center"><div class="reveal">
            <h2>Не нашли ответ на свой вопрос?</h2>
            <p style="max-width:600px;margin-inline:auto;opacity:.85;margin-bottom:var(--space-lg)">Напишите нам — ответим бесплатно и без обязательств.</p>
            <a href="https://wa.me/77074463576" target="_blank" class="btn btn--white btn--lg">Спросить в WhatsApp</a>
        </div></div>
    </section>
</main>

<?php include $basePath . '/includes/footer.php'; ?>
<script src="/assets/js/main.js"></script>

<style>
.faq-category{margin-bottom:var(--space-2xl)}
.faq-category__title{font-family:var(--font-display);font-size:var(--fs-h3);color:var(--color-primary-dark);margin-bottom:var(--space-md);padding-bottom:var(--space-sm);border-bottom:2px solid var(--color-accent)}
.faq-category__title::after{display:none}
.faq-list{max-width:100%}
.faq-item{border-bottom:1px solid var(--color-border)}
.faq-question{width:100%;display:flex;justify-content:space-between;align-items:center;padding:var(--space-md) 0;text-align:left;font-size:var(--fs-body);font-weight:600;color:var(--color-text);cursor:pointer;background:none;border:none;font-family:var(--font-body);gap:var(--space-md)}
.faq-question:hover{color:var(--color-accent)}
.faq-icon{flex-shrink:0;transition:transform var(--transition-base)}
.faq-item.is-open .faq-icon{transform:rotate(180deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height .4s ease}
.faq-item.is-open .faq-answer{padding-bottom:var(--space-md)}
.faq-answer p{color:var(--color-text-light);font-size:var(--fs-small);line-height:1.7}
.faq-answer a{color:var(--color-accent);text-decoration:underline}
</style>

<script>
document.querySelectorAll('.faq-question').forEach(btn=>{
    btn.addEventListener('click',()=>{
        const item=btn.parentElement;
        const answer=item.querySelector('.faq-answer');
        const isOpen=item.classList.contains('is-open');
        // Close all in same category
        item.closest('.faq-list').querySelectorAll('.faq-item').forEach(i=>{
            i.classList.remove('is-open');
            i.querySelector('.faq-answer').style.maxHeight=null;
            i.querySelector('.faq-question').setAttribute('aria-expanded','false');
        });
        if(!isOpen){
            item.classList.add('is-open');
            answer.style.maxHeight=answer.scrollHeight+'px';
            btn.setAttribute('aria-expanded','true');
        }
    });
});
</script>

</body>
</html>
