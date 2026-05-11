<?php
require_once __DIR__ . '/includes/env.php';

header('Content-Type: text/plain; charset=UTF-8');

// Before final launch on https://aokorobkov.ru:
// 1) Set APP_SEO_INDEXING_ENABLED=true only on the production host.
// 2) Confirm robots output allows crawling and exposes the production sitemap.
if (should_index_site()) {
    echo "User-agent: *\n";
    echo "Allow: /\n\n";
    echo 'Sitemap: ' . APP_CANONICAL_ORIGIN . "/sitemap.xml\n";
    exit;
}

echo "# Staging-safe mode: indexing is disabled until final launch on https://aokorobkov.ru.\n";
echo "# Before launch: open crawling, enable APP_SEO_INDEXING_ENABLED=true, and publish Sitemap: https://aokorobkov.ru/sitemap.xml.\n";
echo "User-agent: *\n";
echo "Disallow: /\n";
