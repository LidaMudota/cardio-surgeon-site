<?php
require __DIR__ . '/includes/init.php';

$reviewsPageData = [
    'summary' => [
        'average_rating' => '4.9',
        'total_reviews' => '126',
        'label' => 'Сводные данные из отзывов пациентов на независимых площадках.',
        'updated_at' => 'Обновлено: март 2026',
        'distribution' => [
            ['stars' => 5, 'count' => 112],
            ['stars' => 4, 'count' => 10],
            ['stars' => 3, 'count' => 3],
            ['stars' => 2, 'count' => 1],
            ['stars' => 1, 'count' => 0],
        ],
    ],
    'sources' => [
        [
            'name' => 'ПроДокторов',
            'rating' => '4.9',
            'reviews' => '84',
            'url' => 'https://prodoctorov.ru/',
            'link_label' => 'Смотреть на сайте',
        ],
        [
            'name' => 'НаПоправку',
            'rating' => '4.8',
            'reviews' => '27',
            'url' => 'https://napopravku.ru/',
            'link_label' => 'Смотреть на сайте',
        ],
        [
            'name' => 'Сайт клиники',
            'rating' => '4.9',
            'reviews' => '15',
            'url' => 'https://www.medicina.ru/',
            'link_label' => 'Смотреть на сайте',
        ],
    ],
    'featured_reviews' => [
        [
            'author' => 'Пациент А.',
            'date' => '12.03.2026',
            'rating' => 5,
            'title' => 'Консультация и план лечения',
            'excerpt' => 'Текст избранного отзыва №1. Замените этот фрагмент на реальный анонс отзыва пациента.',
            'source_name' => 'ПроДокторов',
            'source_url' => 'https://prodoctorov.ru/',
            'verified_text' => 'Отзыв опубликован на внешней площадке.',
        ],
        [
            'author' => 'Пациент Б.',
            'date' => '01.03.2026',
            'rating' => 5,
            'title' => 'Операция и сопровождение',
            'excerpt' => 'Текст избранного отзыва №2. Здесь можно разместить краткий фрагмент с ключевыми впечатлениями.',
            'source_name' => 'НаПоправку',
            'source_url' => 'https://napopravku.ru/',
            'verified_text' => 'Переход по ссылке ведёт к источнику публикации.',
        ],
        [
            'author' => 'Пациент В.',
            'date' => '18.02.2026',
            'rating' => 5,
            'title' => 'Внимательный подход',
            'excerpt' => 'Текст избранного отзыва №3. Замените на ваш финальный текст после согласования контента.',
            'source_name' => 'Сайт клиники',
            'source_url' => 'https://www.medicina.ru/',
            'verified_text' => 'Источник указан рядом с каждым отзывом.',
        ],
    ],
    'categories' => ['Консультация', 'Операция', 'Послеоперационное сопровождение', 'Внимательность', 'Профессионализм'],
    'reviews' => [
        [
            'author' => 'Пациент Г.',
            'date' => '27.02.2026',
            'rating' => 5,
            'title' => 'Понятная консультация перед лечением',
            'text' => 'Текст полного отзыва №1. Замените этот блок на реальный отзыв пациента. Структура карточки уже готова для ручного редактирования.',
            'source_name' => 'ПроДокторов',
            'source_url' => 'https://prodoctorov.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Консультация', 'Профессионализм'],
            'verified_text' => 'Оригинал отзыва доступен на независимой площадке.',
            'visit_period' => 'Период обращения: февраль 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент Д.',
            'date' => '09.02.2026',
            'rating' => 5,
            'title' => 'Комфортное послеоперационное сопровождение',
            'text' => 'Текст полного отзыва №2. Добавьте реальную историю пациента: как проходило наблюдение, коммуникация и рекомендации после процедуры.',
            'source_name' => 'НаПоправку',
            'source_url' => 'https://napopravku.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Послеоперационное сопровождение', 'Внимательность'],
            'verified_text' => 'Ссылка ведёт на страницу с подтверждением публикации.',
            'visit_period' => 'Период обращения: январь 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент Е.',
            'date' => '22.01.2026',
            'rating' => 4,
            'title' => 'Подробные ответы на вопросы',
            'text' => 'Текст полного отзыва №3. Это место для отзыва о коммуникации, внимании к деталям и прозрачности рекомендаций.',
            'source_name' => 'Сайт клиники',
            'source_url' => 'https://www.medicina.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Консультация', 'Внимательность'],
            'verified_text' => 'Проверьте отзыв на внешнем ресурсе по кнопке.',
            'visit_period' => 'Период обращения: декабрь 2025',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент Ж.',
            'date' => '11.01.2026',
            'rating' => 5,
            'title' => 'Организованность и профессиональный подход',
            'text' => 'Текст полного отзыва №4. Заполните эту секцию после получения разрешённого текста от пациента или площадки.',
            'source_name' => 'ПроДокторов',
            'source_url' => 'https://prodoctorov.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Операция', 'Профессионализм'],
            'verified_text' => 'Отзыв подтверждается ссылкой на первоисточник.',
            'visit_period' => 'Период обращения: декабрь 2025',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
    ],
];

$totalDistributionCount = array_sum(array_map(static fn($item) => (int) ($item['count'] ?? 0), $reviewsPageData['summary']['distribution']));

$meta = [
    'title' => 'Отзывы — кардиохирург',
    'description' => 'Отзывы пациентов о консультациях и лечении с подтверждением на независимых внешних площадках.'
];
$pageTitle = 'Отзывы';
$pageSubtitle = 'На странице собраны отзывы пациентов из независимых источников. У каждого материала есть ссылка на внешний сайт для самостоятельной проверки.';
$innerPageAttrs = ' data-page="reviews"';
$extraStylesheets = ['assets/css/reviews.css'];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

    <section class="inner-section reviews-page__intro">
        <div class="container">
            <article class="reviews-page__intro-card" aria-label="О странице отзывов">
                <p class="reviews-page__intro-lead">Здесь представлены отзывы пациентов о консультации, лечении и коммуникации с врачом. Для прозрачности каждый отзыв можно проверить на внешней площадке.</p>
                <p class="reviews-page__intro-meta"><?= e($reviewsPageData['summary']['updated_at']); ?></p>
            </article>
        </div>
    </section>

    <section class="inner-section reviews-page__summary" id="reviews-summary">
        <div class="container">
            <div class="reviews-page__summary-grid">
                <article class="reviews-page__summary-main" aria-label="Общая оценка отзывов">
                    <p class="reviews-page__kicker">Общая репутация</p>
                    <p class="reviews-page__rating-value"><?= e($reviewsPageData['summary']['average_rating']); ?></p>
                    <p class="reviews-page__rating-stars" aria-hidden="true">★★★★★</p>
                    <p class="reviews-page__rating-count"><?= e($reviewsPageData['summary']['total_reviews']); ?> отзывов</p>
                    <p class="reviews-page__rating-note"><?= e($reviewsPageData['summary']['label']); ?></p>
                </article>

                <article class="reviews-page__summary-distribution" aria-label="Распределение оценок">
                    <p class="reviews-page__kicker">Распределение оценок</p>
                    <ul class="reviews-page__distribution-list">
                        <?php foreach ($reviewsPageData['summary']['distribution'] as $distribution):
                            $count = (int) $distribution['count'];
                            $width = $totalDistributionCount > 0 ? ($count / $totalDistributionCount) * 100 : 0;
                            ?>
                            <li class="reviews-page__distribution-item">
                                <span class="reviews-page__distribution-label"><?= e((string) $distribution['stars']); ?>★</span>
                                <span class="reviews-page__distribution-bar" role="presentation">
                                    <span class="reviews-page__distribution-fill" style="width: <?= e(number_format($width, 2, '.', '')); ?>%"></span>
                                </span>
                                <span class="reviews-page__distribution-count"><?= e((string) $count); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </article>

                <article class="reviews-page__summary-sources" aria-label="Источники отзывов">
                    <p class="reviews-page__kicker">Независимые площадки</p>
                    <div class="reviews-page__source-cards">
                        <?php foreach ($reviewsPageData['sources'] as $source): ?>
                            <div class="reviews-page__source-card">
                                <p class="reviews-page__source-name"><?= e($source['name']); ?></p>
                                <p class="reviews-page__source-stats">Рейтинг: <?= e($source['rating']); ?> · Отзывов: <?= e($source['reviews']); ?></p>
                                <a class="reviews-page__source-link" href="<?= e($source['url']); ?>" target="_blank" rel="noopener noreferrer nofollow"><?= e($source['link_label']); ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="inner-section reviews-page__featured" id="featured-reviews">
        <div class="container">
            <h2 class="section__title section__title--left">Избранные отзывы</h2>
            <div class="reviews-page__featured-grid">
                <?php foreach ($reviewsPageData['featured_reviews'] as $review): ?>
                    <article class="review-card review-card--featured">
                        <div class="review-card__meta">
                            <span class="review-card__source"><?= e($review['source_name']); ?></span>
                            <span><?= e($review['date']); ?></span>
                        </div>
                        <h3 class="review-card__title"><?= e($review['title']); ?></h3>
                        <p class="review-card__author"><?= e($review['author']); ?> · <?= str_repeat('★', (int) $review['rating']); ?></p>
                        <p class="review-card__text"><?= e($review['excerpt']); ?></p>
                        <p class="review-card__verified"><?= e($review['verified_text']); ?></p>
                        <a class="review-card__cta" href="<?= e($review['source_url']); ?>" target="_blank" rel="noopener noreferrer nofollow">Смотреть оригинал</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="inner-section reviews-page__catalog" id="all-reviews">
        <div class="container reviews-page__layout">
            <aside class="reviews-page__sidebar" aria-label="Сводка по отзывам">
                <div class="reviews-page__sidebar-card">
                    <h2 class="reviews-page__sidebar-title">Сводка</h2>
                    <p class="reviews-page__sidebar-value"><?= e($reviewsPageData['summary']['average_rating']); ?> / 5</p>
                    <p class="reviews-page__sidebar-muted"><?= e($reviewsPageData['summary']['total_reviews']); ?> отзывов с внешней проверкой</p>
                </div>
                <div class="reviews-page__sidebar-card">
                    <h3 class="reviews-page__sidebar-subtitle">Категории отзывов</h3>
                    <div class="reviews-page__chips">
                        <?php foreach ($reviewsPageData['categories'] as $category): ?>
                            <span class="reviews-page__chip"><?= e($category); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <nav class="reviews-page__sidebar-card reviews-page__anchors" aria-label="Навигация по странице">
                    <a href="#reviews-summary">Общая сводка</a>
                    <a href="#featured-reviews">Избранные отзывы</a>
                    <a href="#all-reviews">Каталог отзывов</a>
                    <a href="#source-trust">Проверка источников</a>
                </nav>
            </aside>

            <div class="reviews-page__list">
                <?php foreach ($reviewsPageData['reviews'] as $review): ?>
                    <article class="review-card" aria-label="Отзыв пациента">
                        <div class="review-card__head">
                            <p class="review-card__source"><?= e($review['source_name']); ?></p>
                            <p class="review-card__meta-line"><?= e($review['author']); ?> · <?= e($review['date']); ?> · <?= str_repeat('★', (int) $review['rating']); ?></p>
                        </div>

                        <?php if (!empty($review['title'])): ?>
                            <h3 class="review-card__title"><?= e($review['title']); ?></h3>
                        <?php endif; ?>

                        <p class="review-card__text"><?= e($review['text']); ?></p>

                        <?php if (!empty($review['category']) && is_array($review['category'])): ?>
                            <div class="review-card__tags">
                                <?php foreach ($review['category'] as $tag): ?>
                                    <span class="review-card__tag"><?= e($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <div class="review-card__details">
                            <p><?= e($review['visit_period']); ?></p>
                            <p><?= e($review['clinic_label']); ?></p>
                        </div>

                        <div class="review-card__footer">
                            <p class="review-card__verified"><?= e($review['verified_text']); ?></p>
                            <a class="review-card__cta" href="<?= e($review['source_url']); ?>" target="_blank" rel="noopener noreferrer nofollow"><?= e($review['source_label']); ?></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="inner-section reviews-page__trust" id="source-trust">
        <div class="container">
            <div class="reviews-page__trust-head">
                <h2 class="section__title section__title--left">Проверка источников отзывов</h2>
                <p>Вы можете перейти на внешние независимые ресурсы и сверить публикации самостоятельно.</p>
            </div>
            <div class="reviews-page__trust-grid">
                <?php foreach ($reviewsPageData['sources'] as $source): ?>
                    <article class="reviews-page__trust-card">
                        <h3><?= e($source['name']); ?></h3>
                        <p>Рейтинг: <?= e($source['rating']); ?> · Отзывов: <?= e($source['reviews']); ?></p>
                        <a href="<?= e($source['url']); ?>" target="_blank" rel="noopener noreferrer nofollow">Перейти к отзывам</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
