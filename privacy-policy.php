<?php
$pageTitle       = 'Политика конфиденциальности | Intact';
$pageDescription = 'Политика конфиденциальности и обработки персональных данных на сайте intact.kz.';
$pageSlug        = 'privacy-policy';
$pageCanonical   = 'https://intact.kz/privacy-policy.php';
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
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="page">
<?php include $basePath . '/includes/header.php'; ?>

<main class="page-offset" role="main">
    <section class="section">
        <div class="container container--narrow">
            <h1>Политика конфиденциальности</h1>
            <p><em>Дата последнего обновления: <?= date('d.m.Y') ?></em></p>

            <h2>1. Общие положения</h2>
            <p>Настоящая Политика конфиденциальности определяет порядок обработки и защиты персональных данных пользователей сайта intact.kz (далее — «Сайт»), принадлежащего компании Intact (далее — «Оператор»).</p>
            <p>Используя Сайт и предоставляя свои персональные данные через формы обратной связи, Пользователь выражает согласие с условиями настоящей Политики.</p>

            <h2>2. Какие данные мы собираем</h2>
            <p>При заполнении форм на Сайте мы можем собирать следующие данные:</p>
            <ul style="margin:var(--space-md) 0;padding-left:var(--space-lg);list-style:disc">
                <li>Имя (как к вам обращаться)</li>
                <li>Номер телефона</li>
                <li>Адрес электронной почты (при указании)</li>
                <li>Содержание сообщения</li>
                <li>Параметры запроса (тип услуги, параметры калькулятора)</li>
            </ul>
            <p>Также автоматически собираются технические данные: IP-адрес, тип браузера, дата и время обращения. Эти данные используются для защиты от злоупотреблений и не передаются третьим лицам.</p>

            <h2>3. Цели обработки данных</h2>
            <p>Персональные данные обрабатываются исключительно для:</p>
            <ul style="margin:var(--space-md) 0;padding-left:var(--space-lg);list-style:disc">
                <li>Связи с Пользователем по его запросу (обратный звонок, консультация)</li>
                <li>Подготовки коммерческого предложения</li>
                <li>Улучшения качества обслуживания</li>
            </ul>

            <h2>4. Хранение и защита данных</h2>
            <p>Оператор принимает необходимые организационные и технические меры для защиты персональных данных от неправомерного доступа, уничтожения, изменения или распространения. Данные хранятся на защищённом сервере и доступны только уполномоченным сотрудникам.</p>

            <h2>5. Передача данных третьим лицам</h2>
            <p>Оператор не передаёт персональные данные третьим лицам, за исключением случаев, предусмотренных законодательством Республики Казахстан.</p>

            <h2>6. Права пользователя</h2>
            <p>Пользователь имеет право:</p>
            <ul style="margin:var(--space-md) 0;padding-left:var(--space-lg);list-style:disc">
                <li>Запросить информацию о своих персональных данных, находящихся у Оператора</li>
                <li>Потребовать удаления или исправления своих персональных данных</li>
                <li>Отозвать согласие на обработку персональных данных</li>
            </ul>
            <p>Для реализации этих прав обратитесь по адресу: <a href="mailto:info@intact.kz">info@intact.kz</a>.</p>

            <h2>7. Файлы cookie</h2>
            <p>Сайт может использовать файлы cookie для обеспечения корректной работы и анализа посещаемости. Пользователь может отключить cookie в настройках браузера.</p>

            <h2>8. Изменение Политики</h2>
            <p>Оператор оставляет за собой право вносить изменения в настоящую Политику. Актуальная версия всегда доступна по адресу: <a href="/privacy-policy.php">intact.kz/privacy-policy.php</a>.</p>

            <h2>9. Контакты</h2>
            <p>По вопросам, связанным с обработкой персональных данных:</p>
            <p>Email: <a href="mailto:info@intact.kz">info@intact.kz</a><br>
            Телефон: <a href="tel:+77074463576">+7 707 446 35 76</a><br>
            Адрес: г. Алматы, мкр. Аксай-4, д. 51</p>
        </div>
    </section>
</main>

<?php include $basePath . '/includes/footer.php'; ?>
<script src="/assets/js/main.js"></script>
</body>
</html>
