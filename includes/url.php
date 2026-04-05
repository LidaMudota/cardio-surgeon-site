<?php

function project_base_path(): string
{
    static $basePath;

    if ($basePath !== null) {
        return $basePath;
    }

    $configured = getenv('APP_BASE_PATH');
    if (is_string($configured) && $configured !== '') {
        $trimmedConfigured = trim($configured);
        if ($trimmedConfigured === '/' || $trimmedConfigured === '') {
            return $basePath = '';
        }

        return $basePath = '/' . trim($trimmedConfigured, '/');
    }

    $documentRoot = realpath((string) ($_SERVER['DOCUMENT_ROOT'] ?? ''));
    $projectRoot = realpath(__DIR__ . '/..');

    if ($documentRoot && $projectRoot && str_starts_with($projectRoot, $documentRoot)) {
        $relative = trim(str_replace('\\', '/', substr($projectRoot, strlen($documentRoot))), '/');
        return $basePath = $relative !== '' ? '/' . $relative : '';
    }

    return $basePath = '';
}

function project_url(string $path = ''): string
{
    $basePath = project_base_path();
    $normalizedPath = trim($path);

    if ($normalizedPath === '' || $normalizedPath === '/') {
        return $basePath !== '' ? $basePath . '/' : '/';
    }

    return $basePath . '/' . ltrim($normalizedPath, '/');
}
