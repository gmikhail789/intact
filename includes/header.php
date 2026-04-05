<?php
/**
 * INTACT.KZ — Header (шапка сайта)
 * Подключается через include во все страницы
 */
?>

<!-- Шапка сайта -->
<header class="header" role="banner">
    <div class="container header__inner">

        <!-- Логотип -->
        <a href="/" class="logo" aria-label="Intact — на главную">
            <svg class="logo__icon" width="44" height="44" viewBox="0 0 186 207" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="55.9752" cy="109.424" r="15.3775" fill="#EE1B1D"/>
                <path d="M92.0394 0H0V11.2528H73.1888C73.1888 11.2528 106.844 8.47109 117.91 38.5415C124.484 56.4054 118.981 75.0946 112.765 85.2735C107.793 93.4166 89.3526 105.333 80.8009 109.947C83.9365 114.672 92.7664 128.285 103.001 144.941C115.794 165.761 122.337 176.98 132.794 188.395C151.1 208.379 185.907 205.527 185.907 205.527V195.989C184.318 195.571 178.89 194.017 170.963 189.301C163.036 184.585 156.687 176.341 150.144 166.996L110.39 105.809C110.39 105.809 126.731 98.2174 136.061 88.124C151.623 71.2894 154.423 44.1058 143.744 26.5317C133.844 10.2396 111.755 -7.06481e-06 92.0394 0Z" fill="#EE1B1D"/>
            </svg>
            <span class="logo__name">intact</span>
        </a>

        <!-- Навигация (desktop) -->
        <nav class="nav" role="navigation" aria-label="Основная навигация">

            <!-- Услуги (dropdown) -->
            <div class="nav__item">
                <a href="#" class="nav__link" aria-haspopup="true" aria-expanded="false">
                    Услуги
                    <svg class="nav__arrow" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="nav__dropdown" role="menu">
                    <a href="/uslugi/vedenie-ucheta.php" class="nav__dropdown-link" role="menuitem">Ведение бухгалтерского учёта</a>
                    <a href="/uslugi/sdacha-otchetnosti.php" class="nav__dropdown-link" role="menuitem">Сдача налоговой отчётности</a>
                    <a href="/uslugi/nalogovoe-soprovozhdenie.php" class="nav__dropdown-link" role="menuitem">Налоговое сопровождение</a>
                    <a href="/uslugi/vosstanovlenie-ucheta.php" class="nav__dropdown-link" role="menuitem">Восстановление учёта</a>
                    <a href="/uslugi/registratsiya-ip-too.php" class="nav__dropdown-link" role="menuitem">Регистрация ИП и ТОО</a>
                    <a href="/uslugi/kadrovyj-uchet.php" class="nav__dropdown-link" role="menuitem">Кадровый учёт и зарплата</a>
                    <a href="/uslugi/glavnyj-buhgalter.php" class="nav__dropdown-link" role="menuitem">Главный бухгалтер</a>
                </div>
            </div>

            <div class="nav__item">
                <a href="/pakety.php" class="nav__link">Пакеты</a>
            </div>
            <div class="nav__item">
                <a href="/o-kompanii.php" class="nav__link">О компании</a>
            </div>
            <div class="nav__item">
                <a href="/faq.php" class="nav__link">FAQ</a>
            </div>
            <div class="nav__item">
                <a href="/kontakty.php" class="nav__link">Контакты</a>
            </div>
        </nav>

        <!-- Правая часть: телефон + CTA + бургер -->
        <div class="header__actions">
            <a href="tel:+77074463576" class="header__phone" aria-label="Позвонить">
                +7 707 446 35 76
            </a>
            <a href="/kontakty.php#consultation" class="btn btn--primary header__cta">
                Бесплатная консультация
            </a>

            <!-- Бургер-кнопка (мобильный) -->
            <button class="burger" type="button" aria-label="Открыть меню" aria-expanded="false" aria-controls="mobile-menu">
                <span class="burger__line"></span>
                <span class="burger__line"></span>
                <span class="burger__line"></span>
            </button>
        </div>
    </div>
</header>

<!-- Overlay для мобильного меню -->
<div class="mobile-menu__overlay" aria-hidden="true"></div>

<!-- Мобильное меню -->
<nav class="mobile-menu" id="mobile-menu" role="navigation" aria-label="Мобильная навигация">

    <!-- Услуги (аккордеон) -->
    <a href="#" class="mobile-menu__link mobile-menu__toggle">
        Услуги
        <svg width="12" height="12" viewBox="0 0 10 6" fill="none" style="float:right;margin-top:6px" aria-hidden="true">
            <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
    <div class="mobile-menu__sub" style="max-height:0;overflow:hidden;transition:max-height 0.3s ease">
        <a href="/uslugi/vedenie-ucheta.php" class="mobile-menu__link">Ведение бухгалтерского учёта</a>
        <a href="/uslugi/sdacha-otchetnosti.php" class="mobile-menu__link">Сдача налоговой отчётности</a>
        <a href="/uslugi/nalogovoe-soprovozhdenie.php" class="mobile-menu__link">Налоговое сопровождение</a>
        <a href="/uslugi/vosstanovlenie-ucheta.php" class="mobile-menu__link">Восстановление учёта</a>
        <a href="/uslugi/registratsiya-ip-too.php" class="mobile-menu__link">Регистрация ИП и ТОО</a>
        <a href="/uslugi/kadrovyj-uchet.php" class="mobile-menu__link">Кадровый учёт и зарплата</a>
        <a href="/uslugi/glavnyj-buhgalter.php" class="mobile-menu__link">Главный бухгалтер</a>
    </div>

    <a href="/pakety.php" class="mobile-menu__link">Пакеты</a>
    <a href="/o-kompanii.php" class="mobile-menu__link">О компании</a>
    <a href="/faq.php" class="mobile-menu__link">FAQ</a>
    <a href="/kontakty.php" class="mobile-menu__link">Контакты</a>

    <a href="tel:+77074463576" class="mobile-menu__phone">+7 707 446 35 76</a>
    <a href="/kontakty.php#consultation" class="btn btn--primary mobile-menu__cta">Бесплатная консультация</a>
</nav>
