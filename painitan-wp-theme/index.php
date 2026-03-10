<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<main id="primary" class="site-main py-32 min-h-screen flex items-center justify-center">
    <div class="container mx-auto px-6 text-center">
        <h1 class="text-4xl font-syne font-bold mb-6">Welcome to Painitan</h1>
        <p class="text-gray-400 font-light max-w-2xl mx-auto">
            Please assign a static front page from the WordPress Settings > Reading menu, or create pages using the
            custom Branch and Contact templates.
        </p>
    </div>
</main>

<?php
get_footer();
