<?php
$title = $meta['title'] ?? 'Сайт врача';
$description = $meta['description'] ?? 'Официальный сайт врача.';
$ogTitle = $meta['og_title'] ?? $title;
$ogDescription = $meta['og_description'] ?? $description;
$noindex = !empty($meta['noindex']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!empty($useProjectBaseTag)): ?>
        <base href="<?= e(project_url()); ?>">
    <?php endif; ?>
    <title><?= e($title); ?></title>
    <meta name="description" content="<?= e($description); ?>">
    <?php if ($noindex): ?>
        <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>
    <link rel="canonical" href="<?= e($canonical); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:title" content="<?= e($ogTitle); ?>">
    <meta property="og:description" content="<?= e($ogDescription); ?>">
    <meta property="og:url" content="<?= e($canonical); ?>">
    <meta property="og:image" content="<?= e($siteUrl); ?>/assets/img/content/hero-doctor.svg">
    <link rel="icon" type="image/svg+xml" href="assets/img/icons/spec-heart-transplant.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/internal.css">
    <?php if (!empty($extraStylesheets) && is_array($extraStylesheets)): ?>
        <?php foreach ($extraStylesheets as $stylesheet): ?>
            <link rel="stylesheet" href="<?= e($stylesheet); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
<div class="site-shell">
