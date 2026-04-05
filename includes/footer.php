<?php
/**
 * INTACT.KZ — Footer (подвал сайта)
 * Подключается через include во все страницы
 */
?>

<!-- Подвал сайта -->
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="footer__grid">

            <!-- Колонка: бренд -->
            <div class="footer__brand">
                <div class="footer__logo">
                    <svg width="28" height="28" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="5" fill="#C0392B"/>
                        <path d="M23 7L31 11.5V20.5L23 25L15 20.5V11.5L23 7Z" fill="none" stroke="#fff" stroke-width="1.8" stroke-linejoin="round"/>
                        <line x1="5" y1="35" x2="16" y2="26" stroke="#fff" stroke-width="2.2" stroke-linecap="round"/>
                        <line x1="5" y1="31" x2="13" y2="24.5" stroke="#fff" stroke-width="2.2" stroke-linecap="round"/>
                        <line x1="5" y1="27" x2="10" y2="23" stroke="rgba(255,255,255,0.5)" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                    intact
                </div>
                <p class="footer__desc">
                    Бухгалтерские услуги под ключ для ИП и ТОО в Алматы — от ведения учёта и сдачи отчётности до налогового сопровождения.
                </p>
                <div class="footer__messengers">
                    <a href="https://wa.me/77074463576" target="_blank" rel="noopener noreferrer" class="footer__messenger-btn footer__messenger-btn--wa" aria-label="Написать в WhatsApp">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        WhatsApp
                    </a>
                    <a href="https://t.me/intact_kz" target="_blank" rel="noopener noreferrer" class="footer__messenger-btn footer__messenger-btn--tg" aria-label="Написать в Telegram">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M11.944 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0a12 12 0 00-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 01.171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.479.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/>
                        </svg>
                        Telegram
                    </a>
                </div>
            </div>

            <!-- Колонка: Услуги -->
            <div>
                <h4 class="footer__heading">Услуги</h4>
                <ul class="footer__nav-list">
                    <li><a href="/uslugi/vedenie-ucheta.php">Ведение бухгалтерского учёта</a></li>
                    <li><a href="/uslugi/sdacha-otchetnosti.php">Сдача отчётности</a></li>
                    <li><a href="/uslugi/nalogovoe-soprovozhdenie.php">Налоговое сопровождение</a></li>
                    <li><a href="/uslugi/vosstanovlenie-ucheta.php">Восстановление учёта</a></li>
                    <li><a href="/uslugi/registratsiya-ip-too.php">Регистрация ИП / ТОО</a></li>
                    <li><a href="/uslugi/kadrovyj-uchet.php">Кадровый учёт</a></li>
                </ul>
            </div>

            <!-- Колонка: Компания -->
            <div>
                <h4 class="footer__heading">Компания</h4>
                <ul class="footer__nav-list">
                    <li><a href="/o-kompanii.php">О компании</a></li>
                    <li><a href="/pakety.php">Пакеты услуг</a></li>
                    <li><a href="/faq.php">Вопрос-ответ</a></li>
                    <li><a href="/kontakty.php">Контакты</a></li>
                </ul>
            </div>

            <!-- Колонка: Контакты -->
            <div>
                <h4 class="footer__heading">Контакты</h4>
                <div class="footer__contact-item">
                    <svg class="footer__contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                    </svg>
                    <a href="tel:+77074463576">+7 707 446 35 76</a>
                </div>
                <div class="footer__contact-item">
                    <svg class="footer__contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    <a href="mailto:info@intact.kz">info@intact.kz</a>
                </div>
                <div class="footer__contact-item">
                    <svg class="footer__contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    <span>г. Алматы, мкр. Аксай-4, д. 51</span>
                </div>
            </div>

        </div>

        <!-- Нижняя полоска -->
        <div class="footer__bottom">
            <span>&copy; <?= date('Y') ?> Intact. Бухгалтерские услуги в Алматы.</span>
            <a href="/privacy-policy.php">Политика конфиденциальности</a>
        </div>
    </div>
</footer>

<!-- Плавающая кнопка WhatsApp -->
<a href="https://wa.me/77074463576" target="_blank" rel="noopener noreferrer" class="float-wa" aria-label="Написать в WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
</a>

<!-- Кнопка «Наверх» -->
<button class="scroll-top" type="button" aria-label="Вернуться наверх">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <polyline points="18 15 12 9 6 15"/>
    </svg>
</button>
