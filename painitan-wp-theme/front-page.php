<?php
/**
 * The template for displaying the front page (Landing Page).
 */
get_header();

// Fetch ACF fields with fallbacks
$iligan_bg = function_exists('get_field') && get_field('iligan_background') ? get_field('iligan_background')['url'] : get_template_directory_uri() . '/assets/images/painitan_lugaw_1773123200372.png';
$lapulapu_bg = function_exists('get_field') && get_field('lapulapu_background') ? get_field('lapulapu_background')['url'] : get_template_directory_uri() . '/assets/images/painitan_tapsilog_1773123184902.png';

$iligan_link = function_exists('get_field') && get_field('iligan_page_link') ? get_field('iligan_page_link') : home_url('/iligan');
$lapulapu_link = function_exists('get_field') && get_field('lapulapu_page_link') ? get_field('lapulapu_page_link') : home_url('/lapu-lapu');
?>

<!-- Central Brand Logo Overlay -->
<div class="absolute inset-0 z-40 pointer-events-none flex items-center justify-center">
    <div
        class="bg-black/60 backdrop-blur-md px-8 py-6 md:px-12 md:py-8 rounded-2xl md:rounded-3xl border border-white/10 animate-reveal flex flex-col items-center shadow-2xl">
        <?php
        $logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($logo_id, 'full');
        if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="h-16 md:h-32 w-auto pointer-events-auto object-contain">';
        } else {
            echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="Painitan Logo" class="h-16 md:h-32 w-auto pointer-events-auto object-contain">';
        }
        ?>
        <p class="text-center text-gray-300 mt-2 md:mt-4 font-medium tracking-widest text-xs md:text-sm uppercase">
            Select Location</p>
    </div>
</div>

<!-- Note: nav is z-50 in header.php, this overlay is z-40 -->

<div class="split-screen flex-col md:flex-row h-screen w-screen absolute inset-0 text-center top-0 left-0 pt-0 mt-0">
    <!-- Iligan Side (Mobile Top) -->
    <a href="<?php echo esc_url($iligan_link); ?>"
        class="split-side w-full md:w-1/2 h-1/2 md:h-full relative group block flex justify-center items-start md:items-end pt-24 md:pt-0 pb-0 md:pb-24">
        <div class="split-bg" style="background-image: url('<?php echo esc_url($iligan_bg); ?>');"></div>
        <div class="split-overlay"></div>
        <div class="split-content animate-reveal delay-100 flex flex-col items-center p-6 md:p-8">
            <h2
                class="text-5xl md:text-7xl font-bold mb-2 md:mb-4 font-syne md:group-hover:-translate-y-2 transition-transform duration-500 text-white">
                Iligan</h2>
            <div class="h-1 w-12 md:w-0 bg-accent md:group-hover:w-24 transition-all duration-500 mb-4 md:mb-6 mx-auto">
            </div>
            <p
                class="text-gray-300 text-sm md:text-lg opacity-100 md:opacity-0 md:group-hover:opacity-100 md:group-hover:-translate-y-2 transition-all duration-500 md:delay-100 font-light">
                Explore Iligan Branch</p>
        </div>
    </a>

    <!-- Lapu-Lapu Side (Mobile Bottom) -->
    <a href="<?php echo esc_url($lapulapu_link); ?>"
        class="split-side w-full md:w-1/2 h-1/2 md:h-full relative group block flex justify-center items-end md:items-end pb-24 md:pb-24 pt-0">
        <div class="split-bg" style="background-image: url('<?php echo esc_url($lapulapu_bg); ?>');"></div>
        <div class="split-overlay"></div>
        <div class="split-content animate-reveal delay-200 flex flex-col items-center p-6 md:p-8">
            <h2
                class="text-5xl md:text-7xl font-bold mb-2 md:mb-4 font-syne md:group-hover:-translate-y-2 transition-transform duration-500 text-white">
                Lapu-Lapu</h2>
            <div class="h-1 w-12 md:w-0 bg-accent md:group-hover:w-24 transition-all duration-500 mb-4 md:mb-6 mx-auto">
            </div>
            <p
                class="text-gray-300 text-sm md:text-lg opacity-100 md:opacity-0 md:group-hover:opacity-100 md:group-hover:-translate-y-2 transition-all duration-500 md:delay-100 font-light">
                Explore Lapu-Lapu Branch</p>
        </div>
    </a>
</div>

<?php
// Omitting standard get_footer() here because we want the split screen to be full height without the standard footer below it. 
// Let's include wp_footer manually so plugins work.
wp_footer();
?>
</body>

</html>