<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'Дипломы — эндоваскулярный хирург',
    'description' => 'Документы об образовании, аккредитации и повышении квалификации.'
];
$pageTitle = 'Дипломы';
$pageSubtitle = 'Профессиональные документы: образование, аккредитация и повышение квалификации.';
$extraStylesheets = ['assets/css/diplomas-page.css'];

$featuredDocuments = [
    [
        'title' => 'Диплом с отличием об образовании',
        'type' => 'Диплом',
        'period' => null,
        'image' => 'assets/img/content/honorsDiplomaInEducation.jpg',
    ],
    [
        'title' => 'Периодическая аккредитация',
        'type' => 'Аккредитация по РЭДиЛ',
        'period' => '2022–2027',
        'image' => 'assets/img/content/accreditationREDiL2022to2027.jpg',
    ],
    [
        'title' => 'Выписка из распоряжения',
        'type' => 'Высшая квалификационная категория',
        'period' => '2025',
        'image' => 'assets/img/content/extract_highest_category_MONICA_2025.jpeg',
    ],
];

$archiveDocuments = [
    [
        'title' => 'Эндоваскулярные вмешательства на коронарных артериях',
        'type' => 'Сертификат',
        'period' => null,
        'image' => 'assets/img/content/certRadialAccess0001.jpg',
    ],
    [
        'title' => 'Диагностика и лечение внутренних сонных артерий',
        'type' => 'Сертификат',
        'period' => null,
        'image' => 'assets/img/content/march29Doc4byIScanner.jpg',
    ],
    [
        'title' => 'Образовательный семинар Medtronic',
        'type' => 'Сертификат участия',
        'period' => null,
        'image' => 'assets/img/content/scannedDocument13.jpg',
    ],
    [
        'title' => 'Актуальные вопросы флебологии',
        'type' => 'Сертификат',
        'period' => null,
        'image' => 'assets/img/content/scannedDocument18.jpg',
    ],
    [
        'title' => 'Имплантация порт-систем',
        'type' => 'Повышение квалификации',
        'period' => '2024',
        'image' => 'assets/img/content/advanced_training_ports_301024_GKB_Yudina.jpg',
    ],
    [
        'title' => 'Сертификат по локорегионарным методикам лечения',
        'type' => 'Сертификат',
        'period' => null,
        'image' => 'assets/img/content/march29Doc2byIScanner.jpg',
    ],
    [
        'title' => 'Антеградные рентгенэндобилиарные вмешательства',
        'type' => 'Сертификат',
        'period' => null,
        'image' => 'assets/img/content/scannedDocument16.jpg',
    ],
    [
        'title' => 'Сертификат по КАП и другим видам эмболизатов',
        'type' => 'Сертификат',
        'period' => null,
        'image' => 'assets/img/content/scannedDocument19.jpg',
    ],
];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

<section class="inner-section diplomas-page">
    <div class="container diplomas-page__layout">
        <section class="diplomas-page__featured" aria-labelledby="diplomas-featured-title">
            <div class="diplomas-page__section-head">
                <h2 id="diplomas-featured-title" class="section__title section__title--left">Основные документы</h2>
                <p class="diplomas-page__section-note">Базовые документы, подтверждающие профильное образование и действующий профессиональный статус.</p>
            </div>

            <div class="diplomas-page__featured-grid">
                <?php foreach ($featuredDocuments as $document): ?>
                    <article class="diplomas-page__card diplomas-page__card--featured">
                        <a
                            class="diplomas-page__card-link"
                            href="<?= e($document['image']); ?>"
                            target="_blank"
                            rel="noopener"
                            aria-label="Открыть документ: <?= e($document['title']); ?>"
                        >
                            <figure class="diplomas-page__preview diplomas-page__preview--featured">
                                <img
                                    src="<?= e($document['image']); ?>"
                                    alt="<?= e($document['title']); ?>"
                                    loading="lazy"
                                    decoding="async"
                                    width="1100"
                                    height="780"
                                >
                            </figure>
                            <div class="diplomas-page__card-meta">
                                <p class="diplomas-page__card-type"><?= e($document['type']); ?></p>
                                <h3 class="diplomas-page__card-title"><?= e($document['title']); ?></h3>
                                <?php if (!empty($document['period'])): ?>
                                    <p class="diplomas-page__card-period"><?= e($document['period']); ?></p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="diplomas-page__archive" aria-labelledby="diplomas-archive-title">
            <div class="diplomas-page__section-head">
                <h2 id="diplomas-archive-title" class="section__title section__title--left">Повышение квалификации и сертификаты</h2>
            </div>

            <div class="diplomas-page__archive-grid">
                <?php foreach ($archiveDocuments as $document): ?>
                    <article class="diplomas-page__card">
                        <a
                            class="diplomas-page__card-link"
                            href="<?= e($document['image']); ?>"
                            target="_blank"
                            rel="noopener"
                            aria-label="Открыть документ: <?= e($document['title']); ?>"
                        >
                            <figure class="diplomas-page__preview">
                                <img
                                    src="<?= e($document['image']); ?>"
                                    alt="<?= e($document['title']); ?>"
                                    loading="lazy"
                                    decoding="async"
                                    width="820"
                                    height="620"
                                >
                            </figure>
                            <div class="diplomas-page__card-meta">
                                <p class="diplomas-page__card-type"><?= e($document['type']); ?></p>
                                <h3 class="diplomas-page__card-title"><?= e($document['title']); ?></h3>
                                <?php if (!empty($document['period'])): ?>
                                    <p class="diplomas-page__card-period"><?= e($document['period']); ?></p>
                                <?php endif; ?>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</section>

</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
