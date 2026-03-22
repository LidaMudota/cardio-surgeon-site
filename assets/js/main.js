document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const megaMenu = document.getElementById('mega-menu');
    const mobileToggle = document.querySelector('[data-mobile-nav-toggle]');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav__link');
    const phoneInput = document.querySelector('[data-phone-input]');
    const form = document.querySelector('[data-consultation-form]');
    const slider = document.querySelector('[data-results-slider]');
    const prevButton = document.querySelector('[data-results-prev]');
    const nextButton = document.querySelector('[data-results-next]');

    const toggleSection = (button, section) => {
        if (!button || !section) {
            return;
        }

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

        if (!parts) {
            return value;
        }

        let result = '+7';

        if (parts[2]) {
            result += ` (${parts[2]}`;
        }
        if (parts[2] && parts[2].length === 3) {
            result += ')';
        }
        if (parts[3]) {
            result += ` ${parts[3]}`;
        }
        if (parts[4]) {
            result += `-${parts[4]}`;
        }
        if (parts[5]) {
            result += `-${parts[5]}`;
        }

        return result;
    };

    if (phoneInput) {
        phoneInput.addEventListener('input', (event) => {
            event.target.value = applyPhoneMask(event.target.value);
        });
    }

    if (form) {
        form.addEventListener('submit', (event) => {
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

            if (phoneInput && phoneInput.value.replace(/\D/g, '').length < 11) {
                hasError = true;
                phoneInput.classList.add('is-invalid');
            }

            if (hasError) {
                event.preventDefault();
            }
        });
    }

    const scrollCard = (direction) => {
        if (!slider) {
            return;
        }

        const card = slider.querySelector('.result-card');
        const scrollAmount = card ? card.getBoundingClientRect().width + 18 : 300;
        slider.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
    };

    prevButton?.addEventListener('click', () => scrollCard(-1));
    nextButton?.addEventListener('click', () => scrollCard(1));
});
