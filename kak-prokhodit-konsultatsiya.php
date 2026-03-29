<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Как проходит консультация — Коробков Александр Олегович',
    'description' => 'Варианты консультации, адрес клиники, предварительная запись и перечень материалов, которые нужно подготовить.'
];
$pageTitle = 'Как проходит консультация';
$pageSubtitle = 'Возможны несколько вариантов консультации: очная и телемедицинская консультация.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section doctor-page doctor-page--tone-deep prep-page">
        <div class="container">
            <h2 class="section__title section__title--left">Возможные варианты консультации</h2>
            <div class="prep-grid-two">
                <article class="info-card prep-topic">
                    <h3>Очная</h3>
                </article>
                <article class="info-card prep-topic">
                    <h3>Телемедицинская консультация</h3>
                    <p>Пришлю ссылку на телемедицинскую консультацию в АО Медицина.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-mid prep-page">
        <div class="container prep-grid-two">
            <article class="info-card prep-note">
                <p>Консультации проводятся в клинике АО «Медицина» по адресу: 125047, г. Москва, 2-й Тверской-Ямской пер, 10.</p>
            </article>
            <article class="info-card prep-note prep-note--accent">
                <p>Необходима предварительная запись по телефону <a href="tel:+79166930333">+7 (916) 693 03 33</a></p>
            </article>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-soft prep-page">
        <div class="container">
            <h2 class="section__title section__title--left">Перед консультацией просьба подготовить</h2>
            <div class="prep-comments">
                <article class="info-card prep-comments__item">
                    <h3>1. Все имеющиеся на руках выписки, обследования и заключения вне зависимости от срока давности и профиля.</h3>
                    <p>Необходимо для всесторонней оценки Вашего здоровья.</p>
                </article>
                <article class="info-card prep-comments__item">
                    <h3>2. Список принимаемых препаратов, их дозы и кратность приема.</h3>
                    <p>Позволит оценить необходимость коррекции уже назначенной терапии.</p>
                </article>
                <article class="info-card prep-comments__item">
                    <h3>3. Записи выполненных ранее исследований и операций (КТ, МРТ, ангиография, коронарография, стентирование и т.д.) на электронном носителе или облачном сервисе.</h3>
                    <p>Позволит детально оценить проведенное обследование, лечение и определиться с дальнейшей тактикой по улучшению Вашего здоровья.</p>
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
