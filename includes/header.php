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
            <svg class="logo__icon" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="40" height="40" rx="5" fill="#C0392B"/>
                <path d="M23 7L31 11.5V20.5L23 25L15 20.5V11.5L23 7Z" fill="none" stroke="#fff" stroke-width="1.8" stroke-linejoin="round"/>
                <path d="M23 10L28.5 13V19L23 22L17.5 19V13L23 10Z" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1" stroke-linejoin="round"/>
                <line x1="5" y1="35" x2="16" y2="26" stroke="#fff" stroke-width="2.2" stroke-linecap="round"/>
                <line x1="5" y1="31" x2="13" y2="24.5" stroke="#fff" stroke-width="2.2" stroke-linecap="round"/>
                <line x1="5" y1="27" x2="10" y2="23" stroke="rgba(255,255,255,0.5)" stroke-width="1.8" stroke-linecap="round"/>
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
