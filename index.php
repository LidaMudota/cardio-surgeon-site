<?php
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$status = $_GET['status'] ?? null;
$successMessage = null;
$errorMessage = null;

switch ($status) {
    case 'success':
        $successMessage = 'Заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.';
        break;
    case 'invalid':
        $errorMessage = 'Проверьте корректность заполнения обязательных полей.';
        break;
    case 'csrf':
        $errorMessage = 'Сессия формы истекла. Обновите страницу и отправьте форму повторно.';
        break;
    case 'spam':
        $errorMessage = 'Форма отклонена системой защиты от спама.';
        break;
    case 'rate':
        $errorMessage = 'Слишком частая отправка формы. Подождите немного и попробуйте снова.';
        break;
    case 'config':
        $errorMessage = 'Email для получения заявок еще не настроен. Укажите его в config/mail.php.';
        break;
    case 'error':
        $errorMessage = 'Не удалось отправить заявку. Попробуйте позже.';
        break;
    default:
        break;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кардиохирург — главная страница</title>
    <meta name="description" content="Главная страница сайта врача-кардиохирурга. Запись на консультацию, направления помощи, информация о специалисте и результаты практики.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="Кардиохирург — главная страница">
    <meta property="og:description" content="Главная страница сайта врача-кардиохирурга. Запись на консультацию, направления помощи, информация о специалисте и результаты практики.">
    <meta property="og:url" content="https://example.com/index.php">
    <meta property="og:image" content="https://example.com/assets/img/content/hero-doctor.png">
    <link rel="canonical" href="https://example.com/index.php">
    <link rel="icon" type="image/svg+xml" href="assets/img/icons/spec-heart-transplant.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/internal.css">
    <script type="application/ld+json">{"@context":"https://schema.org","@type":"Physician","name":"Кардиохирург","url":"https://example.com/index.php","medicalSpecialty":"Cardiovascular"}</script>
</head>
<body>
    <div class="site-shell">
        <?php require __DIR__ . '/includes/header.php'; ?>


        <main>
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
                                <a class="button button--accent" href="#consultation">Записаться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--tight" id="specialization">
                <div class="container">
                    <div class="section__head">
                        <h2 class="section__title">Специализация</h2>
                    </div>

                    <div class="spec-grid">
                        <article class="spec-card spec-card--heart">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/spec-vascular.svg" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">КОРОНАРНОЕ СТЕНТИРОВАНИЕ</h3>
                                <p class="spec-card__text">с применением ВСУЗИ</p>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/sonnayaArteriya0.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">СТЕНТИРОВАНИЕ СОННЫХ АРТЕРИЙ</h3>
                                <p class="spec-card__text">стентирование для профилактики инсульта</p>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/nijnieKonechnosti3.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">АРТЕРИИ НИЖНИХ КОНЕЧНОСТЕЙ</h3>
                                <p class="spec-card__text">ангиопластика баллонами с лекарственным покрытием, стентирование с применением ротационной атерэктомии и ВСУЗИ</p>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/stentirovanieVen0.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">ВЕНОЗНОЕ СТЕНТИРОВАНИЕ</h3>
                                <p class="spec-card__text">лечение синдрома Мэй-Тернера, щелкунчика и посттромботического синдрома</p>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/spec-uterine-embolization.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">ЭМБОЛИЗАЦИЯ МАТОЧНЫХ АРТЕРИЙ</h3>
                                <p class="spec-card__text">эндоваскулярное лечение миомы матки</p>
                            </div>
                        </article>

                        <article class="spec-card">
                            <div class="spec-card__icon" aria-hidden="true">
                                <img src="assets/img/icons/spec-varicocele-embolization0.png" alt="">
                            </div>
                            <div class="spec-card__content">
                                <h3 class="spec-card__title">ЭМБОЛИЗАЦИЯ ВЕН ПРИ ВАРИКОЦЕЛЕ И ЭРЕКТИЛЬНОЙ ДИСФУНКЦИИ</h3>
                                <p class="spec-card__text">малоинвазивное эндоваскулярное лечение венозных нарушений</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="section section--about" id="about">
                <div class="container about">
                    <div class="about__content">
                        <h2 class="section__title section__title--left"><!-- TODO: Заменить на реальные данные врача -->Коробков<br>Александр Олегович</h2>
                        <p class="about__lead"><!-- TODO: Заменить на реальные данные врача -->ВРАЧ ЭНДОВАСКУЛЯРНЫЙ ХИРУРГ</p>
                        <p class="about__text"><!-- TODO: Заменить на реальные данные врача -->Коробков Александр Олегович — эндоваскулярный хирург, врач высшей квалифицированной категории, 16 лет клинической практики, соискатель ученой степени кандидата медицинских наук в ФГБНУ «РНЦХ им. акад. Б. В. Петровского». В 2010 году с отличием закончил ММА им. И. М. Сеченова, а в 2012 году был первым выпускником в стране ординатуры по специальности «рентгенэндоваскулярные диагностика и лечение». На базе ФГАУ «НМИЦ ЛРЦ» Минздрава России при участии Коробкова Александра Олеговича были разработаны и утверждены Министерством здравоохранения РФ к практическому применению 7 протоколов клинических апробаций. Доктор специализируется на коронарном стентировании с применением ВСУЗИ, стентировании сонных артерий, баллонной ангиопластике и стентировании артерий нижних конечностей с применением ротационной атерэктомии и ВСУЗИ, венозном стентировании и эмболизации. Сегодня выступает спикером на профильных конгрессах по эндоваскулярной хирургии в России и проводит обучение хирургов.</p>
                    </div>

                    <div class="about__visual">
                        <!-- TODO: Вставить изображение about-doctor.webp в /assets/img/content/ -->
                        <img src="assets/img/content/fotoVracha.png" alt="Портрет врача" class="about__image">
                    </div>
                </div>
            </section>

            <section class="section section--results" id="results">
                <div class="container">
                    <div class="section__head section__head--results">
                        <h2 class="section__title">Результаты операций</h2>
                    </div>

                    <div class="results-slider-area">
                        <div class="results-nav">
                            <button class="results-nav__button" type="button" data-results-prev aria-label="Предыдущий слайд">
                                <img src="assets/img/icons/results-arrow-prev.svg" alt="" aria-hidden="true">
                            </button>
                            <button class="results-nav__button" type="button" data-results-next aria-label="Следующий слайд">
                                <img src="assets/img/icons/results-arrow-next.svg" alt="" aria-hidden="true">
                            </button>
                        </div>

                        <div class="results-slider" data-results-slider>
                            <article class="result-card">
                                <!-- TODO: Вставить изображение result-01.webp в /assets/img/content/ -->
                                <img src="assets/img/content/result-01.svg" alt="Результат операции 1" class="result-card__image">
                                <div class="result-card__meta" aria-hidden="true">
                                    <p class="result-card__meta-title">Результат операции 1</p>
                                </div>
                            </article>
                            <article class="result-card">
                                <!-- TODO: Вставить изображение result-02.webp в /assets/img/content/ -->
                                <img src="assets/img/content/result-02.svg" alt="Результат операции 2" class="result-card__image">
                                <div class="result-card__meta" aria-hidden="true">
                                    <p class="result-card__meta-title">Результат операции 2</p>
                                </div>
                            </article>
                            <article class="result-card">
                                <!-- TODO: Вставить изображение result-03.webp в /assets/img/content/ -->
                                <img src="assets/img/content/result-03.svg" alt="Результат операции 3" class="result-card__image">
                                <div class="result-card__meta" aria-hidden="true">
                                    <p class="result-card__meta-title">Результат операции 3</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section--consultation" id="consultation">
                <div class="container">
                    <div class="consultation">
                        <div class="consultation__header">
                            <h2 class="consultation__title">Хотите записаться на консультацию?</h2>
                            <p class="consultation__subtitle">Оставьте заявку, и мы свяжемся с вами в ближайшее время.</p>
                        </div>

                        <?php if ($successMessage): ?>
                            <div class="alert alert--success" role="status"><?= htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?></div>
                        <?php endif; ?>

                        <?php if ($errorMessage): ?>
                            <div class="alert alert--error" role="alert"><?= htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8'); ?></div>
                        <?php endif; ?>

                        <form class="consultation__form" action="forms/send.php" method="post" novalidate data-consultation-form>
                            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
                            <input type="hidden" name="form_started_at" value="<?= time(); ?>">
                            <input type="hidden" name="form_page" value="index.php">
                            <div class="form-field form-field--honeypot" aria-hidden="true">
                                <label for="website">Оставьте это поле пустым</label>
                                <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                            </div>

                            <div class="form-field">
                                <label class="visually-hidden" for="name">Ваше имя</label>
                                <input class="input" type="text" id="name" name="name" placeholder="Ваше имя" required>
                            </div>

                            <div class="form-field">
                                <label class="visually-hidden" for="phone">Номер телефона</label>
                                <input class="input" type="tel" id="phone" name="phone" placeholder="Номер телефона" required data-phone-input>
                            </div>

                            <div class="form-field">
                                <label class="visually-hidden" for="message">Комментарий</label>
                                <textarea class="input input--textarea" id="message" name="message" placeholder="Комментарий / тема обращения"></textarea>
                            </div>

                            <div class="form-field form-field--submit">
                                <button class="button button--dark button--wide" type="submit">ОТПРАВИТЬ ЗАЯВКУ</button>
                            </div>

                            <label class="checkbox">
                                <input class="checkbox__input" type="checkbox" name="agreement" value="1" required>
                                <span class="checkbox__box"></span>
                                <span class="checkbox__text">Я согласен(а) на обработку персональных данных. <a href="politika-konfidentsialnosti.php">Политикой конфиденциальности</a> и <a href="soglasie-na-obrabotku-personalnykh-dannykh.php">согласием на обработку персональных данных</a></span>
                            </label>
                        </form>
                    </div>
                </div>
            </section>

            <section class="section section--location" id="location">
                <div class="container">
                    <div class="location-map motion-reveal motion-reveal--up" data-map-panel>
                        <div class="location-map__top" data-map-copy>
                            <h2 class="location-map__title">Как нас найти</h2>
                            <p class="location-map__text">Клиника удобно расположена в городе, а маршрут до входа отображается прямо на карте. Откройте карту, чтобы построить путь из любой точки.</p>
                        </div>
                        <div class="location-map__frame" aria-label="Карта расположения клиники">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A47f7c01e0e45c8af8c3b6758b11905f24df3bf364d201d50108de2cc9d03153e&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php require __DIR__ . '/includes/footer.php'; ?>
