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

    <section class="inner-section clinic-page">
        <div class="container">
            <div class="clinic-page__benefits" aria-label="Ключевые преимущества клиники">
                <ul class="clinic-page__list">
                    <li class="clinic-page__list-item">• Аккредитация JCI: первая клиника в РФ, чья безопасность и качество услуг признаны на уровне мировых лидеров здравоохранения.</li>
                    <li class="clinic-page__list-item">• Признание лидерства: абсолютный лидер по качеству и безопасности медицинской деятельности в России.</li>
                    <li class="clinic-page__list-item">• Высшие награды: лауреат Премии Правительства РФ в области качества, призёр европейского конкурса EFQM Awards 2012, победитель фестиваля «Формула жизни-2012» в номинации «Лучшая частная клиника Москвы».</li>
                    <li class="clinic-page__list-item">• Стандартизация процессов: сертифицированы по международному стандарту ISO 9001:2015, что гарантирует эффективность системы менеджмента качества.</li>
                </ul>
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
