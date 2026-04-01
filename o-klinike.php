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
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section clinic-page clinic-hero clinic-page--tone-base">
        <div class="container">
            <article class="info-card clinic-hero__card">
                <p class="clinic-hero__eyebrow">О клинике</p>
                <h2 class="clinic-hero__title">Ваше здоровье в руках абсолютных лидеров российской медицины.</h2>
                <p class="clinic-hero__lead">Ваше здоровье в руках абсолютных лидеров российской медицины.</p>
            </article>
        </div>
    </section>

    <section class="inner-section clinic-page clinic-highlights clinic-page--tone-deep">
        <div class="container">
            <h2 class="section__title section__title--left">Преимущества клиники</h2>

            <ul class="clinic-highlights__list" aria-label="Ключевые преимущества клиники">
                <li class="info-card clinic-highlights__item">
                    <p><span class="clinic-highlights__bullet" aria-hidden="true">•</span> Аккредитация JCI: первая клиника в РФ, чья безопасность и качество услуг признаны на уровне мировых лидеров здравоохранения.</p>
                </li>
                <li class="info-card clinic-highlights__item">
                    <p><span class="clinic-highlights__bullet" aria-hidden="true">•</span> Признание лидерства: абсолютный лидер по качеству и безопасности медицинской деятельности в России.</p>
                </li>
                <li class="info-card clinic-highlights__item">
                    <p><span class="clinic-highlights__bullet" aria-hidden="true">•</span> Высшие награды: лауреат Премии Правительства РФ в области качества, призёр европейского конкурса EFQM Awards 2012, победитель фестиваля «Формула жизни-2012» в номинации «Лучшая частная клиника Москвы».</p>
                </li>
                <li class="info-card clinic-highlights__item">
                    <p><span class="clinic-highlights__bullet" aria-hidden="true">•</span> Стандартизация процессов: сертифицированы по международному стандарту ISO 9001:2015, что гарантирует эффективность системы менеджмента качества.</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="inner-section clinic-page clinic-standards clinic-page--tone-soft">
        <div class="container">
            <article class="clinic-standards__card">
                <h2 class="clinic-standards__title">Качество. Безопасность. Лидерство.</h2>
                <p class="clinic-standards__text">Аккредитация JCI, признание лидерства, высшие награды и стандартизация процессов по ISO 9001:2015 формируют единый стандарт медицинской помощи.</p>
                <p class="clinic-standards__text">Ваше здоровье в руках абсолютных лидеров российской медицины.</p>
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
