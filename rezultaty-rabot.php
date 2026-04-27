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
                <a class="spec-card spec-card--heart" id="direction-coronary-stenting" href="#direction-coronary-stenting">
                    <div class="spec-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/spec-vascular.svg" alt="">
                    </div>
                    <div class="spec-card__content">
                        <h3 class="spec-card__title">КОРОНАРНОЕ СТЕНТИРОВАНИЕ</h3>
                        <p class="spec-card__text">с применением ВСУЗИ</p>
                    </div>
                </a>

                <a class="spec-card" id="direction-carotid-stenting" href="#direction-carotid-stenting">
                    <div class="spec-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/sonnayaArteriya0.png" alt="">
                    </div>
                    <div class="spec-card__content">
                        <h3 class="spec-card__title">СТЕНТИРОВАНИЕ СОННЫХ АРТЕРИЙ</h3>
                        <p class="spec-card__text">стентирование для профилактики инсульта</p>
                    </div>
                </a>

                <a class="spec-card" id="direction-lower-limb-arteries" href="#direction-lower-limb-arteries">
                    <div class="spec-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/nijnieKonechnosti3.png" alt="">
                    </div>
                    <div class="spec-card__content">
                        <h3 class="spec-card__title">АРТЕРИИ НИЖНИХ КОНЕЧНОСТЕЙ</h3>
                        <p class="spec-card__text">ангиопластика баллонами с лекарственным покрытием, стентирование с применением ротационной атерэктомии и ВСУЗИ</p>
                    </div>
                </a>

                <a class="spec-card" id="direction-venous-stenting" href="#direction-venous-stenting">
                    <div class="spec-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/stentirovanieVen0.png" alt="">
                    </div>
                    <div class="spec-card__content">
                        <h3 class="spec-card__title">ВЕНОЗНОЕ СТЕНТИРОВАНИЕ</h3>
                        <p class="spec-card__text">лечение синдрома Мэй-Тернера, щелкунчика и посттромботического синдрома</p>
                    </div>
                </a>

                <a class="spec-card" id="direction-uterine-artery-embolization" href="#direction-uterine-artery-embolization">
                    <div class="spec-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/spec-uterine-embolization.png" alt="">
                    </div>
                    <div class="spec-card__content">
                        <h3 class="spec-card__title">ЭМБОЛИЗАЦИЯ МАТОЧНЫХ АРТЕРИЙ</h3>
                        <p class="spec-card__text">эндоваскулярное лечение миомы матки</p>
                    </div>
                </a>

                <a class="spec-card" id="direction-varicocele-embolization" href="#direction-varicocele-embolization">
                    <div class="spec-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/spec-varicocele-embolization0.png" alt="">
                    </div>
                    <div class="spec-card__content">
                        <h3 class="spec-card__title">ЭМБОЛИЗАЦИЯ ВЕН ПРИ ВАРИКОЦЕЛЕ И ЭРЕКТИЛЬНОЙ ДИСФУНКЦИИ</h3>
                        <p class="spec-card__text">малоинвазивное эндоваскулярное лечение венозных нарушений</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/includes/form-block.php'; ?>

</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
