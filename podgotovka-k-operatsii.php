<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Подготовка к операции — Коробков Александр Олегович',
    'description' => 'План лекарственной терапии, документы для госпитализации, личные вещи и обязательные рекомендации перед операцией.'
];
$pageTitle = 'Подготовка к операции';
$pageSubtitle = 'Перед госпитализацией необходимо подготовить лекарственную терапию, документы и личные вещи в соответствии с рекомендациями.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section doctor-page doctor-page--tone-deep prep-page">
        <div class="container prep-main-grid">
            <article class="info-card prep-topic">
                <h2>План лекарственной терапии перед госпитализацией</h2>
                <p class="prep-topic__lead">конкретные наименования, дозировки и наименование препаратов будут назначены после консультации</p>
                <div class="prep-subpoints">
                    <div class="prep-subpoint">
                        <h3>А. Перед ЭГДС</h3>
                        <p>Начать за 7-10 дней до ЭГДС, профилактика эрозивно-язвенных изменений ЖКТ: гастропротекторная терапия.</p>
                    </div>
                    <div class="prep-subpoint">
                        <h3>Б. После ЭГДС</h3>
                        <p>Начать за 7 дней до госпитализации и продолжить принимать до поступления в клинику: дополнительная антиагрегантная (кроверазжижающая) терапия.</p>
                    </div>
                    <div class="prep-subpoint">
                        <h3>В. Продолжить приём ранее назначенных препаратов</h3>
                        <p>Продолжить приём ранее назначенных препаратов по имеющимся заболеваниям.</p>
                    </div>
                </div>
            </article>

            <article class="info-card prep-topic">
                <h2>Необходимые документы для госпитализации</h2>
                <p class="prep-topic__lead">оригиналы</p>
                <ul class="prep-bullets">
                    <li>паспорт РФ</li>
                    <li>СНИЛС</li>
                    <li>полис ОМС</li>
                    <li>всю имеющуюся медицинскую документацию: выписки из стационаров, консультативные заключения, результаты обследований.</li>
                </ul>
                <div class="prep-subblock">
                    <h3>При госптилазиции по ОМС</h3>
                    <ul class="prep-bullets">
                        <li>направление на госпитализацию в АО Медицина (форма 057/у) из поликлиники по м/ж</li>
                        <li>медицинская справка формы 027/у – выписка из медицинской карты амбулаторного пациента</li>
                    </ul>
                </div>
            </article>

            <article class="info-card prep-topic">
                <h2>Личные вещи</h2>
                <p>В палате Вам будет предоставлен халат, тапочки, туалетные принадлежности – мыло, шампунь, зубная щетка, зубная паста, шапочка для душа.</p>
                <ul class="prep-bullets">
                    <li>Возьмите с собой необходимую Вам одежду.</li>
                    <li>Возьмите запас принимаемых Вами лекарств в расчете на срок госпитализации.</li>
                </ul>
            </article>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-mid prep-page">
        <div class="container prep-warnings">
            <article class="info-card prep-warning prep-warning--major">
                <p>ОБЯЗАТЕЛЬНО: утром перед операцией принять душ и выбрить области запястий на обеих руках, а также паховую область с обеих сторон: выше (10см) и ниже (10см) паховой складки.</p>
            </article>
            <article class="info-card prep-warning">
                <p>В день госпитализации прибыть в клинику натощак (можно ужинать накануне вечером, но НЕ завтракать). Утреннюю терапию обязательно принять, запив небольшим количеством воды.</p>
            </article>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-soft prep-page">
        <div class="container">
            <article class="info-card prep-note prep-note--contact">
                <p>По всем возникшим вопросам обращайтесь по контактному телефону <a href="tel:+79166930333">+7 (916) 693 03 33</a></p>
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
