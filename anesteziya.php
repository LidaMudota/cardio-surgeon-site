<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Анестезия — Коробков Александр Олегович',
    'description' => 'Информация об анестезии при эндоваскулярных вмешательствах.'
];
$pageTitle = 'Анестезия';
$pageSubtitle = 'Эндоваскулярные вмешательства выполняются через точечный прокол под местной анестезией; общий наркоз применяется крайне редко — преимущественно при операциях на полостях сердца, клапанах или аорте.';
$innerPageAttrs = ' data-page="anesthesia"';
$extraStylesheets = ['assets/css/anesteziya.css'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section doctor-page doctor-page--tone-deep anesthesia-page" aria-label="Страница об анестезии">
        <div class="container">
            <article class="anesthesia-page__layout" aria-label="Информация об анестезии во время эндоваскулярного вмешательства">
                <section class="anesthesia-page__block anesthesia-page__block--main" aria-labelledby="anesthesia-main-heading">
                    <h2 id="anesthesia-main-heading" class="anesthesia-page__heading">Как проходит обезболивание</h2>
                    <p class="anesthesia-page__text">В области пункции (чаще всего лучевой или бедренной артерии) вводится местный анестетик. Для уменьшения дискомфорта на этапе инфильтрационной анестезии дополнительно используется внутривенная седация (успокоительные препараты), что обеспечивает комфорт пациента на протяжении всего вмешательства.</p>
                </section>

                <section class="anesthesia-page__block anesthesia-page__block--accent" aria-labelledby="anesthesia-painless-heading">
                    <h2 id="anesthesia-painless-heading" class="anesthesia-page__heading">Безболезненность вмешательства</h2>
                    <p class="anesthesia-page__text">Все манипуляции внутри сосудистого русла безболезненны, поскольку внутренняя стенка сосудов не содержит болевых рецепторов.</p>
                </section>

                <section class="anesthesia-page__block anesthesia-page__block--safety" aria-labelledby="anesthesia-safety-heading">
                    <h2 id="anesthesia-safety-heading" class="anesthesia-page__heading">Контроль и безопасность во время операции</h2>
                    <p class="anesthesia-page__text">Ключевое преимущество эндоваскулярных вмешательств — сохранение вербального контакта с пациентом, что позволяет повысить безопасность и обеспечить контроль во время операции.</p>
                </section>

                <section class="anesthesia-page__block anesthesia-page__block--final" aria-labelledby="anesthesia-final-heading">
                    <h2 id="anesthesia-final-heading" class="anesthesia-page__heading">Итог</h2>
                    <p class="anesthesia-page__text">Оптимальный вариант анестезии определяется индивидуально на консультации.</p>
                </section>
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
