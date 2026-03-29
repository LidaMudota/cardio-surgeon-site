<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Анализы и обследования перед госпитализацией — Коробков Александр Олегович',
    'description' => 'Перечень анализов и обследований перед госпитализацией, сроки актуальности, комментарии по подготовке и контактная информация.'
];
$pageTitle = 'Анализы и обследования перед госпитализацией';
$pageSubtitle = 'Перед госпитализацией необходимо подготовить перечень обследований с учетом сроков актуальности результатов.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>
<style>
    .red-star {
        color: #ff4d4f;
    }
</style>

    <section class="inner-section doctor-page doctor-page--tone-deep prep-page">
        <div class="container">
            <ol class="prep-checklist" aria-label="Перечень анализов и обследований">
                <li class="info-card prep-checklist__item">
                    <h2>Общий клинический анализ крови с СОЭ и лейкоцитарной формулой</h2>
                    <p><strong>Срок действия:</strong> 14 дней с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Биохимический анализ крови: общий белок, общий билирубин, АЛТ, АСТ, калий, натрий, глюкоза, холестерин, ЛПНП, триглицериды, креатинин, мочевина</h2>
                    <p><strong>Срок действия:</strong> 14 дней с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Коагулограмма: АЧТВ, МНО, протромбин, тромбиновое время, фибриноген</h2>
                    <p><strong>Срок действия:</strong> 14 дней с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Группа крови, резус-фактор</h2>
                    <p><strong>Срок действия:</strong> без срока годности.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Анализ крови на ВИЧ, гепатиты (В и С) и сифилис (при выявлении положительного результата необходима консультация инфекциониста об отсутствии противопоказаний к плановой госпитализации)</h2>
                    <p><strong>Срок действия:</strong> 3 месяца с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Общий анализ мочи</h2>
                    <p><strong>Срок действия:</strong> 14 дней с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>ЭКГ с расшифровкой</h2>
                    <p><strong>Срок действия:</strong> 14 дней с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Флюорография или рентгенография органов грудной клетки или КТ ОГК</h2>
                    <p><strong>Срок действия:</strong> 12 месяцев с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>ЭХО-КГ</h2>
                    <p><strong>Срок действия:</strong> 12 месяцев с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Заключение терапевта о допуске к госпитализации</h2>
                    <p><strong>Срок действия:</strong> 14 дней.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>ЭГДС<span class="red-star">*</span></h2>
                    <p><strong>Срок действия:</strong> 45 дней с момента выполнения.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Холтеровское мониторирование ЭКГ или нагрузочный тест<span class="red-star">*</span></h2>
                    <p><strong>Срок действия:</strong> без срока годности.</p>
                </li>
                <li class="info-card prep-checklist__item">
                    <h2>Заключение аллерголога<span class="red-star">*</span> (при наличии аллергических реакций на йод, новокаин или лидокаин)</h2>
                    <p><strong>Срок действия:</strong> 14 дней.</p>
                </li>
            </ol>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-mid prep-page">
        <div class="container prep-grid-two">
            <article class="info-card prep-note prep-note--star">
                <p><span class="red-star">*</span> - назначаются индивидуально после консультации</p>
            </article>
            <article class="info-card prep-note">
                <p>Перечень обследований может быть изменен в соответствии с клинической необходимостью по результатам консультации.</p>
            </article>
            <article class="info-card prep-note prep-note--accent">
                <p>Все анализы необходимо предоставить в оригинальном виде с печатью медицинского учреждения или подписанные ЭЦП!</p>
            </article>
            <article class="info-card prep-note prep-note--contact">
                <p>Перед госпитализацией Вас попросят прислать скан или фотографию всех обследований на контактный номер <a href="tel:+79166930333">+7 (916) 693 03 33</a></p>
            </article>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-soft prep-page">
        <div class="container">
            <h2 class="section__title section__title--left">Комментарии по подготовке</h2>
            <div class="prep-comments">
                <article class="info-card prep-comments__item">
                    <p>Анализ крови на ВИЧ, гепатиты (В и С) и сифилис рекомендуется выполнить в первую очередь для своевременного оформления консультации инфекциониста в случае положительного результата.</p>
                </article>
                <article class="info-card prep-comments__item">
                    <p>ЭГДС рекомендуется выполнить не позднее, чем за 14 дней до госпитализации. Необходимо для своевременного (за 10 дней до операции) назначения дополнительной терапии по итогам исследования (см. следующую страницу).</p>
                </article>
                <article class="info-card prep-comments__item">
                    <p>Осмотр терапевта рекомендуется пройти осмотр не позже, чем за 5-7 дней до госпитализации. Необходимо для оценки общего состояния здоровья, выявления возможных противопоказаний и своевременной коррекции выявленных отклонений.</p>
                </article>
                <article class="info-card prep-comments__item">
                    <p>Операция может быть перенесена при любых признаках инфекционных болезней (ОРВИ, грипп и др.), а также при повышении температуры тела более 37о С вне зависимости от причины.</p>
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
