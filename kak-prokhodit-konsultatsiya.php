<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Как проходит консультация — Коробков Александр Олегович',
    'description' => 'Варианты консультации, адрес клиники, предварительная запись и перечень материалов, которые нужно подготовить.'
];
$pageTitle = 'Как проходит консультация';
$pageSubtitle = 'Возможны несколько вариантов консультации:';
$extraStylesheets = ['assets/css/consultation-page.css'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section doctor-page doctor-page--tone-deep consultation-page__section consultation-page__section--overview">
        <div class="container consultation-page__overview-grid">
            <article class="info-card consultation-page__overview-content" aria-labelledby="consultation-options-title">
                <h2 id="consultation-options-title" class="section__title section__title--left consultation-page__title">Возможны несколько вариантов консультации:</h2>
                <ol class="consultation-page__options-list" aria-label="Варианты консультации">
                    <li class="consultation-page__options-item">Очная.</li>
                    <li class="consultation-page__options-item">Телемедицинская.</li>
                </ol>
            </article>

            <aside class="consultation-page__photo-panel" aria-label="Фото врача">
                <div class="consultation-page__photo-shell">
                    <!-- Вставьте фото врача в тег <img> внутри этого контейнера -->
                    <div class="consultation-page__photo-placeholder" role="img" aria-label="Место для фото врача"></div>
                </div>
            </aside>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-mid consultation-page__section consultation-page__section--details">
        <div class="container">
            <article class="info-card consultation-page__details-card" aria-label="Адрес клиники и предварительная запись">
                <p class="consultation-page__details-text">Консультации проводятся в клинике АО «Медицина» по адресу: 125047, г. Москва, 2-й Тверской-Ямской пер., 10.</p>
                <p class="consultation-page__details-text">Необходима предварительная запись по телефону: <a href="tel:+79166930333">+7 (916) 693-03-33</a>.</p>
            </article>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-soft consultation-page__section consultation-page__section--prep">
        <div class="container">
            <h2 class="section__title section__title--left consultation-page__title">Перед консультацией просьба подготовить:</h2>

            <div class="consultation-page__prep-list" role="list" aria-label="Материалы перед консультацией">
                <article class="info-card consultation-page__prep-item" role="listitem">
                    <span class="consultation-page__prep-number" aria-hidden="true">1.</span>
                    <p class="consultation-page__prep-main">Все имеющиеся на руках выписки, обследования и заключения вне зависимости от срока давности и профиля.</p>
                    <p class="consultation-page__prep-note">Необходимо для всесторонней оценки Вашего здоровья.</p>
                </article>

                <article class="info-card consultation-page__prep-item" role="listitem">
                    <span class="consultation-page__prep-number" aria-hidden="true">2.</span>
                    <p class="consultation-page__prep-main">Список принимаемых препаратов, их дозы и кратность приёма.</p>
                    <p class="consultation-page__prep-note">Позволит оценить необходимость коррекции уже назначенной терапии.</p>
                </article>

                <article class="info-card consultation-page__prep-item" role="listitem">
                    <span class="consultation-page__prep-number" aria-hidden="true">3.</span>
                    <p class="consultation-page__prep-main">Записи выполненных ранее исследований и операций (КТ, МРТ, ангиография, коронарография, стентирование и т. д.) на электронном носителе или в облачном сервисе.</p>
                    <p class="consultation-page__prep-note">Позволит детально оценить проведённое обследование, лечение и определиться с дальнейшей тактикой по улучшению Вашего здоровья.</p>
                </article>
            </div>
        </div>
    </section>

<?php
$formTitle = 'Записаться на консультацию';
$formSubtitle = 'Оставьте контакты, и администратор свяжется с вами.';
require __DIR__ . '/includes/form-block.php';
?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
