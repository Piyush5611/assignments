<?php

// Simple .env loader and helper
if (!function_exists('env_load')) {
    function env_load(string $path = __DIR__ . '/../.env'): array
    {
        $vars = [];
        if (!is_file($path) || !is_readable($path)) {
            return $vars;
        }
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '#')) {
                continue;
            }
            // Support KEY="VALUE with # inside" and simple KEY=VALUE
            if (preg_match('/^([A-Z0-9_]+)\s*=\s*(.*)$/i', $line, $matches)) {
                $key = $matches[1];
                $value = $matches[2];
                // Strip surrounding quotes if present
                if ((str_starts_with($value, '"') && str_ends_with($value, '"')) ||
                    (str_starts_with($value, "'") && str_ends_with($value, "'"))) {
                    $value = substr($value, 1, -1);
                }
                $vars[$key] = $value;
                // Set in environment for compatibility
                $_ENV[$key] = $value;
                putenv($key . '=' . $value);
            }
        }
        return $vars;
    }
}

if (!function_exists('env')) {
    function env(string $key, $default = null)
    {
        $val = getenv($key);
        if ($val === false) {
            $val = $_ENV[$key] ?? null;
        }
        if ($val === null) {
            return $default;
        }
        // Cast common literals
        $lower = strtolower($val);
        if ($lower === 'true') return true;
        if ($lower === 'false') return false;
        if ($lower === 'null') return null;
        return $val;
    }
}
