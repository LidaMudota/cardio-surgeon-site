<?php

const APP_FALLBACK_CANONICAL_ORIGIN = 'https://aokorobkov.ru';
const APP_DEFAULT_ENV = 'production';

function configured_canonical_origin(): string
{
    static $origin;

    if ($origin !== null) {
        return $origin;
    }

    $candidates = [
        trim((string) getenv('APP_CANONICAL_ORIGIN')),
        trim((string) getenv('CANONICAL_HOST')),
        trim((string) getenv('APP_BASE_URL')),
        trim((string) getenv('BASE_URL')),
    ];

    foreach ($candidates as $candidate) {
        if ($candidate === '') {
            continue;
        }

        if (!preg_match('~^https?://~i', $candidate)) {
            $candidate = 'https://' . ltrim($candidate, '/');
        }

        $validated = filter_var($candidate, FILTER_VALIDATE_URL);
        if ($validated === false) {
            continue;
        }

        $scheme = strtolower((string) parse_url($validated, PHP_URL_SCHEME));
        $host = strtolower((string) parse_url($validated, PHP_URL_HOST));
        if ($host === '' || !in_array($scheme, ['http', 'https'], true)) {
            continue;
        }

        $path = trim((string) parse_url($validated, PHP_URL_PATH));
        $normalizedPath = $path === '' || $path === '/' ? '' : '/' . trim($path, '/');

        return $origin = $scheme . '://' . $host . $normalizedPath;
    }

    return $origin = APP_FALLBACK_CANONICAL_ORIGIN;
}

define('APP_CANONICAL_ORIGIN', configured_canonical_origin());

function app_env(): string
{
    static $env;

    if ($env !== null) {
        return $env;
    }

    $configured = strtolower(trim((string) getenv('APP_ENV')));
    if (in_array($configured, ['production', 'prod'], true)) {
        return $env = 'production';
    }

    if (in_array($configured, ['local', 'dev', 'development', 'staging', 'test'], true)) {
        return $env = 'local';
    }

    $host = strtolower((string) ($_SERVER['HTTP_HOST'] ?? ''));
    $serverName = strtolower((string) ($_SERVER['SERVER_NAME'] ?? ''));
    $effectiveHost = preg_replace('/:\d+$/', '', $host !== '' ? $host : $serverName);

    $isLocalHost = $effectiveHost === 'localhost'
        || $effectiveHost === '127.0.0.1'
        || $effectiveHost === '::1'
        || str_ends_with($effectiveHost, '.local')
        || str_ends_with($effectiveHost, '.test');

    return $env = $isLocalHost ? 'local' : APP_DEFAULT_ENV;
}

function is_production_env(): bool
{
    return app_env() === 'production';
}

function should_index_site(): bool
{
    $mode = strtolower(trim((string) getenv('APP_INDEXING_MODE')));

    if (in_array($mode, ['on', 'index', 'allow'], true)) {
        return true;
    }

    if (in_array($mode, ['off', 'noindex', 'deny'], true)) {
        return false;
    }

    return is_production_env();
}

function canonical_origin(): string
{
    if (is_production_env()) {
        return APP_CANONICAL_ORIGIN;
    }

    $https = !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off';
    $scheme = $https ? 'https' : 'http';
    $host = (string) ($_SERVER['HTTP_HOST'] ?? 'localhost');

    return $scheme . '://' . $host;
}

function request_path(): string
{
    $uri = (string) ($_SERVER['REQUEST_URI'] ?? '/');
    $path = parse_url($uri, PHP_URL_PATH);

    return is_string($path) && $path !== '' ? $path : '/';
}

function should_redirect_to_canonical_host(): bool
{
    $flag = strtolower(trim((string) getenv('APP_ENFORCE_CANONICAL_REDIRECT')));
    if (!in_array($flag, ['1', 'true', 'yes'], true)) {
        return false;
    }

    return is_production_env();
}

function enforce_canonical_host_if_needed(): void
{
    if (!should_redirect_to_canonical_host()) {
        return;
    }

    $currentHost = strtolower((string) ($_SERVER['HTTP_HOST'] ?? ''));
    $currentHost = preg_replace('/:\d+$/', '', $currentHost);
    $canonicalHost = parse_url(APP_CANONICAL_ORIGIN, PHP_URL_HOST);

    if (!is_string($canonicalHost) || $canonicalHost === '' || $canonicalHost === $currentHost) {
        return;
    }

    $target = APP_CANONICAL_ORIGIN . request_path();
    $query = (string) ($_SERVER['QUERY_STRING'] ?? '');
    if ($query !== '') {
        $target .= '?' . $query;
    }

    header('Location: ' . $target, true, 301);
    exit;
}
