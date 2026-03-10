<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#0c0c0c] text-slate-100 font-inter antialiased selection:bg-accent selection:text-white'); ?>>
    <?php wp_body_open(); ?>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300 py-3">
        <div class="container mx-auto px-6 lg:px-12 flex justify-between items-center">
            <a href="<?php echo home_url('/'); ?>" class="block">
                <?php
                $logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($logo_id, 'full');
                if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-12 w-auto object-contain">';
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="Painitan Logo" class="h-12 w-auto object-contain">';
                }
                ?>
            </a>

            <div class="hidden md:flex space-x-10 items-center text-sm font-medium tracking-wide">
                <a href="<?php echo home_url('/iligan'); ?>"
                    class="text-gray-300 hover:text-white transition-colors uppercase">Iligan</a>
                <a href="<?php echo home_url('/lapu-lapu'); ?>"
                    class="text-gray-300 hover:text-white transition-colors uppercase">Lapu-Lapu</a>
                <a href="<?php echo home_url('/'); ?>"
                    class="text-gray-300 hover:text-white transition-colors uppercase">Locations</a>
                <a href="<?php echo home_url('/contact'); ?>"
                    class="text-gray-300 hover:text-white transition-colors uppercase">Contact</a>
            </div>

            <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none z-50 relative">
                <svg class="w-6 h-6 transition-transform duration-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path class="menu-icon-bars" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                    <path class="menu-icon-close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-black/95 backdrop-blur-xl z-40 transform translate-x-full transition-transform duration-300 md:hidden flex flex-col items-center justify-center space-y-8">
        <a href="<?php echo home_url('/iligan'); ?>"
            class="mobile-link text-2xl font-syne text-gray-300 hover:text-white transition-colors uppercase tracking-widest">Iligan</a>
        <a href="<?php echo home_url('/lapu-lapu'); ?>"
            class="mobile-link text-2xl font-syne text-gray-300 hover:text-white transition-colors uppercase tracking-widest">Lapu-Lapu</a>
        <a href="<?php echo home_url('/'); ?>"
            class="mobile-link text-2xl font-syne text-gray-300 hover:text-white transition-colors uppercase tracking-widest">Locations</a>
        <a href="<?php echo home_url('/contact'); ?>"
            class="mobile-link text-2xl font-syne text-gray-300 hover:text-white transition-colors uppercase tracking-widest">Contact</a>
    </div>