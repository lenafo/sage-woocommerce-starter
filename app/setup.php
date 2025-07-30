<?php

namespace App;

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

use SageWooCommerce\WooCommerce;

add_action('after_setup_theme', function () {
    // Activar soporte WooCommerce
    add_theme_support('woocommerce');

    // Menús
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);

    // Soporte para títulos dinámicos
    add_theme_support('title-tag');

    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');

    // Soporte HTML5
    add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

    // Soporte para personalizar editor
    add_theme_support('editor-styles');

    // Soporte para custom logos
    add_theme_support('custom-logo');

    // Iniciar WooCommerce (provider)
    $provider = new WooCommerce();
    $provider->register();

});
