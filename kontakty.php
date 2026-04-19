<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Контакты — Коробков Александр Олегович',
    'description' => 'Контакты для записи на консультацию, адрес клиники в Москве и карта проезда.'
];
$pageTitle = 'Контакты';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section contacts-page-hero">
        <div class="container">
            <article class="contacts-page-hero__card info-card">
                <p class="contacts-page-hero__lead">Контактный центр</p>
                <h2 class="contacts-page-hero__title">Свяжитесь удобным для вас способом</h2>
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
                    <p class="contacts-page-item__address"><?= e(clinic_location_data()['address']) ?></p>
                </article>
            </div>
        </div>
    </section>

    <section class="inner-section contacts-page-location">
        <div class="container">
            <div class="contacts-page-location__layout">
                <article class="info-card contacts-page-location__details">
                    <h2 class="contacts-page-location__title">Адрес и карта проезда</h2>
                    <p class="contacts-page-location__address"><?= e(clinic_location_data()['address']) ?></p>
                    <p class="contacts-page-location__text">Для удобства построения маршрута используйте карту.</p>
                </article>

                <div class="location-map contacts-page-location__map" aria-label="Карта расположения клиники">
                    <div class="location-map__top">
                        <div class="location-map__copy">
                            <h3 class="location-map__title">Как нас найти</h3>
                            <p class="location-map__text">Откройте карту, чтобы построить путь из любой точки города.</p>
                        </div>
                        <a class="location-map__action" href="<?= e(clinic_location_route_url()) ?>" target="_blank" rel="noopener noreferrer">Построить маршрут</a>
                    </div>
                    <div class="location-map__frame" aria-label="Карта расположения клиники">
                        <script type="text/plain" data-cookie-category="optional" data-cookie-src="<?= e(clinic_location_constructor_script_url()) ?>"></script>
                            <noscript>Для отображения карты включите JavaScript.</noscript>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
$formTitle = 'Связаться';
$formSubtitle = 'Оставьте контакты, и администратор свяжется с вами.';
require __DIR__ . '/includes/form-block.php';
?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
