<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Специализация — Коробков Александр Олегович',
    'description' => 'Направления эндоваскулярной хирургии, по которым доктор ведет клиническую практику.'
];
$pageTitle = 'Специализация';
$pageSubtitle = 'Доктор специализируется на операциях эндоваскулярной хирургии по ключевым артериальным и венозным направлениям.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="section section--tight" id="specialization">
        <div class="container">
            <div class="section__head">
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

    <section class="inner-section doctor-page doctor-page--tone-deep specialization-page">
        <div class="container">
            <article class="info-card doctor-highlight">
                <p class="doctor-highlight__lead">Доктор специализируется на операциях: коронарное стентирование с применением ВСУЗИ, стентирование сонных артерий, баллонная ангиопластика и стентирование артерий нижних конечностей с применением ротационной атерэктомии и ВСУЗИ, стентирование глубоких вен (посттромботический синдром, синдром Мэй-Тернера, щелкунчика), эмболизация маточных артерий, эмболизация вен при варикоцеле и эректильной дисфункции.</p>
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
