<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Контакты — Коробков Александр Олегович',
    'description' => 'Контакты для записи на консультацию, адрес клиники в Москве и карта проезда.'
];
$pageTitle = 'Контакты';
$pageSubtitle = 'Оперативная связь по вопросам консультации и лечения. Ниже представлены актуальные контакты и адрес приема.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section contacts-page-hero">
        <div class="container">
            <article class="contacts-page-hero__card info-card">
                <p class="contacts-page-hero__lead">Контактный центр</p>
                <h2 class="contacts-page-hero__title">Свяжитесь удобным для вас способом</h2>
                <p class="contacts-page-hero__text">Все каналы связи, размещенные на странице, актуальны для первичного обращения, уточнения организационных вопросов и записи на консультацию.</p>
            </article>
        </div>
    </section>

    <section class="inner-section contacts-page-contacts">
        <div class="container">
            <div class="contacts-page-grid" aria-label="Контактные данные">
                <article class="info-card contacts-page-item">
                    <h2 class="contacts-page-item__title">Телефон</h2>
                    <a class="contacts-page-item__link" href="tel:+79166930333">+7916 693 03 33</a>
                </article>

                <article class="info-card contacts-page-item">
                    <h2 class="contacts-page-item__title">Электронная почта</h2>
                    <a class="contacts-page-item__link" href="mailto:aokorobkov@yandex.ru">aokorobkov@yandex.ru</a>
                </article>

                <article class="info-card contacts-page-item">
                    <h2 class="contacts-page-item__title">Telegram</h2>
                    <a class="contacts-page-item__link" href="https://t.me/korobkovdr" target="_blank" rel="noopener noreferrer">T.me/korobkovdr</a>
                </article>

                <article class="info-card contacts-page-item contacts-page-item--wide">
                    <h2 class="contacts-page-item__title">Max</h2>
                    <a class="contacts-page-item__link contacts-page-item__link--long" href="https://max.ru/u/f9LHodD0cOLWF6kfyPzTNz7iR2jJ-pAWTKwQgZP74NvgrrP-LNTwd7H9_Kw" target="_blank" rel="noopener noreferrer">https://max.ru/u/f9LHodD0cOLWF6kfyPzTNz7iR2jJ-pAWTKwQgZP74NvgrrP-LNTwd7H9_Kw</a>
                </article>

                <article class="info-card contacts-page-item contacts-page-item--wide">
                    <h2 class="contacts-page-item__title">Адрес</h2>
                    <p class="contacts-page-item__address">125047, г. Москва, 2-й Тверской-Ямской пер., 10</p>
                </article>
            </div>
        </div>
    </section>

    <section class="inner-section contacts-page-location">
        <div class="container">
            <div class="contacts-page-location__layout">
                <article class="info-card contacts-page-location__details">
                    <h2 class="contacts-page-location__title">Адрес и карта проезда</h2>
                    <p class="contacts-page-location__address">125047, г. Москва, 2-й Тверской-Ямской пер., 10</p>
                    <p class="contacts-page-location__text">Для удобства построения маршрута используйте карту.</p>
                </article>

                <div class="location-map contacts-page-location__map" aria-label="Карта расположения клиники">
                    <div class="location-map__top">
                        <h3 class="location-map__title">Как нас найти</h3>
                        <p class="location-map__text">Откройте карту, чтобы построить путь из любой точки города.</p>
                    </div>
                    <div class="location-map__frame" aria-label="Карта расположения клиники">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A47f7c01e0e45c8af8c3b6758b11905f24df3bf364d201d50108de2cc9d03153e&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="inner-section contacts-page-note">
        <div class="container">
            <article class="info-card contacts-page-note__card">
                <p class="contacts-page-note__text">Ответ на обращения в мессенджерах и по электронной почте предоставляется в рабочем порядке. При необходимости срочной связи используйте телефон.</p>
            </article>
        </div>
    </section>

<?php
$formTitle = 'Записаться на консультацию';
$formSubtitle = 'Оставьте контакты, и администратор свяжется с вами.';
require __DIR__ . '/includes/form-block.php';
?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
