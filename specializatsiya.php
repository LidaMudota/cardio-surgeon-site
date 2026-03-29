<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Специализация — Коробков Александр Олегович',
    'description' => 'Основные направления эндоваскулярной хирургии: коронарное и венозное стентирование, ангиопластика, эмболизация.'
];
$pageTitle = 'Специализация';
$pageSubtitle = 'Основные направления эндоваскулярной хирургии, по которым ведется клиническая практика.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section doctor-page doctor-page--tone-deep specialization-page">
        <div class="container">
            <div class="info-card doctor-text">
                <p>На странице собраны основные направления, по которым Александр Олегович выполняет эндоваскулярные вмешательства в ежедневной практике.</p>
            </div>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-mid specialization-page">
        <div class="container">
            <h2 class="section__title section__title--left">Основные направления</h2>
            <div class="doctor-specialties" aria-label="Основные направления эндоваскулярной хирургии">
                <article class="info-card doctor-specialty">
                    <h3>Коронарное стентирование</h3>
                    <p>Коронарное стентирование с применением ВСУЗИ</p>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Сонные артерии</h3>
                    <p>Стентирование сонных артерий</p>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Артерии нижних конечностей</h3>
                    <p>Баллонная ангиопластика и стентирование артерий нижних конечностей с применением ротационной атерэктомии и ВСУЗИ</p>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Глубокие вены</h3>
                    <p>Стентирование глубоких вен (посттромботический синдром, синдром Мэй-Тернера, щелкунчика)</p>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Маточные артерии</h3>
                    <p>Эмболизация маточных артерий</p>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Венозная эмболизация</h3>
                    <p>Эмболизация вен при варикоцеле и эректильной дисфункции</p>
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
