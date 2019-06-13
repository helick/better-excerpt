<?php
/*
Plugin Name:    Helick Better Excerpt
Author:         Evgenii Nasyrov
Author URI:     https://helick.io/
*/

// Require Composer autoloader if installed on it's own
if (file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    require_once $composer;
}

// Helpers
require_once __DIR__ . '/src/constants.php';

// Services
\Helick\BetterExcerpt\MetaBox::boot();
