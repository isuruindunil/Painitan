<?php
/**
 * Template Name: Contact Template
 */

get_header();

// Global Contact Settings
$contact_hero_bg = function_exists('get_field') && get_field('contact_hero_bg') ? get_field('contact_hero_bg')['url'] : get_template_directory_uri() . '/assets/images/painitan_tapsilog_1773123184902.png';
$contact_hero_title = function_exists('get_field') && get_field('contact_hero_title') ? get_field('contact_hero_title') : 'Get in Touch.';
$contact_hero_subtitle = function_exists('get_field') && get_field('contact_hero_subtitle') ? get_field('contact_hero_subtitle') : 'We are always ready to serve you. Reach out to us, visit our branch, or order online directly.';

// Iligan Contact Fallbacks
$iligan_address = function_exists('get_field') && get_field('iligan_address') ? get_field('iligan_address') : 'G/F Jose Lacuna Building.<br>Roxas Avenue Extension Saray<br>Iligan City, Lanao Del Norte<br>9200, Philippines<br><span class="text-white font-medium mt-2 block">Street:</span> Andres Bonifacio Ave.';
$iligan_landmark = function_exists('get_field') && get_field('iligan_landmark') ? get_field('iligan_landmark') : 'Atbang sa Cosmopolitan ug Gaisano Mall Iligan.';
$iligan_phone_1 = function_exists('get_field') && get_field('iligan_phone_1') ? get_field('iligan_phone_1') : '+63 227-4456';
$iligan_phone_2 = function_exists('get_field') && get_field('iligan_phone_2') ? get_field('iligan_phone_2') : '0955-4853502';
$iligan_email = function_exists('get_field') && get_field('iligan_email') ? get_field('iligan_email') : 'painitan@painitan.com';
$iligan_map_embed = function_exists('get_field') && get_field('iligan_map_embed') ? get_field('iligan_map_embed') : 'https://maps.google.com/maps?q=Gaisano+Mall+Iligan&t=&z=16&ie=UTF8&iwloc=&output=embed';

// Lapu-Lapu Contact Fallbacks
$lapulapu_address = function_exists('get_field') && get_field('lapulapu_address') ? get_field('lapulapu_address') : '[Your Lapu-Lapu Building/Floor]<br>[Your Lapu-Lapu Street Name]<br>Lapu-Lapu City, Cebu<br>6015, Philippines<br><span class="mt-2 text-accent italic text-sm block">Update Address Here</span>';
$lapulapu_landmark = function_exists('get_field') && get_field('lapulapu_landmark') ? get_field('lapulapu_landmark') : '[Your Lapu-Lapu local landmark]';
$lapulapu_phone_1 = function_exists('get_field') && get_field('lapulapu_phone_1') ? get_field('lapulapu_phone_1') : '+63 [XXX-XXXX]';
$lapulapu_phone_2 = function_exists('get_field') && get_field('lapulapu_phone_2') ? get_field('lapulapu_phone_2') : '09XX-XXXXXXX';
$lapulapu_email = function_exists('get_field') && get_field('lapulapu_email') ? get_field('lapulapu_email') : 'lapulapubranch@painitan.com';
$lapulapu_map_embed = function_exists('get_field') && get_field('lapulapu_map_embed') ? get_field('lapulapu_map_embed') : 'https://maps.google.com/maps?q=Lapu-Lapu+City,+Cebu&t=&z=14&ie=UTF8&iwloc=&output=embed';

?>

<!-- Page Header -->
<header class="pt-40 pb-20 border-b border-border relative overflow-hidden bg-cover bg-center bg-no-repeat"
    style="background-image: url('<?php echo esc_url($contact_hero_bg); ?>');">
    <div class="absolute inset-0 bg-black/80 pointer-events-none"></div>
    <div
        class="absolute inset-0 bg-gradient-to-b from-transparent to-[#0c0c0c] pointer-events-none border-b border-white/5">
    </div>

    <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center animate-reveal">
        <h1 class="text-5xl md:text-7xl font-black font-syne mb-6">
            <?php echo esc_html($contact_hero_title); ?>
        </h1>
        <p class="text-xl text-gray-400 font-light max-w-2xl mx-auto">
            <?php echo esc_html($contact_hero_subtitle); ?>
        </p>
    </div>
</header>

<!-- Contact Details & Map (SIDE-BY-SIDE) -->
<section class="py-16">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 xl:grid-cols-2 gap-12 xl:gap-20">

            <!-- ILIGAN BRANCH COLUMN -->
            <div class="space-y-8 animate-reveal delay-100 flex flex-col h-full">
                <div class="mb-4 border-b border-border pb-4">
                    <h2 class="text-3xl md:text-4xl font-syne font-black text-white">Iligan Branch</h2>
                    <p class="text-accent tracking-[0.2em] text-sm font-bold uppercase mt-2">Open 24/7</p>
                </div>

                <!-- 1. Location -->
                <div class="glass-card p-8 rounded-2xl relative overflow-hidden flex-1">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-accent/10 rounded-bl-full -z-10 blur-2xl"></div>
                    <h3 class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase">Location & Landmark</h3>
                    <div class="text-gray-300 font-light leading-relaxed mb-6">
                        <?php echo wp_kses_post($iligan_address); ?>
                    </div>
                    <div class="p-4 bg-black/40 border border-white/5 rounded-xl">
                        <p class="text-sm text-gray-400 font-light"><strong
                                class="text-white font-medium">Landmark:</strong>
                            <?php echo esc_html($iligan_landmark); ?>
                        </p>
                    </div>
                </div>

                <!-- 2. Contact Details & Availability -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="glass-card p-6 rounded-2xl">
                        <h3
                            class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            Call Us
                        </h3>
                        <p class="text-lg font-medium text-white mb-2">
                            <?php echo esc_html($iligan_phone_1); ?>
                        </p>
                        <p class="text-lg font-medium text-white mb-4">
                            <?php echo esc_html($iligan_phone_2); ?>
                        </p>

                        <h3 class="text-sm font-bold text-accent tracking-[0.2em] mb-2 mt-6 uppercase">Email</h3>
                        <a href="mailto:<?php echo esc_attr($iligan_email); ?>"
                            class="text-white hover:text-accent transition-colors font-medium text-sm break-all">
                            <?php echo esc_html($iligan_email); ?>
                        </a>
                    </div>

                    <!-- Availability -->
                    <div class="glass-card p-6 rounded-2xl">
                        <h3
                            class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Availability
                        </h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex justify-between items-center border-b border-border pb-2">
                                <span class="text-gray-400 font-light">Store Dine-In</span>
                                <span class="text-white font-medium">24 / 7</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-border pb-2">
                                <span class="text-gray-400 font-light">FoodPanda</span>
                                <span class="text-white font-medium">4am - 12am</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-border pb-2">
                                <span class="text-gray-400 font-light">GrabFood</span>
                                <span class="text-white font-medium">24 / 7</span>
                            </div>
                            <div class="flex justify-between items-center pb-2">
                                <span class="text-gray-400 font-light">painitan.com</span>
                                <span class="text-white font-medium">24 / 7</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="h-[350px]">
                    <div
                        class="w-full h-full rounded-3xl overflow-hidden border border-border shadow-2xl relative group">
                        <iframe
                            class="w-full h-full grayscale group-hover:grayscale-0 transition-all duration-700 opacity-90 group-hover:opacity-100"
                            src="<?php echo esc_url($iligan_map_embed); ?>" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="absolute inset-0 border-4 border-black pointer-events-none rounded-3xl"></div>
                    </div>
                </div>
            </div>

            <!-- LAPU-LAPU BRANCH COLUMN -->
            <div class="space-y-8 animate-reveal delay-200 flex flex-col h-full">
                <div class="mb-4 border-b border-border pb-4">
                    <h2 class="text-3xl md:text-4xl font-syne font-black text-white">Lapu-Lapu Branch</h2>
                    <p class="text-accent tracking-[0.2em] text-sm font-bold uppercase mt-2">Open 24/7</p>
                </div>

                <!-- 1. Location -->
                <div class="glass-card p-8 rounded-2xl relative overflow-hidden flex-1">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-accent/10 rounded-bl-full -z-10 blur-2xl"></div>
                    <h3 class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase">Location & Landmark</h3>
                    <div class="text-gray-300 font-light leading-relaxed mb-6">
                        <?php echo wp_kses_post($lapulapu_address); ?>
                    </div>
                    <div class="p-4 bg-black/40 border border-white/5 rounded-xl">
                        <p class="text-sm text-gray-400 font-light"><strong
                                class="text-white font-medium">Landmark:</strong>
                            <?php echo esc_html($lapulapu_landmark); ?>
                        </p>
                    </div>
                </div>

                <!-- 2. Contact Details & Availability -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="glass-card p-6 rounded-2xl">
                        <h3
                            class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            Call Us
                        </h3>
                        <p class="text-lg font-medium text-white mb-2">
                            <?php echo esc_html($lapulapu_phone_1); ?>
                        </p>
                        <p class="text-lg font-medium text-white mb-4">
                            <?php echo esc_html($lapulapu_phone_2); ?>
                        </p>

                        <h3 class="text-sm font-bold text-accent tracking-[0.2em] mb-2 mt-6 uppercase">Email</h3>
                        <a href="mailto:<?php echo esc_attr($lapulapu_email); ?>"
                            class="text-white hover:text-accent transition-colors font-medium text-sm break-all">
                            <?php echo esc_html($lapulapu_email); ?>
                        </a>
                    </div>

                    <!-- Availability -->
                    <div class="glass-card p-6 rounded-2xl">
                        <h3
                            class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Availability
                        </h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex justify-between items-center border-b border-border pb-2">
                                <span class="text-gray-400 font-light">Store Dine-In</span>
                                <span class="text-white font-medium">24 / 7</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-border pb-2">
                                <span class="text-gray-400 font-light">FoodPanda</span>
                                <span class="text-white font-medium">4am - 12am</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-border pb-2">
                                <span class="text-gray-400 font-light">GrabFood</span>
                                <span class="text-white font-medium">24 / 7</span>
                            </div>
                            <div class="flex justify-between items-center pb-2">
                                <span class="text-gray-400 font-light">painitan.com</span>
                                <span class="text-white font-medium">24 / 7</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="h-[350px]">
                    <div
                        class="w-full h-full rounded-3xl overflow-hidden border border-border shadow-2xl relative group">
                        <iframe
                            class="w-full h-full grayscale group-hover:grayscale-0 transition-all duration-700 opacity-90 group-hover:opacity-100"
                            src="<?php echo esc_url($lapulapu_map_embed); ?>" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        <div class="absolute inset-0 border-4 border-black pointer-events-none rounded-3xl"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Global Socials -->
<section class="py-16 bg-[#121212] border-y border-border">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="glass-card p-10 rounded-3xl flex flex-col md:flex-row items-center justify-between shadow-2xl">
            <div class="mb-6 md:mb-0">
                <h2 class="text-2xl font-bold text-white font-syne mb-2">Join our Community</h2>
                <p class="text-gray-400 font-light">Follow us for updates on both branches, new menus, and exclusive
                    offers.</p>
            </div>
            <div class="flex gap-4 w-full md:w-auto">
                <?php
                $front_page_id = get_option('page_on_front');
                $facebook_link = function_exists('get_field') && get_field('facebook_link', $front_page_id) ? get_field('facebook_link', $front_page_id) : '#';
                $youtube_link = function_exists('get_field') && get_field('youtube_link', $front_page_id) ? get_field('youtube_link', $front_page_id) : '#';
                ?>
                <a href="<?php echo esc_url($facebook_link); ?>" target="_blank"
                    class="btn-accent px-8 py-4 rounded-full text-sm font-syne flex-1 md:flex-none text-center shadow-lg">Facebook
                    Page</a>
                <a href="<?php echo esc_url($youtube_link); ?>" target="_blank"
                    class="btn-outline px-8 py-4 rounded-full text-sm font-syne flex-1 md:flex-none text-center hover:bg-red-600 hover:border-red-600 hover:text-white transition-colors">YouTube
                    Channel</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>