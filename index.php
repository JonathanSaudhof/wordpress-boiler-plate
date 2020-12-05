<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
require('load-env.php');

if (isset($_ENV["REST_API_ONLY"])=== false) {
    $loadTheme = false;
} else {
    $loadTheme = $_ENV["REST_API_ONLY"]===true ? false : true;
}

define('WP_USE_THEMES', $loadTheme);

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
