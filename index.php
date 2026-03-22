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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="site-shell">
        <header class="header" id="top">
            <div class="container header__inner">
                <a class="logo" href="#top" aria-label="На главную">
                    <span class="logo__mark">❤</span>
                    <span class="logo__text">Кардиохирург</span>
                </a>

                <nav class="header__nav nav" aria-label="Основная навигация">
                    <a class="nav__link" href="#hero">ОБО МНЕ</a>
                    <a class="nav__link" href="">РЕЗУЛЬТАТЫ РАБОТ</a>
                    <a class="nav__link" href="">ПАМЯТКИ ПАЦИЕНТАМ</a>
                    <a class="nav__link" href="">ДЛЯ ВРАЧЕЙ</a>
                    <a class="nav__link" href="#contacts">КОНТАКТЫ</a>
                    <a class="nav__link" href="">УСЛУГИ И ЦЕНЫ</a>
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
                        <a class="mega-menu__link" href="#hero">О ВРАЧЕ</a>
                        <a class="mega-menu__link" href="">О клинике</a> 
                        <a class="mega-menu__link" href="">Отзывы</a>
                        <a class="mega-menu__link" href="#results">Публикации</a>
                        <a class="mega-menu__link" href="#contacts">Дипломы</a>
                    </div>

                    <div class="mega-menu__column">
                        <a class="mega-menu__link" href="">АНАЛИЗЫ</a>
                        <a class="mega-menu__link" href="">Анастезия</a>
                        <a class="mega-menu__link" href="">Как проходит операция</a>
                        <a class="mega-menu__link" href="">Как проходит консультация</a>
                        <a class="mega-menu__link" href="">Пациентам из другого города</a>
                        <a class="mega-menu__link" href="">Подготовка к операции</a>
                        <a class="mega-menu__link" href="">После операции</a>
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
                    <a class="mobile-nav__link" href="#hero">Обо мне</a>
                    <a class="mobile-nav__link" href="#specialization">Специализация</a>
                    <a class="mobile-nav__link" href="#about">Направления</a>
                    <a class="mobile-nav__link" href="#results">Результаты</a>
                    <a class="mobile-nav__link" href="#consultation">Запись</a>
                    <a class="mobile-nav__link" href="#contacts">Контакты</a>
                </div>
            </div>
        </header>

        <main>
            <section class="hero" id="hero">
                <img src="assets/img/content/hero-shape.svg" alt="" class="hero__shape" aria-hidden="true">

                <div class="container hero__grid">
                    <div class="hero__visual">
                        <div class="hero__image-card">
                            <!-- TODO: Вставить изображение hero-doctor.webp в /assets/img/content/ -->
                            <img src="assets/img/content/hero-doctor.svg" alt="Фото врача-кардиохирурга" class="hero__image">
                        </div>
                    </div>

                    <div class="hero__content">
                        <p class="hero__eyebrow">Кардиохирург</p>
                        <h1 class="hero__title"><!-- TODO: Заменить на реальные данные врача -->Фамилия<br>Имя Отчество</h1>
                        <p class="hero__subtitle"><!-- TODO: Заменить на реальные данные врача -->Врач высшей категории. Опыт работы 15+ лет. Современные методы диагностики и лечения заболеваний сердца.</p>

                        <ul class="hero__facts">
                            <li>Консультации и второе мнение</li>
                            <li>Подготовка к операции</li>
                            <li>Послеоперационное наблюдение</li>
                        </ul>

                        <div class="hero__actions">
                            <a class="button button--accent" href="#consultation">Записаться</a>
                            <a class="button button--ghost" href="#specialization">Специализация</a>
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
                                <h3 class="spec-card__title">СОСУДИСТАЯ ХИРУРГИЯ</h3>
                                <p class="spec-card__text">Специализируется на крупных сосудах — аорте, венах и артериях</p>
                            </div>
                        </article>

                        <article class="spec-card">
                        <div class="spec-card__icon" aria-hidden="true">
                            <img src="assets/img/icons/spec-heart-transplant.svg" alt="">
                        </div>
                            <div>
                                <h3 class="spec-card__title">ТРАНСПЛАНТАЦИЯ СЕРДЦА</h3>
                                <p class="spec-card__text">Пересаживает сердца пациентам с тяжёлыми заболеваниями.</p>
                            </div>
                        </article>

                        <article class="spec-card">
                        <div class="spec-card__icon" aria-hidden="true">
                            <img src="assets/img/icons/spec-heart-transplant.svg" alt="">
                        </div>
                            <div>
                                <h3 class="spec-card__title">ТРАНСПЛАНТАЦИЯ СЕРДЦА</h3>
                                <p class="spec-card__text">Пересаживает сердца пациентам с тяжёлыми заболеваниями.</p>
                            </div>
                        </article>

                        <article class="spec-card">
                        <div class="spec-card__icon" aria-hidden="true">
                            <img src="assets/img/icons/spec-vascular.svg" alt="">
                        </div>
                            <div>
                                <h3 class="spec-card__title">СОСУДИСТАЯ ХИРУРГИЯ</h3>
                                <p class="spec-card__text">Специализируется на крупных сосудах — аорте, венах и артериях</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section class="section section--about" id="about">
                <div class="container about">
                    <div class="about__content">
                        <h2 class="section__title section__title--left"><!-- TODO: Заменить на реальные данные врача -->Фамилия<br>Имя Отчество</h2>
                        <p class="about__lead"><!-- TODO: Заменить на реальные данные врача -->Врач-кардиохирург с многолетним опытом работы. Специализируется на диагностике, подготовке к хирургическому лечению и ведении пациентов после операций.</p>
                        <p class="about__text"><!-- TODO: Заменить на реальные данные врача -->На странице использован осмысленный временный текст, чтобы блок выглядел как готовый макет. Позже сюда нужно вставить реальную биографию, опыт, достижения, образование и специализацию врача.</p>
                        <p class="about__text"><!-- TODO: Заменить на реальные данные врача -->Можно добавить сведения о стаже, количестве проведенных операций, направлениях практики, профессиональных сообществах, научной деятельности и формате приема.</p>
                    </div>

                    <div class="about__visual">
                        <!-- TODO: Вставить изображение about-doctor.webp в /assets/img/content/ -->
                        <img src="assets/img/content/about-doctor.svg" alt="Портрет врача" class="about__image">
                    </div>
                </div>
            </section>

            <section class="section section--results" id="results">
                <div class="container">
                    <div class="section__head section__head--results">
                        <h2 class="section__title">Результаты операций</h2>
                        <div class="results-nav">
                            <button class="results-nav__button" type="button" data-results-prev aria-label="Предыдущий слайд">‹</button>
                            <button class="results-nav__button" type="button" data-results-next aria-label="Следующий слайд">›</button>
                        </div>
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

                            <div class="form-field form-field--submit">
                                <button class="button button--dark button--wide" type="submit">Отправить заявку</button>
                            </div>

                            <label class="checkbox">
                                <input class="checkbox__input" type="checkbox" name="agreement" value="1" required>
                                <span class="checkbox__box"></span>
                                <span class="checkbox__text">Я согласен(а) на обработку персональных данных. <!-- TODO: Добавить ссылки на политику конфиденциальности и согласие на обработку персональных данных --></span>
                            </label>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer" id="contacts">
            <div class="container footer__inner">
                <div class="footer__column">
                    <p class="footer__title">Навигация</p>
                    <a class="footer__link" href="#hero">Обо мне</a>
                    <a class="footer__link" href="#specialization">Специализация</a>
                    <a class="footer__link" href="#about">Направления</a>
                </div>

                <div class="footer__column">
                    <p class="footer__title">Разделы</p>
                    <a class="footer__link" href="#results">Результаты работ</a>
                    <a class="footer__link" href="#consultation">Запись</a>
                    <a class="footer__link" href="#contacts">Контакты</a>
                </div>

                <div class="footer__column footer__column--contacts">
                    <p class="footer__title">Контакты</p>
                    <a class="footer__link" href="tel:+70000000000"><!-- TODO: Вставить реальный номер телефона -->+7 (000) 000-00-00</a>
                    <a class="footer__link" href="mailto:doctor@example.com"><!-- TODO: Вставить реальный email -->doctor@example.com</a>
                    <p class="footer__text"><!-- TODO: Вставить реальный адрес -->г. Москва, ул. Примерная, д. 1</p>
                </div>

                <div class="footer__cta">
                    <div class="footer__socials">
                        <a class="footer__social" href="#" aria-label="Telegram">tg</a>
                        <a class="footer__social" href="#" aria-label="WhatsApp">wa</a>
                    </div>
                    <a class="button button--accent button--small" href="#consultation">Записаться</a>
                </div>
            </div>

            <div class="footer__bottom">
                <div class="container footer__bottom-inner">
                    <p class="footer__caption">© 2026 Сайт врача-кардиохирурга</p>
                    <p class="footer__caption"><!-- TODO: Добавить юридические данные и медицинское предупреждение -->Имеются противопоказания. Необходима консультация специалиста.</p>
                </div>
            </div>
        </footer>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>
