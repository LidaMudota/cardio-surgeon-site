<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'О клинике — Коробков Александр Олегович',
    'description' => 'Информация о клинике, лицензии и реквизитах медицинской организации, где ведется прием.'
];
$pageTitle = 'О клинике';
$pageSubtitle = 'Ваше здоровье в руках абсолютных лидеров российской медицины.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>

<main class="inner-page clinic-page">
    <section class="clinic-page__hero" aria-labelledby="clinic-page-title">
        <div class="clinic-page__hero-layout">
            <div class="clinic-page__hero-main">
                <div class="container clinic-page__hero-main-inner">
                    <nav class="breadcrumbs clinic-page__breadcrumbs" aria-label="Хлебные крошки">
                        <a href="index.php">Главная</a>
                        <span>•</span>
                        <span><?= e($pageTitle); ?></span>
                    </nav>
                    <h1 class="clinic-page__title" id="clinic-page-title"><?= e($pageTitle); ?></h1>
                    <p class="clinic-page__lead"><?= e($pageSubtitle); ?></p>
                </div>
            </div>

            <aside class="clinic-page__hero-aside" aria-label="Ключевые преимущества клиники">
                <div class="clinic-page__hero-aside-inner">
                    <ul class="clinic-page__features">
                        <li class="clinic-page__feature">• Аккредитация JCI: первая клиника в РФ, чья безопасность и качество услуг признаны на уровне мировых лидеров здравоохранения.</li>
                        <li class="clinic-page__feature">• Признание лидерства: абсолютный лидер по качеству и безопасности медицинской деятельности в России.</li>
                        <li class="clinic-page__feature">• Высшие награды: лауреат Премии Правительства РФ в области качества, призёр европейского конкурса EFQM Awards 2012, победитель фестиваля «Формула жизни-2012» в номинации «Лучшая частная клиника Москвы».</li>
                        <li class="clinic-page__feature">• Стандартизация процессов: сертифицированы по международному стандарту ISO 9001:2015, что гарантирует эффективность системы менеджмента качества.</li>
                    </ul>
                </div>
            </aside>
        </div>
    </section>

    <section class="inner-section clinic-page__section clinic-page__section--secondary" aria-label="Информационный блок о клинике">
        <div class="container clinic-page__section-shell" role="presentation">
            <p class="clinic-page__section-note">Качество • Безопасность • Лидерство</p>
        </div>
    </section>

<?php
$formTitle = 'Записаться на консультацию';
$formSubtitle = 'Оставьте контакты, и администратор свяжется с вами.';
require __DIR__ . '/includes/form-block.php';
?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
