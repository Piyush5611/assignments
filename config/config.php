<?php
require_once __DIR__ . '/env.php';

// Load .env file if present
env_load();

// Include Composer autoload if present
$__autoload = __DIR__ . '/../vendor/autoload.php';
if (is_file($__autoload)) {
    require_once $__autoload;
}

// Basic app configuration
if (!defined('APP_ENV')) {
    define('APP_ENV', env('APP_ENV', 'development'));
}
if (!defined('APP_NAME')) {
    define('APP_NAME', env('APP_NAME', 'College Website'));
}
if (!defined('BASE_URL')) {
    // Useful if hosted in a subdirectory
    define('BASE_URL', rtrim((string)env('BASE_URL', ''), '/'));
}

$tz = env('APP_TIMEZONE', 'UTC');
date_default_timezone_set(is_string($tz) ? $tz : 'UTC');

// Sessions & security headers
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Clickjacking protection for basic pages
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: strict-origin-when-cross-origin');

// Utility function to build asset URLs (respects BASE_URL)
if (!function_exists('asset')) {
    function asset(string $path): string
    {
        $base = BASE_URL;
        if ($path && $path[0] !== '/') {
            $path = '/' . $path;
        }
        return $base . $path;
    }
}

