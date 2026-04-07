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
            'description' => 'Официальный сайт врача эндоваскулярного хирурга Коробкова Александра Олеговича: специализация, консультации, памятки для пациентов и контакты.',
        ],
        'o-vrache.php' => [
            'title' => 'О враче — Коробков Александр Олегович',
            'description' => 'Профессиональный профиль врача эндоваскулярного хирурга Коробкова Александра Олеговича: образование, квалификация и направления практики.',
        ],
        'o-klinike.php' => [
            'title' => 'О клинике — Коробков Александр Олегович',
            'description' => 'Информация о клинике, где ведется прием, с адресом и организационными деталями для пациентов.',
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
