/* ============================================================
   INTACT.KZ — Основной JavaScript
   Vanilla JS, без зависимостей
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {
    'use strict';

    /* ----------------------------------------------------------
       1. КОМПАКТНЫЙ HEADER ПРИ СКРОЛЛЕ
    ---------------------------------------------------------- */
    const header = document.querySelector('.header');
    const SCROLL_THRESHOLD = 50;

    function handleHeaderScroll() {
        if (window.scrollY > SCROLL_THRESHOLD) {
            header.classList.add('is-scrolled');
        } else {
            header.classList.remove('is-scrolled');
        }
    }

    // Throttle для скролл-событий
    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                handleHeaderScroll();
                handleScrollTop();
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    // Проверка при загрузке (если страница уже проскроллена)
    handleHeaderScroll();

    /* ----------------------------------------------------------
       2. БУРГЕР-МЕНЮ
    ---------------------------------------------------------- */
    const burger = document.querySelector('.burger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileOverlay = document.querySelector('.mobile-menu__overlay');
    const mobileLinks = document.querySelectorAll('.mobile-menu__link');

    function openMobileMenu() {
        burger.classList.add('is-active');
        mobileMenu.classList.add('is-open');
        mobileOverlay.classList.add('is-visible');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        burger.classList.remove('is-active');
        mobileMenu.classList.remove('is-open');
        mobileOverlay.classList.remove('is-visible');
        document.body.style.overflow = '';
    }

    if (burger) {
        burger.addEventListener('click', () => {
            if (mobileMenu.classList.contains('is-open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', closeMobileMenu);
    }

    // Закрытие меню при клике на ссылку
    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Закрытие по Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu.classList.contains('is-open')) {
            closeMobileMenu();
        }
    });

    /* ----------------------------------------------------------
       3. DROPDOWN НА МОБИЛЬНОМ (аккордеон для «Услуги»)
    ---------------------------------------------------------- */
    const mobileToggles = document.querySelectorAll('.mobile-menu__toggle');

    mobileToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            const sub = toggle.nextElementSibling;
            const isOpen = sub.style.maxHeight;

            // Закрываем все открытые
            document.querySelectorAll('.mobile-menu__sub').forEach(s => {
                s.style.maxHeight = null;
            });
            document.querySelectorAll('.mobile-menu__toggle').forEach(t => {
                t.classList.remove('is-open');
            });

            // Открываем текущий (если был закрыт)
            if (!isOpen) {
                sub.style.maxHeight = sub.scrollHeight + 'px';
                toggle.classList.add('is-open');
            }
        });
    });

    /* ----------------------------------------------------------
       4. КНОПКА «НАВЕРХ»
    ---------------------------------------------------------- */
    const scrollTopBtn = document.querySelector('.scroll-top');
    const SCROLL_TOP_THRESHOLD = 600;

    function handleScrollTop() {
        if (!scrollTopBtn) return;
        if (window.scrollY > SCROLL_TOP_THRESHOLD) {
            scrollTopBtn.classList.add('is-visible');
        } else {
            scrollTopBtn.classList.remove('is-visible');
        }
    }

    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    handleScrollTop();

    /* ----------------------------------------------------------
       5. АНИМАЦИИ ПОЯВЛЕНИЯ (Intersection Observer)
    ---------------------------------------------------------- */
    const revealElements = document.querySelectorAll('.reveal');

    if (revealElements.length > 0 && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.01,
            rootMargin: '0px 0px -20px 0px'
        });

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });
    } else {
        // Фолбэк: показываем всё сразу
        revealElements.forEach(el => el.classList.add('is-visible'));
    }

    /* ----------------------------------------------------------
       6. ПЛАВНЫЙ СКРОЛЛ ДЛЯ ЯКОРНЫХ ССЫЛОК
    ---------------------------------------------------------- */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    /* ----------------------------------------------------------
       7. АКТИВНЫЙ ПУНКТ НАВИГАЦИИ
    ---------------------------------------------------------- */
    const currentPath = window.location.pathname;
    
    // Desktop nav
    document.querySelectorAll('.nav__link, .nav__dropdown-link').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('is-active');
        }
    });

    // Mobile nav
    document.querySelectorAll('.mobile-menu__link').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('is-active');
        }
    });

    /* ----------------------------------------------------------
       8. ТЕЛЕФОННЫЕ ССЫЛКИ — GA / МЕТРИКА EVENT (заглушка)
    ---------------------------------------------------------- */
    document.querySelectorAll('a[href^="tel:"]').forEach(link => {
        link.addEventListener('click', () => {
            // Яндекс.Метрика
            if (typeof ym !== 'undefined') {
                ym(METRIKA_ID, 'reachGoal', 'phone_click');
            }
            // Google Analytics
            if (typeof gtag !== 'undefined') {
                gtag('event', 'phone_click', {
                    event_category: 'contact',
                    event_label: link.textContent.trim()
                });
            }
        });
    });
});
