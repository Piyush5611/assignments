<?php
require_once __DIR__ . '/config.php';

function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        $_SESSION['csrf_token_time'] = time();
    }
    return (string)$_SESSION['csrf_token'];
}

function csrf_input(): void
{
    $token = htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8');
    echo '<input type="hidden" name="csrf_token" value="' . $token . '">';
}

function csrf_validate(?string $token, int $ttlSeconds = 7200): bool
{
    if (!$token || empty($_SESSION['csrf_token'])) {
        return false;
    }
    if (!hash_equals((string)$_SESSION['csrf_token'], (string)$token)) {
        return false;
    }
    $time = $_SESSION['csrf_token_time'] ?? 0;
    if ($time && (time() - (int)$time) > $ttlSeconds) {
        return false; // expired
    }
    return true;
}
