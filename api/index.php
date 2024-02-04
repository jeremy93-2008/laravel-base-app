<?php

/**
 * Here is the serverless function entry
 * for deployment with Vercel.
 */
$filename = $_SERVER['SCRIPT_NAME'] ?? '/index.php';

if (!str_contains($filename, 'build')) {
    require __DIR__ . '/../public/index.php';
} else {
    if (str_contains($filename, '.css'))
        header('Content-Type: text/css');
    if (str_contains($filename, '.js'))
        header('Content-Type: application/javascript');
    echo require __DIR__ . '/../public/' . $filename;
}
