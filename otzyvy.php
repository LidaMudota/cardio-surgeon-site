<?php
require __DIR__ . '/includes/init.php';

$reviewsPageData = [
    'summary' => [
        'average_rating' => '5.0',
        'total_reviews' => '9',
        'label' => 'Сводные данные из отзывов пациентов на независимых площадках.',
        'updated_at' => 'Обновлено: март 2026',
        'distribution' => [
            ['stars' => 5, 'count' => 9],
            ['stars' => 4, 'count' => 0],
            ['stars' => 3, 'count' => 0],
            ['stars' => 2, 'count' => 0],
            ['stars' => 1, 'count' => 0],
        ],
    ],
    'sources' => [
        [
            'name' => 'ПроДокторов',
            'rating' => '5.0',
            'reviews' => '3',
            'url' => 'https://prodoctorov.ru/',
            'link_label' => 'Смотреть на сайте',
        ],
        [
            'name' => 'НаПоправку',
            'rating' => '5.0',
            'reviews' => '3',
            'url' => 'https://napopravku.ru/',
            'link_label' => 'Смотреть на сайте',
        ],
        [
            'name' => 'Сайт клиники',
            'rating' => '5.0',
            'reviews' => '3',
            'url' => 'https://www.medicina.ru/',
            'link_label' => 'Смотреть на сайте',
        ],
    ],
    'featured_reviews' => [
        [
            'author' => 'Пациент',
            'date' => '30.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'excerpt' => 'Сделали коронарографию 28.01.2026. От всей души благодарю докторов и медсестёр. Особая благодарность доктору Коробкову Александру Олеговичу. Прекрасный доктор, отличный специалист. Всему персоналу большое спасибо!!!',
            'source_name' => 'ПроДокторов',
            'source_url' => 'https://prodoctorov.ru/',
            'verified_text' => 'Отзыв опубликован на внешней площадке.',
        ],
        [
            'author' => 'Пациент',
            'date' => '29.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'excerpt' => 'Проходил кардиографию с 28.01.2026. Очень благодарен всему коллективу врачей медсестёр. Впервые увидел четкую слаженную работу врачей. Особая благодарность Коробкову Александру Олеговичу за доброе сердце, профессиональное отношение к своей работе и за спасение продление моей жизни. Спасибо!',
            'source_name' => 'НаПоправку',
            'source_url' => 'https://napopravku.ru/',
            'verified_text' => 'Переход по ссылке ведёт к источнику публикации.',
        ],
        [
            'author' => 'Пациент',
            'date' => '06.02.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'excerpt' => 'Очень большая благодарность врачу Коробкову А.О. за проделанную работу. Доктор отличный специалист! За отличное отношение к пациенту, за внимательное и чуткое отношение. И что не мало важно, можно в любое время позвонить, обратиться за консультацией и за советом. Огромное преогромное спасибо. Таких врачей мало, как он.',
            'source_name' => 'Сайт клиники',
            'source_url' => 'https://www.medicina.ru/',
            'verified_text' => 'Источник указан рядом с каждым отзывом.',
        ],
    ],
    'categories' => ['Консультация', 'Операция', 'Послеоперационное сопровождение', 'Внимательность', 'Профессионализм'],
    'reviews' => [
        [
            'author' => 'Пациент',
            'date' => '30.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Сделали коронарографию 28.01.2026. От всей души благодарю докторов и медсестёр. Особая благодарность доктору Коробкову Александру Олеговичу. Прекрасный доктор, отличный специалист. Всему персоналу большое спасибо!!!',
            'source_name' => 'ПроДокторов',
            'source_url' => 'https://prodoctorov.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Консультация', 'Профессионализм'],
            'verified_text' => 'Оригинал отзыва доступен на независимой площадке.',
            'visit_period' => 'Период обращения: январь 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент',
            'date' => '29.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Проходил кардиографию с 28.01.2026. Очень благодарен всему коллективу врачей медсестёр. Впервые увидел четкую слаженную работу врачей. Особая благодарность Коробкову Александру Олеговичу за доброе сердце, профессиональное отношение к своей работе и за спасение продление моей жизни. Спасибо!',
            'source_name' => 'НаПоправку',
            'source_url' => 'https://napopravku.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Послеоперационное сопровождение', 'Внимательность'],
            'verified_text' => 'Ссылка ведёт на страницу с подтверждением публикации.',
            'visit_period' => 'Период обращения: январь 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент',
            'date' => '30.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Выражаю огромную благодарность за работу всего персонала и особенно Коробкову Александру Олеговичу за любовь и профессионализм в своём деле.',
            'source_name' => 'Сайт клиники',
            'source_url' => 'https://www.medicina.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Консультация', 'Внимательность'],
            'verified_text' => 'Проверьте отзыв на внешнем ресурсе по кнопке.',
            'visit_period' => 'Период обращения: январь 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент',
            'date' => '29.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Проходил кардиографию с 28.01.2026. Очень благодарен всему коллективу врачей медсестёр. Впервые увидел четкую слаженную работу врачей. Особая благодарность Коробкову Александру Олеговичу за доброе сердце, профессиональное отношение к своей работе и за спасение продление моей жизни. Спасибо!',
            'source_name' => 'ПроДокторов',
            'source_url' => 'https://prodoctorov.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Операция', 'Профессионализм'],
            'verified_text' => 'Отзыв подтверждается ссылкой на первоисточник.',
            'visit_period' => 'Период обращения: январь 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент',
            'date' => '30.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Выражаю огромную благодарность за работу всего персонала и особенно Коробкову Александру Олеговичу за любовь и профессионализм в своём деле.',
            'source_name' => 'НаПоправку',
            'source_url' => 'https://napopravku.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Профессионализм'],
            'verified_text' => 'Отзыв подтверждается ссылкой на первоисточник.',
            'visit_period' => 'Период обращения: январь 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент',
            'date' => '06.02.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Очень большая благодарность врачу Коробкову А.О. за проделанную работу. Доктор отличный специалист! За отличное отношение к пациенту, за внимательное и чуткое отношение. И что не мало важно, можно в любое время позвонить, обратиться за консультацией и за советом. Огромное преогромное спасибо. Таких врачей мало, как он.',
            'source_name' => 'Сайт клиники',
            'source_url' => 'https://www.medicina.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Внимательность', 'Профессионализм'],
            'verified_text' => 'Отзыв подтверждается ссылкой на первоисточник.',
            'visit_period' => 'Период обращения: февраль 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент',
            'date' => '30.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Выражаю огромную благодарность за работу всего персонала и особенно Коробкову Александру Олеговичу за любовь и профессионализм в своём деле.',
            'source_name' => 'ПроДокторов',
            'source_url' => 'https://prodoctorov.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Профессионализм'],
            'verified_text' => 'Отзыв подтверждается ссылкой на первоисточник.',
            'visit_period' => 'Период обращения: январь 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент',
            'date' => '06.02.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Очень большая благодарность врачу Коробкову А.О. за проделанную работу. Доктор отличный специалист! За отличное отношение к пациенту, за внимательное и чуткое отношение. И что не мало важно, можно в любое время позвонить, обратиться за консультацией и за советом. Огромное преогромное спасибо. Таких врачей мало, как он.',
            'source_name' => 'НаПоправку',
            'source_url' => 'https://napopravku.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Внимательность', 'Профессионализм'],
            'verified_text' => 'Отзыв подтверждается ссылкой на первоисточник.',
            'visit_period' => 'Период обращения: февраль 2026',
            'clinic_label' => 'Клиника: АО «Медицина»',
        ],
        [
            'author' => 'Пациент',
            'date' => '27.01.2026',
            'rating' => 5,
            'title' => 'Отзыв пациента',
            'text' => 'Выражаю огромную благодарность всему персоналу больницы. Особенно врачу Коробкову А.О. за его профессионализм в хирургии и общение с больными. Спасибо!!! Все хорошо!',
            'source_name' => 'Сайт клиники',
            'source_url' => 'https://www.medicina.ru/',
            'source_label' => 'Смотреть оригинал',
            'category' => ['Операция', 'Профессионализм'],
            'verified_text' => 'Отзыв подтверждается ссылкой на первоисточник.',
            'visit_period' => 'Период обращения: январь 2026',
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
