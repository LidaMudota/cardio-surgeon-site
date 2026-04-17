<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Анализы и обследования перед госпитализацией — Коробков Александр Олегович',
    'description' => 'Анализы и обследования перед госпитализацией: перечень, комментарии по подготовке, подготовка к операции и обязательные действия пациента.'
];
$pageTitle = 'Анализы и обследования перед госпитализацией';
$pageSubtitle = '';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>
<section class="inner-section doctor-page doctor-page--tone-soft analizy-page">
    <div class="container analizy-page__container">
        <article class="analizy-intro info-card">
            <p class="analizy-intro__text">Имеются противопоказания, необходима консультация специалиста</p>
        </article>

        <section class="analizy-section" aria-label="Перечень анализов и обследований перед госпитализацией">
            <ol class="analizy-list" aria-label="Перечень анализов и обследований перед госпитализацией">
                <li class="analizy-list__item info-card">Общий клинический анализ крови с СОЭ и лейкоцитарной формулой (14 дней с момента выполнения).</li>
                <li class="analizy-list__item info-card">Биохимический анализ крови: общий белок, общий билирубин, АЛТ, АСТ, калий, натрий, глюкоза, холестерин, ЛПНП, триглицериды, креатинин, мочевина (14 дней с момента выполнения).</li>
                <li class="analizy-list__item info-card">Коагулограмма: АЧТВ, МНО, протромбин, тромбиновое время, фибриноген (14 дней с момента выполнения). </li>
                <li class="analizy-list__item info-card">Группа крови, резус-фактор (без срока годности).</li>
                <li class="analizy-list__item info-card">Анализ крови на ВИЧ, гепатиты (В и С) и сифилис (при выявлении положительного результата необходима консультация инфекциониста об отсутствии противопоказаний к плановой госпитализации) (3 месяца с момента выполнения).</li>
                <li class="analizy-list__item info-card">Общий анализ мочи (14 дней с момента выполнения).</li>
                <li class="analizy-list__item info-card">ЭКГ с расшифровкой (14 дней с момента выполнения).</li>
                <li class="analizy-list__item info-card">Флюорография или рентгенография органов грудной клетки, или КТ ОГК (12 месяцев с момента выполнения). </li>
                <li class="analizy-list__item info-card">ЭХО-КГ (12 месяцев с момента выполнения).</li>
                <li class="analizy-list__item info-card">Заключение терапевта о допуске к госпитализации (14 дней).</li>
                <li class="analizy-list__item info-card">ЭГДС (45 дней с момента выполнения).</li>
                <li class="analizy-list__item info-card">Холтеровское мониторирование ЭКГ или нагрузочный тест (без срока годности).</li>
                <li class="analizy-list__item info-card">Заключение аллерголога (при наличии аллергических реакций на йод, новокаин или лидокаин) (14 дней).</li>
            </ol>
        </section>

        <section class="analizy-section" aria-label="Примечание">
            <div class="analizy-notes info-card">
                <p>Перечень обследований может быть изменен в соответствии с клинической необходимостью по результатам консультации.</p>
            </div>
        </section>

    </div>
</section>

<?php
$formTitle = 'Связаться';
$formSubtitle = 'Оставьте контакты, и администратор свяжется с вами.';
require __DIR__ . '/includes/form-block.php';
?>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
