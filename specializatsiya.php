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

    <section class="inner-section doctor-page doctor-page--tone-mid specialization-page">
        <div class="container">
            <h2 class="section__title section__title--left">Основные направления</h2>
            <div class="doctor-specialties" aria-label="Основные направления эндоваскулярной хирургии">
                <article class="info-card doctor-specialty">
                    <h3>Коронарное стентирование</h3>
                    <p>с применением ВСУЗИ</p>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Стентирование сонных артерий</h3>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Баллонная ангиопластика и стентирование артерий нижних конечностей</h3>
                    <p>с применением ротационной атерэктомии и ВСУЗИ</p>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Стентирование глубоких вен</h3>
                    <p>посттромботический синдром, синдром Мэй-Тернера, щелкунчика</p>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Эмболизация маточных артерий</h3>
                </article>
                <article class="info-card doctor-specialty">
                    <h3>Эмболизация вен</h3>
                    <p>при варикоцеле и эректильной дисфункции</p>
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
