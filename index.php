<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Коробков Александр Олегович — врач эндоваскулярный хирург',
    'description' => 'Официальный сайт врача эндоваскулярного хирурга Коробкова Александра Олеговича: консультации, направления лечения, памятки пациентам и контакты для записи.',
];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

        <main id="home-page">
            <section class="hero" id="hero">
                <div class="container hero__grid">
                    <div class="hero__visual">
                        <div class="hero__image-card">
                            <img src="assets/img/content/hero-doctor0.png" alt="Фото врача эндоваскулярного хирурга" class="hero__image" loading="eager" fetchpriority="high" decoding="async">
                        </div>
                    </div>

                    <div class="hero__content">
                        <div class="hero__content-panel">
                            <h1 class="hero__title"><!-- TODO: Заменить на реальные данные врача -->Коробков<br>Александр Олегович </h1>
                            <p class="hero__subtitle"><!-- TODO: Заменить на реальные данные врача -->Врач эндоваскулярный хирург</p>
                            <p class="hero__subtitle"><!-- TODO: Заменить на реальные данные врача -->Стаж работы 16 лет</p>

                            <div class="hero__actions">
                                <a class="button button--accent" href="kontakty.php">Связаться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--tight" id="specialization">
                <div class="container">
                    <div class="section__head">
                        <h2 class="section__title">Направления работы</h2>
                    </div>

                    <div class="spec-grid" aria-label="Карточки направлений работы">
                        <article class="spec-card spec-card--heart">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/spec-vascular.svg" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">КОРОНАРНОЕ СТЕНТИРОВАНИЕ</h3>
                                <p class="spec-card__text">с применением ВСУЗИ</p>
                                <button class="spec-card__details" type="button" data-direction-open>Подробнее</button>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/sonnayaArteriya0.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">СТЕНТИРОВАНИЕ СОННЫХ АРТЕРИЙ</h3>
                                <p class="spec-card__text">стентирование для профилактики инсульта</p>
                                <button class="spec-card__details" type="button" data-direction-open>Подробнее</button>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/nijnieKonechnosti3.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">АРТЕРИИ НИЖНИХ КОНЕЧНОСТЕЙ</h3>
                                <p class="spec-card__text">ангиопластика баллонами с лекарственным покрытием, стентирование с применением ротационной атерэктомии и ВСУЗИ</p>
                                <button class="spec-card__details" type="button" data-direction-open>Подробнее</button>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/stentirovanieVen0.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">ВЕНОЗНОЕ СТЕНТИРОВАНИЕ</h3>
                                <p class="spec-card__text">лечение синдрома Мэй-Тернера, щелкунчика и посттромботического синдрома</p>
                                <button class="spec-card__details" type="button" data-direction-open>Подробнее</button>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/spec-uterine-embolization.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">ЭМБОЛИЗАЦИЯ МАТОЧНЫХ АРТЕРИЙ</h3>
                                <p class="spec-card__text">эндоваскулярное лечение миомы матки</p>
                                <button class="spec-card__details" type="button" data-direction-open>Подробнее</button>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/spec-varicocele-embolization0.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">ЭМБОЛИЗАЦИЯ ВЕН ПРИ ВАРИКОЦЕЛЕ И ЭРЕКТИЛЬНОЙ ДИСФУНКЦИИ</h3>
                                <p class="spec-card__text">малоинвазивное эндоваскулярное лечение венозных нарушений</p>
                                <button class="spec-card__details" type="button" data-direction-open>Подробнее</button>
                            </div>
                        </article>
                    </div>

                    <div class="direction-modal" data-direction-modal hidden>
                        <div class="direction-modal__overlay" data-direction-close></div>
                        <div
                            class="direction-modal__dialog"
                            role="dialog"
                            aria-modal="true"
                            aria-labelledby="direction-modal-title"
                            aria-describedby="direction-modal-text"
                        >
                            <button class="direction-modal__close" type="button" data-direction-close aria-label="Закрыть окно">
                                <span aria-hidden="true">×</span>
                            </button>

                            <div class="direction-modal__media">
                                <img src="" alt="" data-direction-modal-image>
                            </div>

                            <div class="direction-modal__body">
                                <p class="direction-modal__label">Направление работы</p>
                                <h3 class="direction-modal__title" id="direction-modal-title" data-direction-modal-title></h3>
                                <p class="direction-modal__text" id="direction-modal-text" data-direction-modal-text></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--about" id="about">
                <div class="container about">
                    <div class="about__content">
                        <h2 class="section__title section__title--left"><!-- TODO: Заменить на реальные данные врача -->Коробков<br>Александр Олегович</h2>
                        <p class="about__lead"><!-- TODO: Заменить на реальные данные врача -->ВРАЧ ЭНДОВАСКУЛЯРНЫЙ ХИРУРГ</p>
                        <p class="about__text"><!-- TODO: Заменить на реальные данные врача -->Коробков Александр Олегович — эндоваскулярный хирург, 16 лет клинической практики, врач высшей квалифицированной категории, соискатель ученой степени кандидата медицинских наук в ФГБНУ «РНЦХ им. акад. Б.В. Петровского».

В 2010 году с отличием закончил бюджетную форму обучения в ММА им. И.М. Сеченова.

В 2012 году был первым выпускником в стране ординатуры по специальности «рентгенэндоваскулярные диагностика и лечение» на базе ФГБНУ «РНЦХ им. акад. Б.В. Петровского».

На базе ФГАУ "НМИЦ ЛРЦ" Минздрава России при участии Коробкова Александра Олеговича были разработаны и утверждены Министерством здравоохранения РФ к практическому применению 7 протоколов клинических апробаций.

Сегодня выступает спикером на профильных конгрессах по эндоваскулярной хирургии в России и проводит обучение хирургов.

Доктор специализируется на операциях: коронарное стентирование с применением ВСУЗИ, стентирование сонных артерий, баллонная ангиопластика и стентирование артерий нижних конечностей с применением ротационной атерэктомии и ВСУЗИ, стентирование глубоких вен (посттромботический синдром, синдром Мэй-Тернера, щелкунчика), эмболизация маточных артерий, эмболизация вен при варикоцеле и эректильной дисфункции.</p>
                    </div>

                    <div class="about__visual">
                        <!-- TODO: Вставить изображение about-doctor.webp в /assets/img/content/ -->
                        <img src="assets/img/content/fotoVracha.png" alt="Портрет врача" class="about__image">
                    </div>
                </div>
            </section>

            <?php require __DIR__ . '/includes/form-block.php'; ?>

            <section class="section section--location" id="location">
                <div class="container">
                    <div class="location-map motion-reveal motion-reveal--up" data-map-panel>
                        <div class="location-map__top" data-map-copy>
                            <div class="location-map__copy">
                                <h2 class="location-map__title">Как нас найти</h2>
                                <p class="location-map__text">Клиника удобно расположена в городе, а маршрут до входа отображается прямо на карте. Откройте карту, чтобы построить путь из любой точки.</p>
                            </div>
                            <a class="location-map__action" href="https://yandex.ru/maps/?rtext=~55.775594,37.590075&rtt=auto" target="_blank" rel="noopener noreferrer">Построить маршрут</a>
                        </div>
                        <div class="location-map__frame" aria-label="Карта расположения клиники">
                            <script type="text/plain" data-cookie-category="optional" data-cookie-src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A47f7c01e0e45c8af8c3b6758b11905f24df3bf364d201d50108de2cc9d03153e&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                            <noscript>Для отображения карты включите JavaScript.</noscript>
                        </div>
                    </div>
                </div>
            </section>

            <section class="legal-note-section" aria-label="Юридическое примечание">
                <div class="container">
                    <div class="legal-note" role="note">
                        <p class="legal-note__text">Индивидуальный предприниматель Коробков А.О. не оказывает медицинских услуг. Размещённая на сайте информация носит справочно-информационный характер и не является публичной офертой. Окончательная стоимость медицинских услуг рассчитывается медицинской организацией АО «Медицина» после очной консультации с врачом, исходя из клинической картины и объёма необходимых вмешательств. Для получения точной информации о стоимости необходимой Вам медицинской услуги, пожалуйста, свяжитесь с медицинской организацией напрямую по телефону. Вы также можете обратиться ко мне для организации записи на консультацию к профильному специалисту.</p>
                    </div>
                </div>
            </section>
        </main>

        <?php require __DIR__ . '/includes/footer.php'; ?>
