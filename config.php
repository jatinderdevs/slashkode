<?php
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/slashkode');

// 1. Define ROOT_PATH relative to config.php's location
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__);
}

// 2. Safely load env.php from the exact same directory
$envFile = __DIR__ . '/env.php';

if (file_exists($envFile)) {
    $env = require $envFile;
    if (is_array($env)) {
        foreach ($env as $key => $value) {
            if (!defined($key)) {
                define($key, $value);
            }
        }
    }
}
?>