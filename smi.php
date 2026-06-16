<?php
require __DIR__ . '/includes/init.php';
$meta = [
    'title' => 'СМИ — эндоваскулярный хирург Коробков А. О.',
    'description' => 'СМИ, лекции, подкасты и публикации с участием эндоваскулярного хирурга Александра Олеговича Коробкова.',
];
$pageTitle = 'СМИ';
$pageSubtitle = 'Подкасты, лекции, публикации и материалы с участием Александра Олеговича Коробкова.';
$extraStylesheets = ['assets/css/smi.css'];
$innerHeroAttrs = ' data-no-scroll-motion';

$mediaItems = [
    [
        'type' => 'Видео / подкаст',
        'title' => 'Подкаст с кардиологом Тамазом Тамазовичем Гаглошвили на канале «Блог Кардиолога»',
        'description' => 'Обсуждаем лучшие методы диагностики сосудов сердца.',
        'source' => 'youtube.com / vkvideo.ru',
        'links' => [
            [
                'label' => 'Открыть на YouTube',
                'url' => 'https://m.youtube.com/watch?v=OQ6tfNjmuNk&ra=m',
            ],
            [
                'label' => 'Открыть в VK',
                'url' => 'https://vkvideo.ru/video-210934520_456241049',
            ],
        ],
    ],
    [
        'type' => 'Видео / подкаст',
        'title' => 'Подкаст с кардиологом Тамазом Тамазовичем Гаглошвили на канале «Блог Кардиолога».',
        'description' => 'Главная ОШИБКА после стентирования. Почему стент забивается ТРОМБОМ? Что категорически нельзя делать после установки стента? Как не допустить тромбоза и избежать повторного инфаркта? Разбираем главные ошибки пациентов после выписки.',
        'source' => 'youtube.com / vkvideo.ru',
        'links' => [
            [
                'label' => 'Открыть на YouTube',
                'url' => 'https://youtu.be/OW7G9bspynE?is=9cIbNJkSpqlB9Hmn',
            ],
            [
                'label' => 'Открыть в VK',
                'url' => 'https://vkvideo.ru/video-210934520_456241038',
            ],
        ],
    ],
    [
        'type' => 'Видео / лекция',
        'title' => '7 слагаемых здоровья сердца',
        'description' => 'Материал с участием Александра Олеговича Коробкова о здоровье сердца.',
        'source' => 'youtube.com',
        'url' => 'https://www.youtube.com/watch?v=ZajSdNc8BJk',
    ],
    [
        'type' => 'Публикация / анонс лекции',
        'title' => 'Медицинский Лекторий',
        'description' => 'Материал о медицинском лектории с участием Александра Олеговича Коробкова.',
        'source' => 'gp115.mos.ru',
        'url' => 'https://gp115.mos.ru/news/?show_news_id=712',
    ],
];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/page-start.php';
?>

<section class="inner-section page-smi" data-no-scroll-motion>
    <div class="container page-smi__container">
        <div class="page-smi__materials">
            <div class="page-smi__grid" aria-label="Материалы в СМИ">
                <?php foreach ($mediaItems as $index => $item): ?>
                    <article class="page-smi__card" aria-label="<?= e($item['title']); ?>">
                        <span class="page-smi__index"><?= str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                        <p class="page-smi__type"><?= e($item['type']); ?></p>
                        <h2 class="page-smi__title"><?= e($item['title']); ?></h2>
                        <p class="page-smi__description"><?= e($item['description']); ?></p>
                        <p class="page-smi__source">Источник: <span><?= e($item['source']); ?></span></p>
                        <?php if (isset($item['links'])): ?>
                            <?php foreach ($item['links'] as $link): ?>
                                <a class="page-smi__link" href="<?= e($link['url']); ?>" target="_blank" rel="noopener noreferrer"><?= e($link['label']); ?></a>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <a class="page-smi__link" href="<?= e($item['url']); ?>" target="_blank" rel="noopener noreferrer">Открыть материал</a>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="page-smi__note">
            <p class="page-smi__footnote">Раздел будет пополняться новыми материалами, подкастами, лекциями и публикациями.</p>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/form-block.php'; ?>

</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
