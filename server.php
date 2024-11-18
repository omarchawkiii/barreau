<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// Check if the path exists in the public_html directory
if ($uri !== '/' && file_exists(__DIR__.'/public_html'.$uri)) {
    return false;
}

require_once __DIR__.'/public_html/index.php';
