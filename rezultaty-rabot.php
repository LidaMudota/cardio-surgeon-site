<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Направления работы — эндоваскулярный хирург',
    'description' => 'Направления работы и подходы врача: аккуратная подача методик, тактики и клинических материалов в профессиональном формате.'
];
$pageTitle = 'Направления работы';
$pageSubtitle = 'Страница о подходах, методиках и принципах клинической работы врача.';
$innerPageAttrs = ' id="work-directions-page"';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section directions-intro">
        <div class="container two-col">
            <article class="info-card directions-intro__content">
                <h2 class="section__title section__title--left">Подход к направлениям работы</h2>
                <p>В разделе собраны ключевые направления клинической практики и применяемые методики. Материалы структурированы так, чтобы пациенту и коллегам было проще ориентироваться в логике ведения, этапах принятия решений и принципах персонализации тактики.</p>
                <p>Фотоматериалы на странице используются как визуальное сопровождение профессионального контента и помогают аккуратно показать клинический контекст без рекламной подачи.</p>
            </article>

            <aside class="info-card directions-intro__note" aria-label="Формат представления материалов">
                <h3>Формат раздела</h3>
                <ul class="info-list">
                    <li>Нейтральная и профессиональная подача материалов.</li>
                    <li>Описание подходов и методик без агрессивных формулировок.</li>
                    <li>Готовая архитектура для последующего расширения контента.</li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="inner-section directions-gallery" aria-labelledby="directions-gallery-title">
        <div class="container">
            <div class="section__head section__head--results">
                <h2 class="section__title section__title--left" id="directions-gallery-title">Визуальные материалы по направлениям работы</h2>
            </div>

            <div class="results-slider-area directions-gallery__slider-wrap">
                <div class="results-slider directions-slider" data-results-slider>
                    <article class="result-card directions-slide" aria-label="Материал 1">
                        <img
                            class="result-card__image directions-slide__image"
                            src="assets/img/content/result-01.svg"
                            alt="Иллюстративный клинический материал по направлению работы"
                            loading="lazy"
                            decoding="async"
                        >
                    </article>

                    <article class="result-card directions-slide" aria-label="Материал 2">
                        <img
                            class="result-card__image directions-slide__image"
                            src="assets/img/content/result-02.svg"
                            alt="Иллюстративный материал по методике лечения"
                            loading="lazy"
                            decoding="async"
                        >
                    </article>

                    <article class="result-card directions-slide" aria-label="Материал 3">
                        <img
                            class="result-card__image directions-slide__image"
                            src="assets/img/content/result-03.svg"
                            alt="Визуальное сопровождение клинического направления"
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

    <section class="inner-section">
        <div class="container">
            <h2 class="section__title section__title--left">Архитектура раздела для дальнейшего наполнения</h2>
            <div class="inner-grid">
                <article class="info-card">
                    <h3>Направление</h3>
                    <p>Краткое описание клинической задачи и зоны применения метода.</p>
                </article>
                <article class="info-card">
                    <h3>Методика</h3>
                    <p>Объяснение подхода, этапов выполнения и критериев выбора тактики.</p>
                </article>
                <article class="info-card">
                    <h3>Материалы</h3>
                    <p>Фотосопровождение и дополнительные данные для профессиональной навигации по теме.</p>
                </article>
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
