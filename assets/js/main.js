document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const megaMenu = document.getElementById('mega-menu');
    const mobileToggle = document.querySelector('[data-mobile-nav-toggle]');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav__link');
    const phoneInputs = document.querySelectorAll('[data-phone-input]');
    const forms = document.querySelectorAll('[data-consultation-form]');
    const slider = document.querySelector('[data-results-slider]');
    const prevButton = document.querySelector('[data-results-prev]');
    const nextButton = document.querySelector('[data-results-next]');

    const toggleSection = (button, section) => {
        if (!button || !section) return;
        const isHidden = section.hasAttribute('hidden');
        if (isHidden) {
            section.removeAttribute('hidden');
            button.setAttribute('aria-expanded', 'true');
        } else {
            section.setAttribute('hidden', 'hidden');
            button.setAttribute('aria-expanded', 'false');
        }
    };

    if (menuToggle && megaMenu) {
        menuToggle.addEventListener('click', () => {
            if (mobileNav && !mobileNav.hasAttribute('hidden')) {
                mobileNav.setAttribute('hidden', 'hidden');
                mobileToggle?.setAttribute('aria-expanded', 'false');
            }
            toggleSection(menuToggle, megaMenu);
        });
    }

    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', () => {
            if (megaMenu && !megaMenu.hasAttribute('hidden')) {
                megaMenu.setAttribute('hidden', 'hidden');
                menuToggle?.setAttribute('aria-expanded', 'false');
            }
            toggleSection(mobileToggle, mobileNav);
        });

        mobileNavLinks.forEach((link) => {
            link.addEventListener('click', () => {
                mobileNav.setAttribute('hidden', 'hidden');
                mobileToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    document.addEventListener('click', (event) => {
        const target = event.target;
        const clickedInsideMega = megaMenu?.contains(target);
        const clickedMegaButton = menuToggle?.contains(target);
        const clickedInsideMobile = mobileNav?.contains(target);
        const clickedMobileButton = mobileToggle?.contains(target);

        if (megaMenu && !megaMenu.hasAttribute('hidden') && !clickedInsideMega && !clickedMegaButton) {
            megaMenu.setAttribute('hidden', 'hidden');
            menuToggle?.setAttribute('aria-expanded', 'false');
        }

        if (mobileNav && !mobileNav.hasAttribute('hidden') && !clickedInsideMobile && !clickedMobileButton) {
            mobileNav.setAttribute('hidden', 'hidden');
            mobileToggle?.setAttribute('aria-expanded', 'false');
        }
    });

    window.addEventListener('scroll', () => {
        header?.classList.toggle('is-scrolled', window.scrollY > 12);
    });

    const applyPhoneMask = (value) => {
        const digits = value.replace(/\D/g, '').slice(0, 11);
        const normalized = digits.startsWith('8') ? `7${digits.slice(1)}` : digits;
        const clean = normalized.startsWith('7') ? normalized : `7${normalized}`;
        const parts = clean.match(/^(7)(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})$/);
        if (!parts) return value;

        let result = '+7';
        if (parts[2]) result += ` (${parts[2]}`;
        if (parts[2] && parts[2].length === 3) result += ')';
        if (parts[3]) result += ` ${parts[3]}`;
        if (parts[4]) result += `-${parts[4]}`;
        if (parts[5]) result += `-${parts[5]}`;
        return result;
    };

    phoneInputs.forEach((phoneInput) => {
        phoneInput.addEventListener('input', (event) => {
            event.target.value = applyPhoneMask(event.target.value);
        });
    });

    const showFormAlert = (form, type, message) => {
        let alert = form.querySelector('[data-form-alert]');

        if (!alert) {
            alert = document.createElement('div');
            alert.setAttribute('data-form-alert', '1');
            alert.setAttribute('role', type === 'success' ? 'status' : 'alert');
            form.prepend(alert);
        }

        alert.className = `alert ${type === 'success' ? 'alert--success' : 'alert--error'}`;
        alert.textContent = message;
    };

    forms.forEach((form) => {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            const fields = form.querySelectorAll('[required]');
            let hasError = false;

            fields.forEach((field) => {
                const isCheckbox = field.type === 'checkbox';
                const value = isCheckbox ? field.checked : field.value.trim();
                const fieldWrapper = isCheckbox ? field.closest('.checkbox') : field;
                fieldWrapper?.classList.remove('is-invalid');

                if (!value) {
                    hasError = true;
                    fieldWrapper?.classList.add('is-invalid');
                }
            });

            const phoneInput = form.querySelector('[data-phone-input]');
            if (phoneInput && phoneInput.value.replace(/\D/g, '').length < 11) {
                hasError = true;
                phoneInput.classList.add('is-invalid');
            }

            if (hasError) {
                showFormAlert(form, 'error', 'Проверьте заполнение обязательных полей формы.');
                return;
            }

            const submitButton = form.querySelector('button[type="submit"]');
            submitButton?.setAttribute('disabled', 'disabled');

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    body: new FormData(form),
                    credentials: 'same-origin',
                });

                const payload = await response.json();

                if (!response.ok || !payload.success) {
                    showFormAlert(form, 'error', payload.message || 'Не удалось отправить форму.');
                    return;
                }

                showFormAlert(form, 'success', payload.message || 'Форма успешно отправлена.');
                form.reset();
                const startedAt = form.querySelector('input[name="form_started_at"]');
                if (startedAt) startedAt.value = String(Math.floor(Date.now() / 1000));

                if (payload.redirect) {
                    setTimeout(() => {
                        window.location.href = payload.redirect;
                    }, 400);
                }
            } catch (error) {
                showFormAlert(form, 'error', 'Ошибка соединения. Повторите попытку позже.');
            } finally {
                submitButton?.removeAttribute('disabled');
            }
        });
    });

    const scrollCard = (direction) => {
        if (!slider) return;
        const card = slider.querySelector('.result-card');
        const scrollAmount = card ? card.getBoundingClientRect().width + 18 : 300;
        slider.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
    };

    prevButton?.addEventListener('click', () => scrollCard(-1));
    nextButton?.addEventListener('click', () => scrollCard(1));

    const diplomaTriggers = document.querySelectorAll('[data-diploma-open]');
    const diplomaModal = document.querySelector('[data-diploma-modal]');
    const diplomaImage = diplomaModal?.querySelector('img');
    const diplomaClose = diplomaModal?.querySelector('[data-diploma-close]');

    diplomaTriggers.forEach((trigger) => {
        trigger.addEventListener('click', () => {
            if (!diplomaModal || !diplomaImage) return;
            diplomaImage.src = trigger.dataset.image || '';
            diplomaImage.alt = trigger.dataset.alt || 'Документ';
            diplomaModal.removeAttribute('hidden');
        });
    });

    diplomaClose?.addEventListener('click', () => diplomaModal?.setAttribute('hidden', 'hidden'));
});
