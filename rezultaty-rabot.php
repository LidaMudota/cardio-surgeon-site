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
                <h2 class="section__title section__title--left" id="directions-gallery-title">Ключевые направления</h2>
            </div>

            <div class="directions-grid" aria-label="Карточки направлений работы">
                <article
                    class="spec-card spec-card--heart directions-card"
                    data-direction-card
                    data-direction-title="КОРОНАРНОЕ СТЕНТИРОВАНИЕ"
                    data-direction-text="Коронарное стентирование с применением ВСУЗИ помогает восстановить кровоток в сосудах сердца через малоинвазивный доступ и сократить время реабилитации."
                    data-direction-image="assets/img/icons/spec-vascular.svg"
                    data-direction-image-alt="Коронарное стентирование"
                    tabindex="0"
                    role="button"
                    aria-haspopup="dialog"
                >
                    <div class="spec-card__icon directions-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/spec-vascular.svg" alt="">
                    </div>
                    <div class="spec-card__content directions-card__content">
                        <h3 class="spec-card__title">КОРОНАРНОЕ СТЕНТИРОВАНИЕ</h3>
                        <p class="spec-card__text">с применением ВСУЗИ</p>
                        <button class="directions-card__more" type="button" data-direction-open>Подробнее</button>
                    </div>
                </article>

                <article
                    class="spec-card directions-card"
                    data-direction-card
                    data-direction-title="СТЕНТИРОВАНИЕ СОННЫХ АРТЕРИЙ"
                    data-direction-text="Стентирование сонных артерий выполняется для профилактики ишемического инсульта и сохранения стабильного кровоснабжения головного мозга."
                    data-direction-image="assets/img/icons/sonnayaArteriya0.png"
                    data-direction-image-alt="Стентирование сонных артерий"
                    tabindex="0"
                    role="button"
                    aria-haspopup="dialog"
                >
                    <div class="spec-card__icon directions-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/sonnayaArteriya0.png" alt="">
                    </div>
                    <div class="spec-card__content directions-card__content">
                        <h3 class="spec-card__title">СТЕНТИРОВАНИЕ СОННЫХ АРТЕРИЙ</h3>
                        <p class="spec-card__text">стентирование для профилактики инсульта</p>
                        <button class="directions-card__more" type="button" data-direction-open>Подробнее</button>
                    </div>
                </article>

                <article
                    class="spec-card directions-card"
                    data-direction-card
                    data-direction-title="АРТЕРИИ НИЖНИХ КОНЕЧНОСТЕЙ"
                    data-direction-text="Для артерий нижних конечностей применяются ангиопластика баллонами с лекарственным покрытием, стентирование, а также ротационная атерэктомия и ВСУЗИ при необходимости."
                    data-direction-image="assets/img/icons/nijnieKonechnosti3.png"
                    data-direction-image-alt="Лечение артерий нижних конечностей"
                    tabindex="0"
                    role="button"
                    aria-haspopup="dialog"
                >
                    <div class="spec-card__icon directions-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/nijnieKonechnosti3.png" alt="">
                    </div>
                    <div class="spec-card__content directions-card__content">
                        <h3 class="spec-card__title">АРТЕРИИ НИЖНИХ КОНЕЧНОСТЕЙ</h3>
                        <p class="spec-card__text">ангиопластика баллонами с лекарственным покрытием, стентирование с применением ротационной атерэктомии и ВСУЗИ</p>
                        <button class="directions-card__more" type="button" data-direction-open>Подробнее</button>
                    </div>
                </article>

                <article
                    class="spec-card directions-card"
                    data-direction-card
                    data-direction-title="ВЕНОЗНОЕ СТЕНТИРОВАНИЕ"
                    data-direction-text="Эндоваскулярное лечение при синдроме Мэй-Тернера, щелкунчика и посттромботическом синдроме направлено на восстановление венозного оттока и снижение хронических симптомов."
                    data-direction-image="assets/img/icons/stentirovanieVen0.png"
                    data-direction-image-alt="Венозное стентирование"
                    tabindex="0"
                    role="button"
                    aria-haspopup="dialog"
                >
                    <div class="spec-card__icon directions-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/stentirovanieVen0.png" alt="">
                    </div>
                    <div class="spec-card__content directions-card__content">
                        <h3 class="spec-card__title">ВЕНОЗНОЕ СТЕНТИРОВАНИЕ</h3>
                        <p class="spec-card__text">лечение синдрома Мэй-Тернера, щелкунчика и посттромботического синдрома</p>
                        <button class="directions-card__more" type="button" data-direction-open>Подробнее</button>
                    </div>
                </article>

                <article
                    class="spec-card directions-card"
                    data-direction-card
                    data-direction-title="ЭМБОЛИЗАЦИЯ МАТОЧНЫХ АРТЕРИЙ"
                    data-direction-text="Эмболизация маточных артерий — малоинвазивный метод лечения миомы матки с контролируемым перекрытием кровотока в питающих сосудах."
                    data-direction-image="assets/img/icons/spec-uterine-embolization.png"
                    data-direction-image-alt="Эмболизация маточных артерий"
                    tabindex="0"
                    role="button"
                    aria-haspopup="dialog"
                >
                    <div class="spec-card__icon directions-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/spec-uterine-embolization.png" alt="">
                    </div>
                    <div class="spec-card__content directions-card__content">
                        <h3 class="spec-card__title">ЭМБОЛИЗАЦИЯ МАТОЧНЫХ АРТЕРИЙ</h3>
                        <p class="spec-card__text">эндоваскулярное лечение миомы матки</p>
                        <button class="directions-card__more" type="button" data-direction-open>Подробнее</button>
                    </div>
                </article>

                <article
                    class="spec-card directions-card"
                    data-direction-card
                    data-direction-title="ЭМБОЛИЗАЦИЯ ВЕН ПРИ ВАРИКОЦЕЛЕ И ЭРЕКТИЛЬНОЙ ДИСФУНКЦИИ"
                    data-direction-text="Малоинвазивная эмболизация вен используется для лечения варикоцеле и венозно-обусловленной эректильной дисфункции, снижая травматичность вмешательства."
                    data-direction-image="assets/img/icons/spec-varicocele-embolization0.png"
                    data-direction-image-alt="Эмболизация вен"
                    tabindex="0"
                    role="button"
                    aria-haspopup="dialog"
                >
                    <div class="spec-card__icon directions-card__icon" aria-hidden="true">
                        <img src="assets/img/icons/spec-varicocele-embolization0.png" alt="">
                    </div>
                    <div class="spec-card__content directions-card__content">
                        <h3 class="spec-card__title">ЭМБОЛИЗАЦИЯ ВЕН ПРИ ВАРИКОЦЕЛЕ И ЭРЕКТИЛЬНОЙ ДИСФУНКЦИИ</h3>
                        <p class="spec-card__text">малоинвазивное эндоваскулярное лечение венозных нарушений</p>
                        <button class="directions-card__more" type="button" data-direction-open>Подробнее</button>
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
                        <a class="button button--accent direction-modal__cta" href="kontakty.php">Связаться</a>
                    </div>
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
