<?php
$pageTitle       = 'Пакеты бухгалтерских услуг для ИП и ТОО | Intact';
$pageDescription = 'Готовые пакеты бухгалтерского обслуживания от Intact: «Старт» для ИП и «Бизнес» для ТОО. Прозрачные цены, всё включено. Калькулятор стоимости.';
$pageSlug        = 'pakety';
$pageCanonical   = 'https://intact.kz/pakety.php';
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
    <script type="application/ld+json">
    {"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
        {"@type":"ListItem","position":1,"name":"Главная","item":"https://intact.kz/"},
        {"@type":"ListItem","position":2,"name":"Пакеты обслуживания","item":"<?=$pageCanonical?>"}
    ]}
    </script>
</head>
<body class="page page--pakety">
<?php include $basePath . '/includes/header.php'; ?>

<main class="page-offset" role="main">

    <section class="section">
        <div class="container">
            <div class="section__header reveal">
                <h1>Пакеты бухгалтерского обслуживания в Алматы</h1>
                <p>Прозрачные цены, фиксированная стоимость в договоре. Выберите подходящий пакет или рассчитайте индивидуальную стоимость.</p>
            </div>

            <!-- Пакеты -->
            <div class="pkg-grid reveal">

                <!-- СТАРТ -->
                <div class="pkg-card">
                    <div class="pkg-card__header">
                        <span class="pkg-card__label">Для ИП и малого бизнеса</span>
                        <h2 class="pkg-card__title">Старт</h2>
                        <div class="pkg-card__price">от 300 000 ₸ <span>/ мес</span></div>
                    </div>
                    <div class="pkg-card__body">
                        <p class="pkg-card__desc">Всё необходимое для ИП на упрощённом режиме: учёт, отчётность, налоги. Идеально для начинающих предпринимателей с небольшим оборотом.</p>
                        <ul class="pkg-card__list">
                            <li class="included">Ведение учёта в 1С: Бухгалтерия</li>
                            <li class="included">Обработка первичных документов (до 30/мес)</li>
                            <li class="included">Сдача ФНО 910 (раз в полугодие)</li>
                            <li class="included">Сдача ФНО 200 (ежеквартально, если есть сотрудники)</li>
                            <li class="included">Статистическая отчётность</li>
                            <li class="included">Выписка ЭСФ до 30 шт/мес</li>
                            <li class="included">Расчёт налогов и соц. отчислений</li>
                            <li class="included">Контроль сроков сдачи и уплаты</li>
                            <li class="included">Ежемесячный отчёт для руководителя</li>
                            <li class="included">Консультации по WhatsApp в рабочее время</li>
                            <li class="excluded">Кадровый учёт и расчёт зарплаты</li>
                            <li class="excluded">НДС (ФНО 300)</li>
                            <li class="excluded">КПН (ФНО 100)</li>
                            <li class="excluded">Налоговое сопровождение</li>
                        </ul>
                        <p class="pkg-card__note">Подходит: ИП на упрощёнке, до 30 операций/мес, до 2 сотрудников</p>
                    </div>
                    <div class="pkg-card__footer">
                        <a href="https://wa.me/77074463576?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82%20%D0%BF%D0%B0%D0%BA%D0%B5%D1%82%20%D0%A1%D1%82%D0%B0%D1%80%D1%82" target="_blank" class="btn btn--secondary" style="width:100%">Выбрать «Старт»</a>
                    </div>
                </div>

                <!-- БИЗНЕС -->
                <div class="pkg-card pkg-card--popular">
                    <div class="pkg-card__badge">Популярный выбор</div>
                    <div class="pkg-card__header">
                        <span class="pkg-card__label">Для растущих компаний</span>
                        <h2 class="pkg-card__title">Бизнес</h2>
                        <div class="pkg-card__price">от 400 000 ₸ <span>/ мес</span></div>
                    </div>
                    <div class="pkg-card__body">
                        <p class="pkg-card__desc">Полное бухгалтерское и налоговое сопровождение для ТОО и ИП с сотрудниками. Системный подход, никаких сбоев и просрочек.</p>
                        <ul class="pkg-card__list">
                            <li class="included">Всё из пакета «Старт»</li>
                            <li class="included">Полный бухгалтерский учёт (общеустановленный режим)</li>
                            <li class="included">Обработка документов до 100/мес</li>
                            <li class="included">ФНО 100, 200, 300, 700 — все формы</li>
                            <li class="included">Кадровый учёт до 5 сотрудников</li>
                            <li class="included">Расчёт заработной платы (ОПВ, ВОСМС, СО, ИПН)</li>
                            <li class="included">Налоговое сопровождение</li>
                            <li class="included">НДС — учёт и декларация</li>
                            <li class="included">Статистическая отчётность</li>
                            <li class="included">Управленческий отчёт ежемесячно</li>
                            <li class="included">Приоритетные консультации</li>
                        </ul>
                        <p class="pkg-card__note">Подходит: ТОО на общем режиме, ИП с сотрудниками, компании с НДС</p>
                    </div>
                    <div class="pkg-card__footer">
                        <a href="https://wa.me/77074463576?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%98%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82%20%D0%BF%D0%B0%D0%BA%D0%B5%D1%82%20%D0%91%D0%B8%D0%B7%D0%BD%D0%B5%D1%81" target="_blank" class="btn btn--primary" style="width:100%">Выбрать «Бизнес»</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Калькулятор -->
    <section class="section section--surface" id="calculator">
        <div class="container">
            <div class="section__header reveal">
                <h2>Рассчитайте стоимость обслуживания</h2>
                <p>Ответьте на несколько вопросов — и получите ориентировочную стоимость для вашего бизнеса</p>
            </div>
            <div class="calc reveal">
                <div class="calc__form">
                    <div class="calc__group">
                        <label class="calc__label">Форма бизнеса</label>
                        <div class="calc__options">
                            <label class="calc__radio"><input type="radio" name="bizType" value="ip" checked><span>ИП</span></label>
                            <label class="calc__radio"><input type="radio" name="bizType" value="too"><span>ТОО</span></label>
                        </div>
                    </div>
                    <div class="calc__group">
                        <label class="calc__label">Режим налогообложения</label>
                        <div class="calc__options">
                            <label class="calc__radio"><input type="radio" name="taxMode" value="simple" checked><span>Упрощённый</span></label>
                            <label class="calc__radio"><input type="radio" name="taxMode" value="general"><span>Общеустановленный</span></label>
                        </div>
                    </div>
                    <div class="calc__group">
                        <label class="calc__label">Количество сотрудников</label>
                        <div class="calc__options calc__options--wrap">
                            <label class="calc__radio"><input type="radio" name="employees" value="0" checked><span>0</span></label>
                            <label class="calc__radio"><input type="radio" name="employees" value="1-5"><span>1–5</span></label>
                            <label class="calc__radio"><input type="radio" name="employees" value="6-15"><span>6–15</span></label>
                            <label class="calc__radio"><input type="radio" name="employees" value="16+"><span>16+</span></label>
                        </div>
                    </div>
                    <div class="calc__group">
                        <label class="calc__label">Операций в месяц</label>
                        <div class="calc__options calc__options--wrap">
                            <label class="calc__radio"><input type="radio" name="operations" value="30" checked><span>до 30</span></label>
                            <label class="calc__radio"><input type="radio" name="operations" value="100"><span>30–100</span></label>
                            <label class="calc__radio"><input type="radio" name="operations" value="300"><span>100–300</span></label>
                            <label class="calc__radio"><input type="radio" name="operations" value="300+"><span>300+</span></label>
                        </div>
                    </div>
                    <div class="calc__group">
                        <label class="calc__label">Дополнительные услуги</label>
                        <div class="calc__checks">
                            <label class="calc__check"><input type="checkbox" name="extra" value="kadry"><span>Кадровый учёт и расчёт ЗП</span></label>
                            <label class="calc__check"><input type="checkbox" name="extra" value="esf"><span>Выписка ЭСФ (более 30/мес)</span></label>
                            <label class="calc__check"><input type="checkbox" name="extra" value="restore"><span>Восстановление учёта</span></label>
                            <label class="calc__check"><input type="checkbox" name="extra" value="nds"><span>Учёт НДС</span></label>
                        </div>
                    </div>
                </div>
                <div class="calc__result">
                    <div class="calc__result-inner">
                        <p class="calc__result-label">Ориентировочная стоимость</p>
                        <div class="calc__result-price">от <span id="calcPrice">25 000</span> ₸<small>/мес</small></div>
                        <p class="calc__result-note">Точная стоимость — после бесплатной консультации</p>
                        <a href="https://wa.me/77074463576?text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!%20%D0%A5%D0%BE%D1%87%D1%83%20%D1%83%D0%B7%D0%BD%D0%B0%D1%82%D1%8C%20%D1%82%D0%BE%D1%87%D0%BD%D1%83%D1%8E%20%D1%81%D1%82%D0%BE%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D1%8C" target="_blank" class="btn btn--primary" style="width:100%" id="calcCta">Получить точный расчёт</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Дополнительные услуги -->
    <section class="section">
        <div class="container">
            <div class="section__header reveal">
                <h2>Дополнительные услуги</h2>
                <p>Можно заказать отдельно или добавить к пакету обслуживания</p>
            </div>
            <div class="extras-grid reveal">
                <div class="extras-item">
                    <div class="extras-item__info">
                        <h3><a href="/uslugi/vosstanovlenie-ucheta.php">Восстановление бухгалтерского учёта</a></h3>
                        <p>Приведём запущенную бухгалтерию в порядок: 1С, отчётность, налоги</p>
                    </div>
                    <div class="extras-item__price">от 200 000 ₸</div>
                </div>
                <div class="extras-item">
                    <div class="extras-item__info">
                        <h3><a href="/uslugi/registratsiya-ip-too.php">Регистрация ИП</a></h3>
                        <p>Под ключ: ОКЭД, режим, eGov, ЭЦП, банковский счёт</p>
                    </div>
                    <div class="extras-item__price">от 30 000 ₸</div>
                </div>
                <div class="extras-item">
                    <div class="extras-item__info">
                        <h3><a href="/uslugi/registratsiya-ip-too.php">Регистрация ТОО</a></h3>
                        <p>Устав, регистрация, постановка на учёт, открытие счёта</p>
                    </div>
                    <div class="extras-item__price">от 50 000 ₸</div>
                </div>
                <div class="extras-item">
                    <div class="extras-item__info">
                        <h3><a href="/uslugi/registratsiya-ip-too.php">Ликвидация ИП / ТОО</a></h3>
                        <p>Закроем бизнес грамотно: сверка, отчётность, снятие с учёта</p>
                    </div>
                    <div class="extras-item__price">от от 300 000 ₸</div>
                </div>
                <div class="extras-item">
                    <div class="extras-item__info">
                        <h3>Разовая консультация</h3>
                        <p>По налогам, режимам, отчётности, камеральному контролю</p>
                    </div>
                    <div class="extras-item__price">от 30 000 ₸</div>
                </div>
                <div class="extras-item">
                    <div class="extras-item__info">
                        <h3>Сопровождение налоговой проверки</h3>
                        <p>Подготовка документов, ответы на запросы КГД, представительство</p>
                    </div>
                    <div class="extras-item__price">от 200 000 ₸</div>
                </div>
                <div class="extras-item">
                    <div class="extras-item__info">
                        <h3>Постановка учёта с нуля</h3>
                        <p>Настройка 1С, учётная политика, план счетов, первые проводки</p>
                    </div>
                    <div class="extras-item__price">от 30 000 ₸</div>
                </div>
                <div class="extras-item">
                    <div class="extras-item__info">
                        <h3>Помощь с ЭСФ и виртуальным складом</h3>
                        <p>Настройка, обучение, регулярная выписка, сверка остатков</p>
                    </div>
                    <div class="extras-item__price">от 10 000 ₸</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section--primary">
        <div class="container" style="text-align:center">
            <div class="reveal">
                <h2>Не знаете, какой пакет выбрать?</h2>
                <p style="max-width:600px;margin-inline:auto;opacity:.85;margin-bottom:var(--space-lg)">Позвоните или напишите — мы бесплатно проанализируем вашу ситуацию и подберём оптимальный вариант обслуживания.</p>
                <a href="https://wa.me/77074463576" target="_blank" class="btn btn--white btn--lg">Бесплатная консультация</a>
            </div>
        </div>
    </section>

</main>

<?php include $basePath . '/includes/footer.php'; ?>
<script src="/assets/js/main.js"></script>

<style>
/* Пакеты */
.pkg-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:var(--space-xl);max-width:920px;margin-inline:auto;align-items:start}
@media(max-width:768px){.pkg-grid{grid-template-columns:1fr}}
.pkg-card{background:var(--color-surface);border-radius:var(--radius-lg);border:2px solid var(--color-border);overflow:hidden;display:flex;flex-direction:column;position:relative;transition:box-shadow var(--transition-base)}
.pkg-card:hover{box-shadow:var(--shadow-lg)}
.pkg-card--popular{border-color:var(--color-accent)}
.pkg-card__badge{position:absolute;top:0;right:0;background:var(--color-accent);color:#fff;padding:.4rem 1.2rem;font-size:var(--fs-xs);font-weight:700;text-transform:uppercase;letter-spacing:.5px;border-radius:0 0 0 var(--radius-md)}
.pkg-card__header{padding:var(--space-xl) var(--space-xl) var(--space-md);text-align:center;border-bottom:1px solid var(--color-border)}
.pkg-card__label{font-size:var(--fs-xs);color:var(--color-text-light);text-transform:uppercase;letter-spacing:1px}
.pkg-card__title{font-family:var(--font-display);font-size:2rem;margin:.5rem 0}
.pkg-card__price{font-size:2.5rem;font-weight:700;color:var(--color-primary-dark)}
.pkg-card__price span{font-size:var(--fs-small);font-weight:400;color:var(--color-text-light)}
.pkg-card__body{padding:var(--space-xl);flex:1}
.pkg-card__desc{font-size:var(--fs-small);color:var(--color-text-light);margin-bottom:var(--space-md)}
.pkg-card__list{list-style:none;padding:0;margin:0}
.pkg-card__list li{padding:.45rem 0;font-size:var(--fs-small);display:flex;align-items:flex-start;gap:.5rem}
.pkg-card__list li.included::before{content:'✓';color:var(--color-success);font-weight:700;flex-shrink:0}
.pkg-card__list li.excluded{opacity:.4}
.pkg-card__list li.excluded::before{content:'—';color:var(--color-text-light);flex-shrink:0}
.pkg-card__note{margin-top:var(--space-md);font-size:var(--fs-xs);color:var(--color-text-light);background:var(--color-bg);padding:var(--space-sm) var(--space-md);border-radius:var(--radius-sm)}
.pkg-card__footer{padding:0 var(--space-xl) var(--space-xl)}

/* Калькулятор */
.calc{display:grid;grid-template-columns:1.4fr 1fr;gap:var(--space-2xl);align-items:start;max-width:920px;margin-inline:auto}
@media(max-width:768px){.calc{grid-template-columns:1fr}}
.calc__group{margin-bottom:var(--space-lg)}
.calc__label{display:block;font-weight:600;font-size:var(--fs-small);margin-bottom:var(--space-sm);color:var(--color-text)}
.calc__options{display:flex;gap:var(--space-xs);flex-wrap:wrap}
.calc__options--wrap{gap:var(--space-xs)}
.calc__radio{cursor:pointer}
.calc__radio input{position:absolute;opacity:0;width:0;height:0}
.calc__radio span{display:inline-block;padding:.5rem 1rem;border:2px solid var(--color-border);border-radius:var(--radius-full);font-size:var(--fs-small);transition:all var(--transition-fast);user-select:none}
.calc__radio input:checked+span{border-color:var(--color-accent);background:var(--color-accent);color:#fff}
.calc__radio:hover span{border-color:var(--color-accent)}
.calc__checks{display:flex;flex-direction:column;gap:var(--space-xs)}
.calc__check{display:flex;align-items:center;gap:var(--space-sm);cursor:pointer;font-size:var(--fs-small)}
.calc__check input{accent-color:var(--color-accent);width:18px;height:18px}
.calc__result-inner{background:var(--color-surface);border-radius:var(--radius-lg);padding:var(--space-xl);box-shadow:var(--shadow-card);border:2px solid var(--color-primary);text-align:center;position:sticky;top:calc(var(--header-height)+var(--space-lg))}
.calc__result-label{font-size:var(--fs-small);color:var(--color-text-light);margin-bottom:var(--space-xs)}
.calc__result-price{font-size:2.5rem;font-weight:700;color:var(--color-primary-dark);margin-bottom:var(--space-xs);line-height:1.2}
.calc__result-price small{font-size:var(--fs-small);font-weight:400;color:var(--color-text-light)}
.calc__result-note{font-size:var(--fs-xs);color:var(--color-text-light);margin-bottom:var(--space-lg)}

/* Доп. услуги */
.extras-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:var(--space-md);max-width:920px;margin-inline:auto}
@media(max-width:640px){.extras-grid{grid-template-columns:1fr}}
.extras-item{display:flex;justify-content:space-between;align-items:center;gap:var(--space-md);padding:var(--space-md) var(--space-lg);background:var(--color-surface);border-radius:var(--radius-md);border:1px solid var(--color-border);transition:box-shadow var(--transition-fast)}
.extras-item:hover{box-shadow:var(--shadow-card)}
.extras-item h3{font-size:var(--fs-body);font-family:var(--font-body);font-weight:600;margin-bottom:2px}
.extras-item h3 a{color:var(--color-text)}
.extras-item h3 a:hover{color:var(--color-accent)}
.extras-item p{font-size:var(--fs-xs);color:var(--color-text-light);margin:0}
.extras-item__price{white-space:nowrap;font-weight:700;color:var(--color-primary-dark);font-size:var(--fs-small)}
</style>

<!-- Калькулятор JS -->
<script>
(function(){
    const form = document.querySelector('.calc__form');
    const priceEl = document.getElementById('calcPrice');
    const ctaEl = document.getElementById('calcCta');

    function calc(){
        const biz = form.querySelector('[name="bizType"]:checked').value;
        const tax = form.querySelector('[name="taxMode"]:checked').value;
        const emp = form.querySelector('[name="employees"]:checked').value;
        const ops = form.querySelector('[name="operations"]:checked').value;
        const extras = [...form.querySelectorAll('[name="extra"]:checked')].map(e=>e.value);

        // Base price
        let base;
        if(biz==='ip' && tax==='simple') base = 25000;
        else if(biz==='ip' && tax==='general') base = 45000;
        else if(biz==='too' && tax==='simple') base = 35000;
        else base = 65000;

        // Employee multiplier
        const empMult = {'0':1, '1-5':1.15, '6-15':1.4, '16+':1.8};
        base *= empMult[emp] || 1;

        // Operations multiplier
        const opsMult = {'30':1, '100':1.2, '300':1.5, '300+':1.9};
        base *= opsMult[ops] || 1;

        // Extras
        if(extras.includes('kadry')){
            const kadryAdd = {'0':0, '1-5':10000, '6-15':25000, '16+':45000};
            base += kadryAdd[emp] || 0;
        }
        if(extras.includes('esf')) base += 5000;
        if(extras.includes('nds') && tax==='simple') base += 15000;
        if(extras.includes('restore')) base += 50000;

        // Round to nearest 5000
        const result = Math.round(base / 5000) * 5000;
        priceEl.textContent = result.toLocaleString('ru-RU');

        // Update CTA with params
        const params = `Форма: ${biz.toUpperCase()}, Режим: ${tax==='simple'?'упрощённый':'общий'}, Сотрудников: ${emp}, Операций: ${ops}${extras.length?', Доп: '+extras.join(', '):''}`;
        const text = encodeURIComponent(`Здравствуйте! Интересует бухгалтерское обслуживание.\n${params}\nКалькулятор показал: от ${result.toLocaleString('ru-RU')} ₸/мес.\nПрошу уточнить стоимость.`);
        ctaEl.href = `https://wa.me/77074463576?text=${text}`;
    }

    form.addEventListener('change', calc);
    calc();
})();
</script>

</body>
</html>
