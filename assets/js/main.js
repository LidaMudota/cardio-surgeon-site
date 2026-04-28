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
    const directionsScope = document.querySelector('#work-directions-page, #home-page');
    const directionCards = directionsScope?.querySelectorAll('#specialization .spec-card') || [];
    const directionModal = directionsScope?.querySelector('[data-direction-modal]');
    const directionModalTitle = directionModal?.querySelector('[data-direction-modal-title]');
    const directionModalText = directionModal?.querySelector('[data-direction-modal-text]');
    const directionModalImage = directionModal?.querySelector('[data-direction-modal-image]');
    const directionModalWarning = directionModal?.querySelector('[data-direction-modal-warning]');
    const directionModalGallery = directionModal?.querySelector('[data-direction-modal-gallery]');
    const directionCloseButtons = directionModal?.querySelectorAll('[data-direction-close]');
    const directionDataScript = directionsScope?.querySelector('[data-work-directions-json]');


    const cookieNotice = document.querySelector('[data-cookie-notice]');
    const cookieAcceptButton = document.querySelector('[data-cookie-accept]');
    const cookieRejectButton = document.querySelector('[data-cookie-reject]');
    const cookiePreferenceKey = 'site_cookie_preference';

    const setCookiePreference = (value) => {
        try {
            localStorage.setItem(cookiePreferenceKey, value);
        } catch (error) {
            return;
        }
    };

    const getCookiePreference = () => {
        try {
            return localStorage.getItem(cookiePreferenceKey);
        } catch (error) {
            return null;
        }
    };

    const hideCookieNotice = () => {
        if (cookieNotice) {
            cookieNotice.setAttribute('hidden', 'hidden');
        }
    };

    const loadOptionalScripts = () => {
        const scripts = document.querySelectorAll('script[data-cookie-category="optional"]');

        scripts.forEach((script) => {
            if (script.dataset.cookieLoaded === '1') return;

            const src = script.dataset.cookieSrc;
            if (!src) return;

            const runtimeScript = document.createElement('script');
            runtimeScript.src = src;
            runtimeScript.async = true;
            runtimeScript.charset = script.getAttribute('charset') || 'utf-8';
            runtimeScript.dataset.cookieLoaded = '1';
            script.parentNode?.insertBefore(runtimeScript, script.nextSibling);
            script.dataset.cookieLoaded = '1';
        });
    };

    const applyCookiePreference = (value) => {
        if (value === 'accepted') {
            loadOptionalScripts();
        }

        if (value === 'accepted' || value === 'necessary') {
            hideCookieNotice();
        }
    };

    const setupCookieNotice = () => {
        if (!cookieNotice) return;

        const preference = getCookiePreference();

        if (preference === 'accepted' || preference === 'necessary') {
            applyCookiePreference(preference);
            return;
        }

        cookieNotice.removeAttribute('hidden');

        cookieAcceptButton?.addEventListener('click', () => {
            setCookiePreference('accepted');
            applyCookiePreference('accepted');
        });

        cookieRejectButton?.addEventListener('click', () => {
            setCookiePreference('necessary');
            applyCookiePreference('necessary');
        });
    };

    const directionDetailsMap = (() => {
        if (!directionDataScript) return {};

        try {
            return JSON.parse(directionDataScript.textContent || '{}');
        } catch (error) {
            return {};
        }
    })();

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
        if (directionModal && !directionModal.hasAttribute('hidden')) {
            closeDirectionModal();
        }
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

    setupCookieNotice();

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

    let activeDirectionTrigger = null;

    const focusableSelector = 'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])';

    const updateDirectionModalOffset = () => {
        if (!directionModal) return;
        const headerHeight = header?.offsetHeight || 0;
        const topOffset = Math.max(headerHeight + 16, 76);
        directionModal.style.setProperty('--direction-modal-top-offset', `${topOffset}px`);
    };

    const getImagePairMeta = (src) => {
        const fileName = String(src || '').split('/').pop() || '';
        const nameWithoutExt = fileName.replace(/\.[^.]+$/, '');
        const normalized = nameWithoutExt.toLowerCase();

        const beforePattern = /(^|[_-])do(?=$|[_-])/;
        const afterPattern = /(^|[_-])posle(?=$|[_-])/;

        if (beforePattern.test(normalized)) {
            const key = normalized.replace(beforePattern, '_').replace(/[_-]+/g, '_').replace(/^_|_$/g, '');
            return { kind: 'before', key };
        }

        if (afterPattern.test(normalized)) {
            const key = normalized.replace(afterPattern, '_').replace(/[_-]+/g, '_').replace(/^_|_$/g, '');
            return { kind: 'after', key };
        }

        return null;
    };

    const buildDirectionGalleryEntries = (images) => {
        const imageMeta = images.map((image, index) => {
            const meta = getImagePairMeta(image?.src);
            return { image, index, meta };
        });

        const afterByKey = new Map();
        imageMeta.forEach((item) => {
            if (item.meta?.kind !== 'after') return;
            const list = afterByKey.get(item.meta.key) || [];
            list.push(item);
            afterByKey.set(item.meta.key, list);
        });

        const usedIndexes = new Set();
        const entries = [];

        imageMeta.forEach((item) => {
            if (usedIndexes.has(item.index)) return;

            if (item.meta?.kind === 'before') {
                const matches = afterByKey.get(item.meta.key) || [];
                const matched = matches.find((candidate) => candidate.index > item.index && !usedIndexes.has(candidate.index));

                if (matched) {
                    usedIndexes.add(item.index);
                    usedIndexes.add(matched.index);
                    entries.push({ type: 'pair', before: item.image, after: matched.image });
                    return;
                }
            }

            usedIndexes.add(item.index);
            entries.push({ type: 'single', image: item.image });
        });

        return entries;
    };

    const createDirectionGalleryItem = (image, title) => {
        const figureElement = document.createElement('figure');
        figureElement.className = 'direction-modal__gallery-item';

        const mediaElement = document.createElement('div');
        mediaElement.className = 'direction-modal__gallery-media';

        const imageElement = document.createElement('img');
        imageElement.src = image.src;
        imageElement.alt = image.alt || title || 'Изображение направления работы';
        imageElement.loading = 'lazy';
        imageElement.decoding = 'async';
        mediaElement.append(imageElement);

        figureElement.append(mediaElement);
        return figureElement;
    };

    const openDirectionModal = (card, trigger) => {
        if (!directionModal || !directionModalTitle || !directionModalText || !directionModalImage || !card) return;

        const title = card.querySelector('.spec-card__title')?.textContent?.trim() || '';
        const icon = card.querySelector('.spec-card__icon img');
        const directionId = card.dataset.directionId || '';
        const details = directionDetailsMap[directionId] || {};
        const paragraphs = Array.isArray(details.paragraphs) ? details.paragraphs : [];
        const images = Array.isArray(details.images) ? details.images : [];
        const primaryImage = images[0]?.src || details.icon || icon?.getAttribute('src') || '';
        const primaryImageAlt = images[0]?.alt || details.title || title || 'Иллюстрация направления работы';

        activeDirectionTrigger = trigger || card;
        updateDirectionModalOffset();
        directionModalTitle.textContent = details.title || title;
        directionModalText.replaceChildren();
        paragraphs.forEach((paragraph) => {
            const paragraphElement = document.createElement('p');
            paragraphElement.className = 'direction-modal__paragraph';
            paragraphElement.textContent = paragraph;
            directionModalText.append(paragraphElement);
        });

        directionModalImage.src = primaryImage;
        directionModalImage.alt = primaryImageAlt;

        if (directionModalWarning) {
            if (details.warning) {
                directionModalWarning.textContent = details.warning;
                directionModalWarning.removeAttribute('hidden');
            } else {
                directionModalWarning.textContent = '';
                directionModalWarning.setAttribute('hidden', 'hidden');
            }
        }

        if (directionModalGallery) {
            directionModalGallery.replaceChildren();
            if (images.length > 0) {
                const validImages = images.filter((image) => image?.src);
                const galleryEntries = buildDirectionGalleryEntries(validImages);

                galleryEntries.forEach((entry) => {
                    if (entry.type === 'pair' && entry.before?.src && entry.after?.src) {
                        const pairElement = document.createElement('div');
                        pairElement.className = 'direction-modal__gallery-pair';

                        const beforeItem = createDirectionGalleryItem(entry.before, details.title || title);
                        const beforeCaption = document.createElement('figcaption');
                        beforeCaption.className = 'direction-modal__gallery-caption';
                        beforeCaption.textContent = 'До';
                        beforeItem.append(beforeCaption);

                        const afterItem = createDirectionGalleryItem(entry.after, details.title || title);
                        const afterCaption = document.createElement('figcaption');
                        afterCaption.className = 'direction-modal__gallery-caption';
                        afterCaption.textContent = 'После';
                        afterItem.append(afterCaption);

                        pairElement.append(beforeItem, afterItem);
                        directionModalGallery.append(pairElement);
                        return;
                    }

                    if (entry.type === 'single' && entry.image?.src) {
                        const singleItem = createDirectionGalleryItem(entry.image, details.title || title);
                        singleItem.classList.add('direction-modal__gallery-item--single');
                        directionModalGallery.append(singleItem);
                    }
                });
                directionModalGallery.removeAttribute('hidden');
            } else {
                directionModalGallery.setAttribute('hidden', 'hidden');
            }
        }

        directionModal.removeAttribute('hidden');
        directionModal.classList.remove('is-closing');
        document.body.classList.add('modal-open');

        requestAnimationFrame(() => {
            directionModal.classList.add('is-open');
            const firstFocusable = directionModal.querySelector(focusableSelector);
            firstFocusable?.focus();
        });
    };

    const closeDirectionModal = () => {
        if (!directionModal || directionModal.hasAttribute('hidden')) return;

        directionModal.classList.remove('is-open');
        directionModal.classList.add('is-closing');

        window.setTimeout(() => {
            directionModal.classList.remove('is-closing');
            directionModal.setAttribute('hidden', 'hidden');
            document.body.classList.remove('modal-open');
            if (activeDirectionTrigger instanceof HTMLElement) {
                activeDirectionTrigger.focus();
            }
            activeDirectionTrigger = null;
        }, 180);
    };

    directionCards.forEach((card) => {
        const detailsButton = card.querySelector('[data-direction-open]');
        card.setAttribute('tabindex', '0');
        card.setAttribute('role', 'button');
        card.setAttribute('aria-haspopup', 'dialog');

        card.addEventListener('click', (event) => {
            if (event.target.closest('[data-direction-open]')) return;
            openDirectionModal(card, card);
        });

        card.addEventListener('keydown', (event) => {
            if (event.target !== card) return;
            if (event.key !== 'Enter' && event.key !== ' ') return;
            event.preventDefault();
            openDirectionModal(card, card);
        });

        detailsButton?.addEventListener('click', (event) => {
            event.stopPropagation();
            openDirectionModal(card, detailsButton);
        });
    });

    directionCloseButtons?.forEach((closeButton) => {
        closeButton.addEventListener('click', closeDirectionModal);
    });

    window.addEventListener('resize', () => {
        if (!directionModal || directionModal.hasAttribute('hidden')) return;
        updateDirectionModalOffset();
    });

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

    const diplomaCarousels = document.querySelectorAll('[data-diplomas-carousel]');

    diplomaCarousels.forEach((carousel) => {
        const viewport = carousel.querySelector('[data-carousel-viewport]');
        const track = carousel.querySelector('[data-carousel-track]');
        const originalSlides = Array.from(track?.children || []);
        const prevButton = carousel.querySelector('[data-carousel-prev]');
        const nextButton = carousel.querySelector('[data-carousel-next]');
        const currentSlideIndicator = carousel.querySelector('[data-carousel-current]');
        const totalSlidesIndicator = carousel.querySelector('[data-carousel-total]');

        if (!viewport || !track || originalSlides.length < 2) return;

        const cloneCount = originalSlides.length;
        const prependClones = originalSlides.map((slide) => slide.cloneNode(true));
        const appendClones = originalSlides.map((slide) => slide.cloneNode(true));

        prependClones.forEach((slide) => {
            track.insertBefore(slide, track.firstChild);
        });
        appendClones.forEach((slide) => {
            track.appendChild(slide);
        });

        const slides = Array.from(track.children);
        const realSlidesCount = originalSlides.length;
        let settleTimerId = null;
        let resizeRafId = null;
        let indicatorRafId = null;

        if (totalSlidesIndicator) {
            totalSlidesIndicator.textContent = String(realSlidesCount);
        }

        const getStep = () => {
            const firstSlide = slides[cloneCount];
            if (!(firstSlide instanceof HTMLElement)) return viewport.clientWidth;
            const trackStyles = window.getComputedStyle(track);
            const gap = Number.parseFloat(trackStyles.columnGap || trackStyles.gap || '0') || 0;
            return firstSlide.getBoundingClientRect().width + gap;
        };

        const getLoopMetrics = () => {
            const step = getStep();
            const prependWidth = cloneCount * step;
            const realTrackWidth = realSlidesCount * step;
            return { step, prependWidth, realTrackWidth };
        };

        const setScrollWithoutAnimation = (left) => {
            const prevSnapType = viewport.style.scrollSnapType;
            viewport.style.scrollSnapType = 'none';
            viewport.scrollTo({ left, behavior: 'auto' });
            requestAnimationFrame(() => {
                viewport.style.scrollSnapType = prevSnapType;
            });
        };

        const normalizeLoopPosition = () => {
            const { step, prependWidth, realTrackWidth } = getLoopMetrics();
            if (!step || !realTrackWidth) return;

            const beforeRealSlides = prependWidth - step * 0.5;
            const afterRealSlides = prependWidth + realTrackWidth - step * 0.5;
            const currentScroll = viewport.scrollLeft;

            if (currentScroll < beforeRealSlides) {
                setScrollWithoutAnimation(currentScroll + realTrackWidth);
                return;
            }

            if (currentScroll >= afterRealSlides) {
                setScrollWithoutAnimation(currentScroll - realTrackWidth);
            }
        };

        const scrollToInitialRealSlide = () => {
            const { prependWidth } = getLoopMetrics();
            setScrollWithoutAnimation(prependWidth);
        };

        const updateSlideIndicator = () => {
            if (!currentSlideIndicator) return;
            const { step, prependWidth } = getLoopMetrics();
            if (!step) return;

            const rawIndex = Math.round((viewport.scrollLeft - prependWidth) / step);
            const normalizedIndex = ((rawIndex % realSlidesCount) + realSlidesCount) % realSlidesCount;
            currentSlideIndicator.textContent = String(normalizedIndex + 1);
        };

        const scheduleNormalize = () => {
            if (settleTimerId !== null) {
                window.clearTimeout(settleTimerId);
            }

            settleTimerId = window.setTimeout(() => {
                settleTimerId = null;
                normalizeLoopPosition();
            }, 90);
        };

        const scrollByStep = (direction) => {
            viewport.scrollBy({
                left: getStep() * direction,
                behavior: 'smooth',
            });
        };

        const scheduleIndicatorUpdate = () => {
            if (indicatorRafId !== null) return;
            indicatorRafId = window.requestAnimationFrame(() => {
                indicatorRafId = null;
                updateSlideIndicator();
            });
        };

        prevButton?.addEventListener('click', () => scrollByStep(-1));
        nextButton?.addEventListener('click', () => scrollByStep(1));
        viewport.addEventListener('scroll', () => {
            scheduleNormalize();
            scheduleIndicatorUpdate();
        }, { passive: true });
        viewport.addEventListener('pointerup', normalizeLoopPosition);
        viewport.addEventListener('touchend', normalizeLoopPosition, { passive: true });
        window.addEventListener('resize', () => {
            if (resizeRafId !== null) {
                window.cancelAnimationFrame(resizeRafId);
            }

            resizeRafId = window.requestAnimationFrame(() => {
                resizeRafId = null;
                normalizeLoopPosition();
                updateSlideIndicator();
            });
        });

        scrollToInitialRealSlide();
        updateSlideIndicator();
    });

    directionModal?.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            event.preventDefault();
            closeDirectionModal();
            return;
        }

        if (event.key !== 'Tab') return;

        const focusables = Array.from(directionModal.querySelectorAll(focusableSelector))
            .filter((node) => !node.hasAttribute('disabled') && node.getAttribute('aria-hidden') !== 'true');

        if (!focusables.length) return;

        const first = focusables[0];
        const last = focusables[focusables.length - 1];
        const active = document.activeElement;

        if (event.shiftKey && active === first) {
            event.preventDefault();
            last.focus();
        } else if (!event.shiftKey && active === last) {
            event.preventDefault();
            first.focus();
        }
    });


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
        const pageRoot = document.querySelector('.site-shell > main') || document.querySelector('main.inner-page') || document.querySelector('main') || document.body;
        const topLevelSections = Array.from(pageRoot.children).filter((node) => node.matches('section'));
        const firstThreeSections = topLevelSections.slice(0, 3);
        const firstThreeSectionSet = new Set(firstThreeSections);

        firstThreeSections.forEach((section) => {
            section.setAttribute('data-no-scroll-motion', '');
        });

        const isInFirstThreeSections = (node) => {
            const section = node?.closest('section');
            return Boolean(section && firstThreeSectionSet.has(section));
        };
        const isMotionExcluded = (node) => Boolean(node?.closest('[data-no-scroll-motion]')) || isInFirstThreeSections(node);
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

        if (firstThreeSections.length) {
            firstThreeSections.forEach((section) => {
                section.querySelectorAll('.motion-reveal').forEach((element) => {
                    element.classList.add('is-revealed');
                });
            });
        }

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
