document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const megaMenu = document.getElementById('mega-menu');
    const mobileToggle = document.querySelector('[data-mobile-nav-toggle]');
    const mobileNav = document.getElementById('mobile-nav');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav__link');
    const mobileViewport = window.matchMedia('(max-width: 1024px)');
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

    document.addEventListener('keydown', (event) => {
        if (event.key !== 'Escape') return;
        if (megaMenu && !megaMenu.hasAttribute('hidden')) {
            megaMenu.setAttribute('hidden', 'hidden');
            menuToggle?.setAttribute('aria-expanded', 'false');
        }
        if (mobileNav && !mobileNav.hasAttribute('hidden')) {
            mobileNav.setAttribute('hidden', 'hidden');
            mobileToggle?.setAttribute('aria-expanded', 'false');
        }
    });

    const syncNavByViewport = () => {
        if (!mobileViewport.matches && mobileNav && !mobileNav.hasAttribute('hidden')) {
            mobileNav.setAttribute('hidden', 'hidden');
            mobileToggle?.setAttribute('aria-expanded', 'false');
        }
        if (mobileViewport.matches && megaMenu && !megaMenu.hasAttribute('hidden')) {
            megaMenu.setAttribute('hidden', 'hidden');
            menuToggle?.setAttribute('aria-expanded', 'false');
        }
    };

    mobileViewport.addEventListener('change', syncNavByViewport);
    syncNavByViewport();

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
        const sliderStyles = window.getComputedStyle(slider);
        const gap = parseFloat(sliderStyles.columnGap || sliderStyles.gap || '0') || 0;
        const scrollAmount = card ? card.getBoundingClientRect().width + gap : 300;
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


    const mediaQueryReduced = window.matchMedia('(prefers-reduced-motion: reduce)');
    const mediaQueryDesktop = window.matchMedia('(min-width: 992px)');
    const shouldReduceMotion = () => mediaQueryReduced.matches;

    const initPageEnter = () => {
        if (shouldReduceMotion()) {
            document.body.classList.add('is-page-ready');
            return;
        }

        requestAnimationFrame(() => {
            document.body.classList.add('is-page-ready');
        });
    };

    const initRevealAnimations = () => {
        const isMotionExcluded = (node) => Boolean(node?.closest('[data-no-scroll-motion]'));
        const revealRoots = [
            '.hero__content',
            '.section__head',
            '.inner-hero .container',
            '.about__content',
            '.about__visual',
            '.consultation',
            '.footer__inner',
            '.doctor-intro__grid',
            '.doctor-highlight',
            '.doctor-text',
            '.doctor-specialties',
            '.doctor-contribution',
            '.doctor-clinic__card',
            '.inner-section > .container > *:not(script)',
            '.location-map'
        ];

        const revealNodes = new Set();
        revealRoots.forEach((selector) => {
            document.querySelectorAll(selector).forEach((node) => {
                if (isMotionExcluded(node)) return;
                revealNodes.add(node);
            });
        });

        const staggerGroups = [
            '.spec-grid .spec-card',
            '.results-slider .result-card',
            '.inner-grid > *',
            '.doc-grid .doc-card',
            '.doctor-facts .doctor-facts__item',
            '.doctor-specialties .doctor-specialty',
            '.doctor-contribution .doctor-contribution__item',
            '.faq details'
        ];

        staggerGroups.forEach((selector) => {
            document.querySelectorAll(selector).forEach((node) => {
                if (isMotionExcluded(node)) return;
                revealNodes.add(node);
            });
        });

        const revealElements = Array.from(revealNodes);
        if (!revealElements.length) return;

        revealElements.forEach((element, index) => {
            const mode = index % 3;
            element.classList.add('motion-reveal');
            element.classList.add(mode === 0 ? 'motion-reveal--up' : mode === 1 ? 'motion-reveal--left' : 'motion-reveal--right');
        });

        if (shouldReduceMotion()) {
            revealElements.forEach((element) => element.classList.add('is-revealed'));
            return;
        }

        const staggerParents = document.querySelectorAll('.spec-grid, .results-slider, .inner-grid, .doc-grid, .doctor-facts, .doctor-specialties, .doctor-contribution, .faq');
        staggerParents.forEach((parent) => {
            const children = parent.querySelectorAll('.motion-reveal');
            children.forEach((child, index) => {
                child.style.setProperty('--motion-delay', `${Math.min(index * 55, 220)}ms`);
            });
        });

        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-revealed');
                observer.unobserve(entry.target);
            });
        }, {
            rootMargin: '0px 0px -12% 0px',
            threshold: 0.16,
        });

        revealElements.forEach((element) => revealObserver.observe(element));
    };

    const initButtonGlint = () => {
        const glintButtons = [
            document.querySelector('.hero .button--accent'),
            document.querySelector('.consultation .button--accent'),
            document.querySelector('.footer__cta .button--accent')
        ].filter(Boolean);

        glintButtons.forEach((button) => button.classList.add('button--glint'));
    };

    const initMouseFollow = () => {
        if (shouldReduceMotion() || !mediaQueryDesktop.matches) return;

        const targets = [
            document.querySelector('.hero__image-card'),
            document.querySelector('.about__visual'),
            document.querySelector('.doctor-intro__visual')
        ].filter(Boolean);

        if (!targets.length) return;

        targets.forEach((target) => {
            target.classList.add('motion-float');
            target.style.setProperty('--mf-x', '0px');
            target.style.setProperty('--mf-y', '0px');
        });

        let rafId = null;
        let mouseX = 0;
        let mouseY = 0;

        const update = () => {
            targets.forEach((target) => {
                const rect = target.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                const offsetX = ((mouseX - centerX) / window.innerWidth) * 10;
                const offsetY = ((mouseY - centerY) / window.innerHeight) * 10;
                const clampedX = Math.max(Math.min(offsetX, 8), -8);
                const clampedY = Math.max(Math.min(offsetY, 8), -8);

                target.style.setProperty('--mf-x', `${clampedX.toFixed(2)}px`);
                target.style.setProperty('--mf-y', `${clampedY.toFixed(2)}px`);
            });

            rafId = null;
        };

        window.addEventListener('mousemove', (event) => {
            mouseX = event.clientX;
            mouseY = event.clientY;
            if (!rafId) rafId = requestAnimationFrame(update);
        }, { passive: true });
    };

    const initScrollParallax = () => {
        if (shouldReduceMotion()) return;

        const targets = [
            ...document.querySelectorAll('.about__image, .doctor-intro__image, .result-card__image, .media-placeholder')
        ].filter((node) => !node.closest('.hero__shape'));

        if (!targets.length) return;

        targets.forEach((target) => target.classList.add('motion-parallax'));

        let ticking = false;

        const update = () => {
            const viewportHeight = window.innerHeight;

            targets.forEach((target) => {
                const rect = target.getBoundingClientRect();
                if (rect.bottom < -40 || rect.top > viewportHeight + 40) return;

                const progress = ((rect.top + rect.height / 2) - viewportHeight / 2) / viewportHeight;
                const shift = Math.max(Math.min(progress * -12, 12), -12);
                target.style.setProperty('--scroll-shift', `${shift.toFixed(2)}px`);
            });

            ticking = false;
        };

        const onScroll = () => {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(update);
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll, { passive: true });
        onScroll();
    };


    const initMapParallax = () => {
        if (shouldReduceMotion() || !mediaQueryDesktop.matches) return;

        const mapPanel = document.querySelector('[data-map-panel]');
        const mapCopy = document.querySelector('[data-map-copy]');
        if (!mapPanel || !mapCopy) return;

        let ticking = false;

        const update = () => {
            const rect = mapPanel.getBoundingClientRect();
            const viewportCenter = window.innerHeight / 2;
            const panelCenter = rect.top + rect.height / 2;
            const progress = (panelCenter - viewportCenter) / window.innerHeight;
            const shift = Math.max(Math.min(progress * -8, 8), -8);
            mapCopy.style.transform = `translate3d(0, ${shift.toFixed(2)}px, 0)`;
            ticking = false;
        };

        const onScroll = () => {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(update);
        };

        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll, { passive: true });
        onScroll();
    };

    const initStickyMoments = () => {
        if (!mediaQueryDesktop.matches || shouldReduceMotion()) return;

        [
            document.querySelector('.about__visual'),
            document.querySelector('.doctor-intro__visual')
        ].filter(Boolean).forEach((node) => node.classList.add('motion-sticky-moment'));
    };

    initPageEnter();
    initRevealAnimations();
    initButtonGlint();
    initMouseFollow();
    initScrollParallax();
    initMapParallax();
    initStickyMoments();
});
