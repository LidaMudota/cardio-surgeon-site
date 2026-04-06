<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'О враче — Коробков Александр Олегович',
    'description' => 'Эндоваскулярный хирург Коробков Александр Олегович: опыт, специализация, профессиональный вклад и клиническая практика.'
];
$pageTitle = 'О враче';
$pageSubtitle = 'Коробков Александр Олегович — эндоваскулярный хирург, 16 лет клинической практики, врач высшей квалифицированной категории.';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section doctor-page doctor-intro">
        <div class="container doctor-intro__grid">
            <div class="doctor-intro__visual">
                <img src="assets/img/content/fotoVracha.png" alt="Коробков Александр Олегович" class="doctor-intro__image">
            </div>

            <div class="doctor-intro__content info-card doctor-intro__story" aria-label="Личный путь врача">
                <p>Моё детство прошло в Байконуре — городе, где к точности и ответственности привыкают с ранних лет. Вместо дворовых игр я выбирал учебники биологии и химии, готовясь к всероссийским олимпиадам. А вечерами — долгие разговоры с отцом, военным врачом. Он учил главному: диагноз должен быть безупречным, а лечение — направленным на человека, а не на симптом. Эти уроки стали фундаментом.</p>
                <p>Юношеская наивность, с которой я когда-то мечтал о хирургии, быстро сменилась расчётливостью и дисциплиной. Сила воли для меня — не врождённый дар, а привычка, которую я воспитывал каждый день. Она привела меня в лучший медицинский университет Москвы, на бюджет, который я окончил с отличием, а затем — в ординатуру и в операционную, где за сотнями часов работы стоит одно желание: вернуть человеку здоровье и радость жизни.</p>
                <p>Проработав в ведущих клиниках столицы более 14 лет, неизменным для себя считаю три вещи: святость человеческой жизни, здоровье, которое помогает вернуть хирургия, и стремление оставить после себя доброе имя и достойное наследие.</p>
            </div>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-mid doctor-profile">
        <div class="container">
            <h2 class="section__title section__title--left">Профессиональный профиль</h2>
            <article class="info-card doctor-profile__card">
                <p class="doctor-intro__label">Эндоваскулярный хирург</p>
                <h3 class="doctor-intro__name doctor-profile__name">Коробков Александр Олегович</h3>
                <p class="doctor-intro__lead">Врач высшей квалификационной категории, соискатель ученой степени кандидата медицинских наук, 16 лет клинической практики.</p>

                <ul class="doctor-facts" aria-label="Ключевые факты о враче">
                    <li class="doctor-facts__item">16 лет клинической практики</li>
                    <li class="doctor-facts__item">Врач высшей квалификационной категории</li>
                    <li class="doctor-facts__item">Соискатель ученой степени кандидата медицинских наук</li>
                    <li class="doctor-facts__item">Спикер профильных конгрессов, проводит обучение хирургов</li>
                </ul>
            </article>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-deep">
        <div class="container">
            <h2 class="section__title section__title--left">О враче</h2>
            <div class="info-card doctor-text">
                <p>Коробков Александр Олегович — эндоваскулярный хирург, 16 лет клинической практики, врач высшей квалифицированной категории, соискатель ученой степени кандидата медицинских наук в ФГБНУ «РНЦХ им. акад. Б.В. Петровского».</p>
                <p>В 2010 году с отличием закончил бюджетную форму обучения в ММА им. И.М. Сеченова. В 2012 году был первым выпускником в стране ординатуры по специальности «рентгенэндоваскулярные диагностика и лечение» на базе ФГБНУ «РНЦХ им. акад. Б.В. Петровского».</p>
                <p>На базе ФГАУ "НМИЦ ЛРЦ" Минздрава России при участии Коробкова Александра Олеговича были разработаны и утверждены Министерством здравоохранения РФ к практическому применению 7 протоколов клинических апробаций. Имеет Благодарность Министра здравоохранения Российской Федерации (2017 г).</p>
            </div>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-soft">
        <div class="container">
            <h2 class="section__title section__title--left">Экспертная деятельность</h2>
            <article class="doctor-highlight">
                <p class="doctor-highlight__lead">Сегодня Александр Олегович выступает спикером на профильных конгрессах по эндоваскулярной хирургии в России и проводит обучение хирургов.</p>
            </article>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-mid">
        <div class="container">
            <h2 class="section__title section__title--left">Связанные разделы</h2>
            <div class="page-link-cards">
                <article class="info-card page-link-card">
                    <h3>Основные направления</h3>
                    <p>Подробный перечень направлений эндоваскулярной хирургии вынесен на отдельную страницу специализации.</p>
                    <a href="specializatsiya.php" class="button button--ghost">Подробнее</a>
                </article>
                <article class="info-card page-link-card">
                    <h3>Данные по клинике</h3>
                    <p>Информация о сайте клиники, лицензии и реквизитах доступна на странице «О клинике».</p>
                    <a href="o-klinike.php" class="button button--ghost">Подробнее</a>
                </article>
            </div>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-elevated">
        <div class="container">
            <h2 class="section__title section__title--left">Профессиональный вклад</h2>
            <div class="doctor-contribution">
                <article class="info-card doctor-contribution__item">
                    <h3>Развитие эндоваскулярных направлений</h3>
                    <p>Александр Олегович находится у истоков венозного стентирования и стентирования сонных артерий.</p>
                </article>
                <article class="info-card doctor-contribution__item">
                    <h3>Инструменты для пластической хирургии</h3>
                    <p>Внедрил в работу ряд уникальных инструментов для липосакции, успешно применяемых в пластической хирургии.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-deep">
        <div class="container">
            <h2 class="section__title section__title--left">Опыт и образование</h2>

            <div class="doctor-birth info-card">
                <h3>Дата и место рождения</h3>
                <p>06.11.1986 — г. Улан-Батор.</p>
                <p>Коробков Александр — российский эндоваскулярный хирург.</p>
            </div>

            <ol class="doctor-timeline" aria-label="Хронология опыта и образования">
                <li class="doctor-timeline__item info-card">
                    <span class="doctor-timeline__period">2025 — по настоящее время</span>
                    <p><a href="https://www.medicina.ru/nashi-vrachi/korobkov-aleksandr-olegovich/" target="_blank" rel="noopener noreferrer">Клиника АО «Медицина»</a>, эндоваскулярный хирург.</p>
                </li>
                <li class="doctor-timeline__item info-card">
                    <span class="doctor-timeline__period">2025 — по настоящее время</span>
                    <p>Соискатель ученой степени кандидата медицинских наук в ФГБНУ «РНЦХ им. акад. Б.В. Петровского».</p>
                </li>
                <li class="doctor-timeline__item info-card">
                    <span class="doctor-timeline__period">2023 — 2025</span>
                    <p>Клиническая больница в Отрадном АО «ГК МЕДСИ», заведующий дневным стационаром.</p>
                </li>
                <li class="doctor-timeline__item info-card">
                    <span class="doctor-timeline__period">2020 — 2023</span>
                    <p>Клиническая больница в Отрадном АО «ГК МЕДСИ», врач по рентгенэндоваскулярным диагностике и лечению.</p>
                </li>
                <li class="doctor-timeline__item info-card">
                    <span class="doctor-timeline__period">2012 — 2020</span>
                    <p>ФГАУ «НМИЦ ЛРЦ» Минздрава России, врач по рентгенэндоваскулярным диагностике и лечению.</p>
                </li>
                <li class="doctor-timeline__item info-card">
                    <span class="doctor-timeline__period">2010 — 2012</span>
                    <p>Ординатура по специальности «рентгенэндоваскулярные диагностика и лечение» на базе Российского научного центра хирургии им. Б. В. Петровского РАМН.</p>
                </li>
                <li class="doctor-timeline__item info-card">
                    <span class="doctor-timeline__period">2010</span>
                    <p>Московская медицинская академия им. И. М. Сеченова (диплом с отличием).</p>
                </li>
            </ol>
        </div>
    </section>

    <section class="inner-section doctor-page doctor-page--tone-soft">
        <div class="container">
            <h2 class="section__title section__title--left">Дипломы и сертификаты</h2>
            <article class="doctor-docs-cta" aria-label="Переход к странице дипломов и сертификатов">
                <div class="doctor-docs-cta__content">
                    <p class="doctor-docs-cta__eyebrow">Проверяемая профессиональная база</p>
                    <p class="doctor-docs-cta__title">Все дипломы и сертификаты врача собраны на отдельной странице в удобном формате для просмотра.</p>
                    <p class="doctor-docs-cta__support">Документы подтверждают профильную подготовку, повышение квалификации и допуски к клинической практике.</p>
                    <p class="doctor-docs-cta__support">Откройте раздел, чтобы ознакомиться с материалами полностью.</p>
                </div>
                <div class="doctor-docs-cta__action">
                    <a href="diplomy.php" class="button doctor-docs-cta__button">Смотреть дипломы</a>
                </div>
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
