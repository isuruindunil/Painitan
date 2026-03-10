<?php
/**
 * Painitan Theme Functions and Definitions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function painitan_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'painitan'),
    ));
}
add_action('after_setup_theme', 'painitan_setup');

/**
 * Enqueue scripts and styles.
 */
function painitan_scripts()
{
    // Tailwind via CDN (for development/simplicity as requested)
    wp_enqueue_script('tailwind-cdn', 'https://cdn.tailwindcss.com', array(), null, false);

    // Custom Tailwind Config injected into head
    add_action('wp_head', 'painitan_tailwind_config', 10);

    // Main Theme CSS
    wp_enqueue_style('painitan-style', get_template_directory_uri() . '/assets/css/main.css', array(), wp_get_theme()->get('Version'));

    // Default style.css
    wp_enqueue_style('painitan-root-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'painitan_scripts');

/**
 * Inject Tailwind Config
 */
function painitan_tailwind_config()
{
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: '#f97316',
                        'accent-hover': '#ea580c',
                        card: '#171717',
                        border: '#262626'
                    },
                    fontFamily: {
                        syne: ['Syne', 'sans-serif'],
                        inter: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <?php
}

/**
 * Generate ACF Gallery array or fallback
 */
function painitan_get_gallery_images($field_name = 'gallery')
{
    if (function_exists('get_field')) {
        return get_field($field_name);
    }
    return false;
}

/**
 * Load Local ACF Field Groups automatically
 */
require_once get_template_directory() . '/inc/acf-fields.php';

