<?php
$pageTitle       = 'Страница не найдена — 404 | Intact';
$pageDescription = 'Запрашиваемая страница не найдена на сайте intact.kz.';
$pageSlug        = '404';
$basePath        = __DIR__;
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="page">
<?php include $basePath . '/includes/header.php'; ?>

<main class="page-offset" role="main">
    <section class="section" style="min-height:60vh;display:flex;align-items:center">
        <div class="container" style="text-align:center">
            <div style="font-family:var(--font-display);font-size:clamp(5rem,15vw,10rem);color:var(--color-accent);line-height:1;opacity:.2;margin-bottom:var(--space-md)">404</div>
            <h1 style="margin-top:-2rem">Страница не найдена</h1>
            <p style="color:var(--color-text-light);max-width:480px;margin:var(--space-md) auto var(--space-xl)">Возможно, страница была удалена или вы ввели неверный адрес. Воспользуйтесь навигацией ниже.</p>
            <div style="display:flex;flex-wrap:wrap;gap:var(--space-sm);justify-content:center">
                <a href="/" class="btn btn--primary">На главную</a>
                <a href="/pakety.php" class="btn btn--secondary">Пакеты услуг</a>
                <a href="/kontakty.php" class="btn btn--secondary">Контакты</a>
            </div>
            <div style="margin-top:var(--space-2xl);padding-top:var(--space-xl);border-top:1px solid var(--color-border)">
                <p style="font-size:var(--fs-small);color:var(--color-text-light);margin-bottom:var(--space-md)">Наши услуги:</p>
                <div style="display:flex;flex-wrap:wrap;gap:var(--space-xs) var(--space-md);justify-content:center;font-size:var(--fs-small)">
                    <a href="/uslugi/vedenie-ucheta.php">Ведение учёта</a>
                    <a href="/uslugi/sdacha-otchetnosti.php">Сдача отчётности</a>
                    <a href="/uslugi/nalogovoe-soprovozhdenie.php">Налоговое сопровождение</a>
                    <a href="/uslugi/vosstanovlenie-ucheta.php">Восстановление учёта</a>
                    <a href="/uslugi/registratsiya-ip-too.php">Регистрация ИП/ТОО</a>
                    <a href="/uslugi/kadrovyj-uchet.php">Кадровый учёт</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include $basePath . '/includes/footer.php'; ?>
<script src="/assets/js/main.js"></script>
</body>
</html>
