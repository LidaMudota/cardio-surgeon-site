<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'О клинике — Коробков Александр Олегович',
    'description' => 'Информация о клинике, лицензии и реквизитах медицинской организации, где ведется прием.'
];
$pageTitle = 'О клинике';
$pageSubtitle = 'Информация о месте приёма, условиях и официальных данных клиники.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section doctor-page doctor-page--tone-deep clinic-page">
        <div class="container">
            <div class="info-card doctor-text">
                <p>Прием и лечение проводятся на базе клиники с действующей лицензией и организованной инфраструктурой для эндоваскулярных вмешательств.</p>
            </div>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-base clinic-page">
        <div class="container">
            <div class="info-card doctor-clinic__card">
                <h2 class="section__title section__title--left">Данные по клинике</h2>
                <p>Сайт клиники: <a href="https://www.medicina.ru/" target="_blank" rel="noopener noreferrer">medicina.ru</a></p>
                <p>Лицензия Л041-00110-77/00363409. Срок действия: бессрочная.</p>
                <p>Дата создания документа: 16.03.2018.</p>
                <p>Документ изменён: 09.02.2026.</p>
            </div>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-soft clinic-page">
        <div class="container">
            <article class="doctor-highlight">
                <p class="doctor-highlight__lead">Подробная информация о враче, профессиональном вкладе и опыте доступна на странице <a href="o-vrache.php">«О враче»</a>.</p>
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
