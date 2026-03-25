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
        <header class="header" id="top">
            <div class="container header__inner">
                <a class="logo" href="index.php" aria-label="На главную">
                    <span class="logo__mark">❤</span>
                    <span class="logo__text">Коробков А. О.</span>
                </a>

                <nav class="header__nav nav" aria-label="Основная навигация">
                    <a class="nav__link" href="o-vrache.php">ОБО МНЕ</a>
                    <a class="nav__link" href="rezultaty-rabot.php">РЕЗУЛЬТАТЫ РАБОТ</a>
                    <a class="nav__link" href="pamyatki-patsientam.php">ПАМЯТКИ ПАЦИЕНТАМ</a>
                    <a class="nav__link" href="dlya-vrachey.php">ДЛЯ ВРАЧЕЙ</a>
                    <a class="nav__link" href="kontakty.php">КОНТАКТЫ</a>
                    <a class="nav__link" href="uslugi-i-tseny.php">УСЛУГИ И ЦЕНЫ</a>
                </nav>

                <div class="header__actions">
                    <button class="header__menu-button" type="button" data-menu-toggle aria-expanded="false" aria-controls="mega-menu">
                        МЕНЮ
                    </button>

                    <div class="header__socials">
                        <a
                            class="header__icon-link"
                            href="https://t.me/your_username"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Telegram"
                            title="Telegram"
                        >
                            <img src="assets/img/icons/max.svg" alt="max" class="header__icon-image">
                        </a>

                        <a
                            class="header__icon-link"
                            href="https://wa.me/79990000000"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="WhatsApp"
                            title="WhatsApp"
                        >
                            <img src="assets/img/icons/telegram.svg" alt="telegram" class="header__icon-image">
                        </a>
                    </div>

                    <a class="button button--accent button--small" href="#consultation">Записаться</a>

                    <button class="burger" type="button" data-mobile-nav-toggle aria-expanded="false" aria-controls="mobile-nav" aria-label="Открыть меню">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>

            <div class="mega-menu" id="mega-menu" hidden>
                <div class="container mega-menu__inner">
                    <div class="mega-menu__column">
                        <a class="mega-menu__link" href="o-vrache.php">О ВРАЧЕ</a>
                        <a class="mega-menu__link" href="o-klinike.php">О клинике</a> 
                        <a class="mega-menu__link" href="otzyvy.php">Отзывы</a>
                        <a class="mega-menu__link" href="publikatsii.php">Публикации</a>
                        <a class="mega-menu__link" href="diplomy.php">Дипломы</a>
                    </div>

                    <div class="mega-menu__column">
                        <a class="mega-menu__link" href="analizy.php">АНАЛИЗЫ</a>
                        <a class="mega-menu__link" href="anesteziya.php">Анастезия</a>
                        <a class="mega-menu__link" href="kak-prokhodit-operatsiya.php">Как проходит операция</a>
                        <a class="mega-menu__link" href="kak-prokhodit-konsultatsiya.php">Как проходит консультация</a>
                        <a class="mega-menu__link" href="patsientam-iz-drugogo-goroda.php">Пациентам из другого города</a>
                        <a class="mega-menu__link" href="podgotovka-k-operatsii.php">Подготовка к операции</a>
                        <a class="mega-menu__link" href="posle-operatsii.php">После операции</a>
                    </div>

                    <div class="mega-menu__preview">
                        <div class="mega-menu__image-wrap">
                            <!-- TODO: Вставить изображение menu-preview.webp в /assets/img/content/ -->
                            <img src="assets/img/content/about-doctor.svg" alt="Превью врача" class="mega-menu__image">
                        </div>
                        <a class="button button--accent button--small" href="#consultation">Записаться на консультацию</a>
                    </div>
                </div>
            </div>

            <div class="mobile-nav" id="mobile-nav" hidden>
                <div class="container mobile-nav__inner">
                    <a class="mobile-nav__link" href="o-vrache.php">Обо мне</a>
                    <a class="mobile-nav__link" href="specializatsiya.php">Специализация</a>
                    <a class="mobile-nav__link" href="specializatsiya.php">Направления</a>
                    <a class="mobile-nav__link" href="rezultaty-rabot.php">Результаты</a>
                    <a class="mobile-nav__link" href="konsultatsiya.php">Запись</a>
                    <a class="mobile-nav__link" href="kontakty.php">Контакты</a>
                </div>
            </div>
        </header>

        <main>
            <section class="hero" id="hero">
                <img src="assets/img/content/hero-shape.svg" alt="" class="hero__shape" aria-hidden="true">

                <div class="container hero__grid">
                    <div class="hero__visual">
                        <div class="hero__image-card">
                            <img src="assets/img/content/hero-doctor.png" alt="Фото врача-кардиохирурга" class="hero__image">
                        </div>
                    </div>

                    <div class="hero__content">
                        <h1 class="hero__title"><!-- TODO: Заменить на реальные данные врача -->Коробков<br>Александр Олегович </h1>
                        <p class="hero__subtitle"><!-- TODO: Заменить на реальные данные врача -->Врач эндоваскулярный хирург</p>
                        <p class="hero__subtitle"><!-- TODO: Заменить на реальные данные врача -->Стаж работы 16 лет</p>

                        <div class="hero__actions">
                            <a class="button button--accent" href="#consultation">Записаться</a>
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
                        <article class="spec-card">
                        <div class="spec-card__icon" aria-hidden="true">
                            <img src="assets/img/icons/spec-vascular.svg" alt="">
                        </div>
                            <div>
                                <h3 class="spec-card__title">КОРОНАРНОЕ СТЕНТИРОВАНИЕ</h3>
                                <p class="spec-card__text">Восстановление кровотока в коронарных артериях с применением современных эндоваскулярных методик, включая ВСУЗИ.</p>
                            </div>
                        </article>

                        <article class="spec-card">
                        <div class="spec-card__icon" aria-hidden="true">
                            <img src="assets/img/icons/spec-heart-transplant.svg" alt="">
                        </div>
                            <div>
                                <h3 class="spec-card__title">СТЕНТИРОВАНИЕ СОННЫХ АРТЕРИЙ</h3>
                                <p class="spec-card__text">Малоинвазивное лечение стенозов сонных артерий для снижения риска инсульта и восстановления кровоснабжения мозга.</p>
                            </div>
                        </article>

                        <article class="spec-card">
                        <div class="spec-card__icon" aria-hidden="true">
                            <img src="assets/img/icons/spec-heart-transplant.svg" alt="">
                        </div>
                            <div>
                                <h3 class="spec-card__title">АРТЕРИИ НИЖНИХ КОНЕЧНОСТЕЙ</h3>
                                <p class="spec-card__text">Баллонная ангиопластика и стентирование артерий нижних конечностей с ротационной атерэктомией и ВСУЗИ.</p>
                            </div>
                        </article>

                        <article class="spec-card">
                        <div class="spec-card__icon" aria-hidden="true">
                            <img src="assets/img/icons/spec-vascular.svg" alt="">
                        </div>
                            <div>
                                <h3 class="spec-card__title">ВЕНОЗНОЕ СТЕНТИРОВАНИЕ</h3>
                                <p class="spec-card__text">Эндоваскулярное лечение заболеваний вен, включая стентирование глубоких вен и эмболизацию.</p>
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
                        <p class="about__text"><!-- TODO: Заменить на реальные данные врача -->Коробков Александр Олегович — эндоваскулярный хирург, врач высшей квалификационной категории с 16-летним клиническим опытом, соискатель ученой степени кандидата медицинских наук в ФГБНУ «РНЦХ им. акад. Б. В. Петровского».

В 2010 году с отличием окончил ММА им. И. М. Сеченова, а в 2012 году стал первым выпускником в стране ординатуры по специальности «рентгенэндоваскулярные диагностика и лечение». При его участии были разработаны и утверждены 7 протоколов клинических апробаций.

Специализируется на коронарном и венозном стентировании, стентировании сонных артерий, лечении артерий нижних конечностей и эмболизации. Выступает спикером профильных конгрессов и проводит обучение хирургов.</p>
                    </div>

                    <div class="about__visual">
                        <!-- TODO: Вставить изображение about-doctor.webp в /assets/img/content/ -->
                        <img src="assets/img/content/about-doctor.jpg" alt="Портрет врача" class="about__image">
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
                            </article>
                            <article class="result-card">
                                <!-- TODO: Вставить изображение result-02.webp в /assets/img/content/ -->
                                <img src="assets/img/content/result-02.svg" alt="Результат операции 2" class="result-card__image">
                            </article>
                            <article class="result-card">
                                <!-- TODO: Вставить изображение result-03.webp в /assets/img/content/ -->
                                <img src="assets/img/content/result-03.svg" alt="Результат операции 3" class="result-card__image">
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
        </main>

        <footer class="footer" id="contacts">
            <div class="container footer__inner">
                <div class="footer__column">
                    <a class="footer__link" href="index.php">Главная</a>
                    <a class="footer__link" href="o-vrache.php">Обо мне</a>
                    <a class="footer__link" href="uslugi-i-tseny.php">Цены</a>
                </div>

                <div class="footer__column">
                    <a class="footer__link" href="specializatsiya.php">Специализация</a>
                    <a class="footer__link" href="rezultaty-rabot.php">Результаты операций</a>
                    <a class="footer__link" href="konsultatsiya.php">Консультация</a>
                </div>

                <div class="footer__column footer__column--contacts">
                    <a class="footer__link" href="rezultaty-rabot.php">Результаты работ</a>
                    <a class="footer__link" href="otzyvy.php">Отзывы</a>
                    <a class="footer__link" href="kontakty.php">Контакты</a>
                </div>

                <div class="footer__cta">
                    <div class="header__socials">
                    <a
                            class="header__icon-link"
                            href="https://wa.me/79990000000"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="WhatsApp"
                            title="WhatsApp"
                        >
                            <img src="assets/img/icons/telega.svg" alt="telegram" class="header__icon-image">
                        </a>
                        <a
                            class="header__icon-link"
                            href="https://t.me/your_username"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Telegram"
                            title="Telegram"
                        >
                            <img src="assets/img/icons/maxim.svg" alt="max" class="header__icon-image">
                        </a>
                    </div>
                    <a class="button button--accent button--small" href="#consultation">Записаться</a>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="container footer__bottom-inner">
                    <p class="footer__caption">2026 Все права защищены</p>
                    <a class="footer__link" href="politika-konfidentsialnosti.php">Политика конфиденциальности</a>
                    <a class="footer__link" href="soglasie-na-obrabotku-personalnykh-dannykh.php">Согласие на обработку ПДн</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>
