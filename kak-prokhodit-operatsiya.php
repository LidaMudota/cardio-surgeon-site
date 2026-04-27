<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Как проходит операция — Коробков А. О.',
    'description' => 'Информация о том, как проходит эндоваскулярная операция: этапы, визуализация, анестезия и особенности проведения вмешательства.'
];
$pageTitle = 'Как проходит операция';
$pageSubtitle = '';
$innerPageAttrs = ' id="operation-page"';
$extraStylesheets = ['assets/css/operation-page.css'];
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section operation-page__section operation-page__section--intro">
        <div class="container">
            <div class="operation-page__cards" role="list" aria-label="Этапы проведения операции">
                <article class="info-card operation-page__card" role="listitem">
                    <h2 class="operation-page__card-title">Анестезия и доступ</h2>
                    <p>Эндоваскулярные вмешательства выполняются через точечный прокол под местной анестезией; общий наркоз применяется крайне редко - преимущественно при операциях на полостях сердца, клапанах или аорте.</p>
                    <p>Прокол делается чаще всего на запястье (где обычно слушают пульс) или в паху с применением местного анестетика. Для уменьшения дискомфорта дополнительно может использоваться внутривенная седация (успокоительные препараты), что обеспечивает комфорт пациента на протяжении всего вмешательства.</p>
                </article>

                <article class="info-card operation-page__card" role="listitem">
                    <h2 class="operation-page__card-title">Почему вмешательство безболезненно</h2>
                    <p>Все манипуляции внутри сосудистого русла безболезненны, поскольку внутренняя стенка сосудов не содержит болевых рецепторов.</p>
                </article>

                <article class="info-card operation-page__card" role="listitem">
                    <h2 class="operation-page__card-title">Контроль в рентгеноперационной</h2>
                    <p>Операции выполняются под контролем рентгена в специализированной операционной – рентгеноперационной. При соблюдении всех мер предосторожности лучевая нагрузка при эндоваскулярных операциях минимальна и не вызывает реакции.</p>
                </article>

                <article class="info-card operation-page__card" role="listitem">
                    <h2 class="operation-page__card-title">Диагностический этап</h2>
                    <p>В начале выполняется диагностический этап вмешательства:</p>
                    <p>Чтобы увидеть внутренний просвет сосудов и контролировать ход операции вводится рентгенконтрастное вещество (контраст), содержащее йод. Контраст вводится через специальный катетер. Катетер сперва подводится к сосуду, затем вводится контраст и на экране становится виден внутренний просвет нужного сосуда.</p>
                </article>

                <article class="info-card operation-page__card" role="listitem">
                    <h2 class="operation-page__card-title">Дополнительная визуализация</h2>
                    <p>Иногда используются дополнительные методики, улучшающие визуализацию – такие как внутрисосудистое ультразвуковое исследование, которые позволяют дополнительно оценить зону вмешательства и, в ряде случаев, положительно влияют на результаты эндоваскулярных вмешательств.</p>
                </article>

                <article class="info-card operation-page__card" role="listitem">
                    <h2 class="operation-page__card-title">Этап операции</h2>
                    <p>Когда диагностика закончена, переходят к этапу операции.</p>
                    <p>В зависимости от ситуации может быть выполнена баллонная ангиопластика, стентирование, эмболизация и др.</p>
                    <p>Переход одного этапа в другой пациент чаще всего не ощущает, и все воспринимается как единый процесс.</p>
                </article>

                <article class="info-card operation-page__card" role="listitem">
                    <h2 class="operation-page__card-title">Контакт с пациентом</h2>
                    <p>Ключевое преимущество эндоваскулярных вмешательств - сохранение вербального контакта с пациентом, что позволяет повысить безопасность и обеспечить контроль во время операции.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="inner-section operation-page__section operation-page__section--notice">
        <div class="container">
            <aside class="operation-page__disclaimer" aria-label="Медицинское предупреждение">
                <p>Имеются противопоказания, необходима консультация специалиста</p>
            </aside>
        </div>
    </section>

<?php
$formTitle = 'Связаться';
$formSubtitle = 'Оставьте контакты, и администратор свяжется с вами.';
require __DIR__ . '/includes/form-block.php';
?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
