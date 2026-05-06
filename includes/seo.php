<?php

function page_basename(): string
{
    return basename((string) ($_SERVER['SCRIPT_NAME'] ?? 'index.php'));
}

function page_slug(): string
{
    $page = page_basename();
    return $page === 'index.php' ? '' : $page;
}

function canonical_url_for_page(?string $page = null): string
{
    $slug = $page === null ? page_slug() : ($page === 'index.php' ? '' : ltrim($page, '/'));
    $origin = rtrim(canonical_origin(), '/');

    if ($slug === '' || $slug === '/') {
        return $origin . '/';
    }

    return $origin . '/' . ltrim($slug, '/');
}

function seo_defaults_map(): array
{
    return [
        'index.php' => [
            'title' => 'Коробков Александр Олегович — врач эндоваскулярный хирург',
            'description' => 'Официальный сайт врача эндоваскулярного хирурга Коробкова Александра Олеговича: направления работы, материалы для пациентов, публикации и контакты.',
        ],
        'o-vrache.php' => [
            'title' => 'О враче — Коробков Александр Олегович',
            'description' => 'Профессиональный профиль Коробкова Александра Олеговича: образование, квалификация, опыт работы и основные направления практики.',
        ],
        'rezultaty-rabot.php' => [
            'title' => 'Направления работы — Коробков Александр Олегович',
            'description' => 'Основные направления работы врача эндоваскулярного хирурга Коробкова Александра Олеговича с примерами клинических случаев из практики.',
        ],
        'o-klinike.php' => [
            'title' => 'О клинике — Коробков Александр Олегович',
            'description' => 'Информация о клинике, где ведет прием Коробков Александр Олегович: расположение, условия посещения и организационные детали для пациентов.',
        ],
        'otzyvy.php' => [
            'title' => 'Отзывы пациентов — Коробков Александр Олегович',
            'description' => 'Отзывы пациентов о консультациях и лечении у врача эндоваскулярного хирурга Коробкова Александра Олеговича.',
        ],
        'diplomy.php' => [
            'title' => 'Дипломы и сертификаты — Коробков Александр Олегович',
            'description' => 'Документы об образовании, повышении квалификации и профессиональной аккредитации Коробкова Александра Олеговича.',
        ],
        'publikatsii.php' => [
            'title' => 'Публикации — Коробков Александр Олегович',
            'description' => 'Подборка публикаций и профессиональных материалов Коробкова Александра Олеговича для пациентов и медицинских специалистов.',
        ],
        'smi.php' => [
            'title' => 'СМИ — Коробков Александр Олегович',
            'description' => 'Материалы с участием Коробкова Александра Олеговича в СМИ: интервью, подкасты и экспертные комментарии.',
        ],
        'dlya-vrachey.php' => [
            'title' => 'Для врачей — Коробков Александр Олегович',
            'description' => 'Информация для врачей: профессиональное взаимодействие, клинические материалы и профильные направления работы.',
        ],
        'analizy.php' => [
            'title' => 'Анализы перед госпитализацией — Коробков Александр Олегович',
            'description' => 'Список анализов и обследований перед госпитализацией: что подготовить заранее перед консультацией и лечением.',
        ],
        'anesteziya.php' => [
            'title' => 'Анестезия при лечении — Коробков Александр Олегович',
            'description' => 'Общая информация об анестезии при эндоваскулярных вмешательствах и о том, как проходит подготовка к процедуре.',
        ],
        'kak-prokhodit-operatsiya.php' => [
            'title' => 'Как проходит операция — Коробков Александр Олегович',
            'description' => 'Этапы эндоваскулярного вмешательства: подготовка, проведение операции и базовые организационные моменты для пациента.',
        ],
        'kak-prokhodit-konsultatsiya.php' => [
            'title' => 'Как проходит консультация — Коробков Александр Олегович',
            'description' => 'Как проходит консультация у Коробкова Александра Олеговича: формат приема, разбор документов и ответы на вопросы пациента.',
        ],
        'patsientam-iz-drugogo-goroda.php' => [
            'title' => 'Пациентам из другого города — Коробков Александр Олегович',
            'description' => 'Памятка для пациентов из других городов: как подготовить документы, спланировать приезд и организовать визит в клинику.',
        ],
        'podgotovka-k-operatsii.php' => [
            'title' => 'Подготовка к операции — Коробков Александр Олегович',
            'description' => 'Рекомендации по подготовке к госпитализации и эндоваскулярной операции: документы, обследования и организационные шаги.',
        ],
        'posle-operatsii.php' => [
            'title' => 'После операции — Коробков Александр Олегович',
            'description' => 'Памятка по периоду после операции: восстановление, контрольные визиты и соблюдение рекомендаций лечащего врача.',
        ],
        'kontakty.php' => [
            'title' => 'Контакты — Коробков Александр Олегович',
            'description' => 'Контакты для записи и связи: телефон, электронная почта, адрес клиники и удобные способы обращения.',
        ],
    ];
}

function seo_structured_data(string $page, string $canonical): array
{
    if ($page === 'index.php') {
        return [[
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'Коробков Александр Олегович — эндоваскулярный хирург',
            'url' => $canonical,
            'inLanguage' => 'ru-RU',
        ]];
    }

    if ($page === 'o-vrache.php') {
        return [[
            '@context' => 'https://schema.org',
            '@type' => 'ProfilePage',
            'mainEntity' => [
                '@type' => 'Person',
                'name' => 'Коробков Александр Олегович',
                'jobTitle' => 'Врач эндоваскулярный хирург',
                'url' => $canonical,
                'sameAs' => [
                    'https://www.medicina.ru/nashi-vrachi/korobkov-aleksandr-olegovich/',
                ],
            ],
        ]];
    }

    return [];
}

function resolve_seo_meta(array $meta = []): array
{
    $page = page_basename();
    $defaults = seo_defaults_map()[$page] ?? [];
    $resolved = array_merge($defaults, $meta);

    $resolved['title'] = $resolved['title'] ?? 'Сайт врача';
    $resolved['description'] = $resolved['description'] ?? 'Официальный сайт врача.';
    $resolved['canonical'] = $resolved['canonical'] ?? canonical_url_for_page($page);
    $resolved['og_title'] = $resolved['og_title'] ?? $resolved['title'];
    $resolved['og_description'] = $resolved['og_description'] ?? $resolved['description'];
    $resolved['og_type'] = $resolved['og_type'] ?? 'website';
    $resolved['og_image'] = $resolved['og_image'] ?? canonical_origin() . '/assets/img/content/hero-doctor.png';
    $resolved['twitter_card'] = $resolved['twitter_card'] ?? 'summary_large_image';

    $forcedNoindex = !should_index_site();
    $resolved['noindex'] = $forcedNoindex || !empty($resolved['noindex']);

    $schemas = $resolved['schema'] ?? [];
    if (!is_array($schemas)) {
        $schemas = [];
    }
    $resolved['schema'] = array_merge($schemas, seo_structured_data($page, $resolved['canonical']));

    return $resolved;
}
