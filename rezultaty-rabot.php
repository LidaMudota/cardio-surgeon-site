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

    <section class="section section--tight" id="specialization" aria-labelledby="directions-gallery-title">
        <div class="container">
            <div class="section__head section__head--results">
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

    <?php require __DIR__ . '/includes/form-block.php'; ?>

</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
