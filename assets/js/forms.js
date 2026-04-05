/**
 * INTACT.KZ — Обработка форм (forms.js)
 * ──────────────────────────────────────
 * Перехватывает submit всех форм [data-form],
 * отправляет fetch на /send.php,
 * показывает состояния загрузки/успеха/ошибки.
 *
 * Атрибуты на <form>:
 *   data-form="callback|service|calculator"
 *
 * Honeypot: скрытое поле "website"
 * Токен:    _token = timestamp (защита от ботов)
 */

(function () {
    'use strict';

    const ENDPOINT = '/send.php';
    const SUCCESS_MSG = 'Спасибо! Мы свяжемся с вами в течение часа.';
    const ERROR_MSG = 'Произошла ошибка. Позвоните нам: +7 707 446 35 76';

    document.querySelectorAll('form[data-form]').forEach(initForm);

    function initForm(form) {
        // Honeypot
        if (!form.querySelector('[name="website"]')) {
            const hp = document.createElement('input');
            hp.type = 'text';
            hp.name = 'website';
            hp.tabIndex = -1;
            hp.autocomplete = 'off';
            hp.style.cssText = 'position:absolute;left:-9999px;top:-9999px;opacity:0;height:0;width:0';
            hp.setAttribute('aria-hidden', 'true');
            form.appendChild(hp);
        }

        // Токен
        if (!form.querySelector('[name="_token"]')) {
            const token = document.createElement('input');
            token.type = 'hidden';
            token.name = '_token';
            form.appendChild(token);
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            handleSubmit(form);
        });
    }

    async function handleSubmit(form) {
        const btn = form.querySelector('[type="submit"]');
        const formType = form.dataset.form || 'callback';

        // Обновляем токен
        const tokenInput = form.querySelector('[name="_token"]');
        if (tokenInput) tokenInput.value = Math.floor(Date.now() / 1000).toString();

        // Клиентская валидация
        const errors = validateClient(form);
        clearErrors(form);

        if (Object.keys(errors).length > 0) {
            showErrors(form, errors);
            return;
        }

        // Состояние загрузки
        const btnText = btn.textContent;
        btn.disabled = true;
        btn.textContent = 'Отправка...';
        btn.style.opacity = '0.7';

        try {
            const data = collectData(form, formType);

            const response = await fetch(ENDPOINT, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data),
            });

            const result = await response.json();

            if (result.success) {
                showSuccess(form, result.message || SUCCESS_MSG, result.whatsapp_link);
            } else if (result.errors) {
                showErrors(form, result.errors);
            } else {
                showFormMessage(form, result.message || ERROR_MSG, 'error');
            }
        } catch (err) {
            console.error('Form submit error:', err);
            showFormMessage(form, ERROR_MSG, 'error');
        } finally {
            btn.disabled = false;
            btn.textContent = btnText;
            btn.style.opacity = '';
        }
    }

    function validateClient(form) {
        const errors = {};
        const val = (name) => (form.querySelector(`[name="${name}"]`)?.value || '').trim();

        const name = val('name');
        if (!name) errors.name = 'Укажите ваше имя';
        else if (name.length < 2) errors.name = 'Имя слишком короткое';

        const phone = val('phone').replace(/[^\d+]/g, '');
        const digits = phone.replace(/\D/g, '');
        if (!phone) errors.phone = 'Укажите номер телефона';
        else if (digits.length < 10) errors.phone = 'Введите корректный номер';

        const emailField = form.querySelector('[name="email"]');
        if (emailField) {
            const email = emailField.value.trim();
            if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                errors.email = 'Некорректный email';
            }
        }

        return errors;
    }

    function collectData(form, formType) {
        const val = (name) => (form.querySelector(`[name="${name}"]`)?.value || '').trim();
        const data = {
            type: formType,
            name: val('name'),
            phone: val('phone'),
            email: val('email'),
            website: val('website'),
            _token: val('_token'),
        };

        if (formType === 'service') {
            data.service = val('service');
            data.message = val('message');
        }

        if (formType === 'calculator') {
            data.calc_biz = val('calc_biz');
            data.calc_tax = val('calc_tax');
            data.calc_employees = val('calc_employees');
            data.calc_ops = val('calc_ops');
            data.calc_extras = val('calc_extras');
            data.calc_price = val('calc_price');
        }

        return data;
    }

    function showErrors(form, errors) {
        for (const [field, msg] of Object.entries(errors)) {
            const input = form.querySelector(`[name="${field}"]`);
            if (!input) continue;

            input.classList.add('form-input--error');

            const errEl = document.createElement('div');
            errEl.className = 'form-error';
            errEl.textContent = msg;

            const group = input.closest('.form-group');
            if (group) group.appendChild(errEl);
            else input.parentElement.appendChild(errEl);
        }

        const first = Object.keys(errors)[0];
        form.querySelector(`[name="${first}"]`)?.focus();
    }

    function clearErrors(form) {
        form.querySelectorAll('.form-error').forEach(el => el.remove());
        form.querySelectorAll('.form-input--error').forEach(el => el.classList.remove('form-input--error'));
        form.querySelectorAll('.form-message').forEach(el => el.remove());
    }

    function showFormMessage(form, text, type) {
        clearErrors(form);
        const el = document.createElement('div');
        el.className = `form-message form-message--${type}`;
        el.textContent = text;
        form.appendChild(el);
    }

    function showSuccess(form, message, waLink) {
        let html = `
            <div class="form-success">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                <h4>${message}</h4>
                <p style="color:#7A7A8C;font-size:14px">Мы перезвоним в ближайшее время</p>`;

        if (waLink) {
            html += `<a href="${waLink}" target="_blank" rel="noopener"
                style="display:inline-flex;align-items:center;gap:6px;margin-top:12px;padding:8px 20px;background:#25D366;color:#fff;border-radius:24px;font-size:14px;font-weight:600;text-decoration:none">
                Написать в WhatsApp
            </a>`;
        }

        html += '</div>';
        form.innerHTML = html;
    }
})();
