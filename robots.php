<?php
require_once __DIR__ . '/includes/env.php';

header('Content-Type: text/plain; charset=UTF-8');

if (should_index_site()) {
    echo "User-agent: *\n";
    echo "Allow: /\n\n";
    echo 'Sitemap: ' . APP_CANONICAL_ORIGIN . "/sitemap.xml\n";
    exit;
}

echo "User-agent: *\n";
echo "Disallow: /\n";
