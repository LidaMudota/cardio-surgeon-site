<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Направления работы — эндоваскулярный хирург',
    'description' => 'Направления работы и подходы врача: аккуратная подача методик, тактики и клинических материалов в профессиональном формате.'
];
$pageTitle = 'Направления работы';
$innerPageAttrs = ' id="work-directions-page"';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section directions-gallery" aria-labelledby="directions-gallery-title">
        <div class="container">
            <div class="section__head section__head--results">
            </div>

            <div class="results-slider-area directions-gallery__slider-wrap">
                <div class="results-slider directions-slider" data-results-slider>
                    <article class="result-card directions-slide" aria-label="Материал 1">
                        <img
                            class="result-card__image directions-slide__image"
                            src="assets/img/content/work.png"
                            alt="Иллюстративный клинический материал по направлению работы"
                            loading="lazy"
                            decoding="async"
                        >
                    </article>

                    <article class="result-card directions-slide" aria-label="Материал 2">
                        <img
                            class="result-card__image directions-slide__image"
                            src="assets/img/content/work0.png"
                            alt="Иллюстративный материал по методике лечения"
                            loading="lazy"
                            decoding="async"
                        >
                    </article>
                </div>

                <div class="results-nav directions-gallery__nav" aria-label="Навигация по материалам">
                    <button class="results-nav__button" type="button" data-results-prev aria-label="Предыдущий материал">
                        <img src="assets/img/icons/results-arrow-prev.svg" alt="">
                    </button>
                    <button class="results-nav__button" type="button" data-results-next aria-label="Следующий материал">
                        <img src="assets/img/icons/results-arrow-next.svg" alt="">
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/includes/form-block.php'; ?>

    <section class="legal-note-section" aria-label="Юридическое примечание">
        <div class="container">
            <div class="legal-note" role="note">
                <p class="legal-note__text">Индивидуальный предприниматель Коробков А.О. не оказывает медицинских услуг. Размещённая на сайте информация носит справочно-информационный характер и не является публичной офертой. Окончательная стоимость медицинских услуг рассчитывается медицинской организацией АО «Медицина» после очной консультации с врачом, исходя из клинической картины и объёма необходимых вмешательств. Для получения точной информации о стоимости необходимой Вам медицинской услуги, пожалуйста, свяжитесь с медицинской организацией напрямую по телефону. Вы также можете обратиться ко мне для организации записи на консультацию к профильному специалисту.</p>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
