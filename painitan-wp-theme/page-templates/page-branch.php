<?php
/**
 * Template Name: Branch Template
 * 
 * Used for individual branch pages like Iligan and Lapu-Lapu.
 */

get_header();

// ACF Field fallbacks for the Hero Section
$branch_name = get_field('branch_name') ? get_field('branch_name') : get_the_title();
$hero_headline = get_field('hero_headline') ? get_field('hero_headline') : 'A Taste of Home, Available 24/7.';
$hero_subheadline = get_field('hero_subheadline') ? get_field('hero_subheadline') : 'Experience premium Filipino delicacies prepared fresh.';
$hero_image = get_field('hero_image') ? get_field('hero_image')['url'] : get_template_directory_uri() . '/assets/images/painitan_tapsilog_1773123184902.png';
$order_link = get_field('order_link') ? get_field('order_link') : 'https://utak.io/store/painitan';

// ACF Field fallbacks for the Story Section
$story_image = get_field('story_image') ? get_field('story_image')['url'] : get_template_directory_uri() . '/assets/images/painitan_lugaw_1773123200372.png';
$story_headline = get_field('story_headline') ? get_field('story_headline') : 'Mastering local delicacies since 2011.';
$story_paragraph_1 = get_field('story_paragraph_1') ? get_field('story_paragraph_1') : 'Painitan.com is an evolution of the beloved Painitan Ni Papito...';
$story_paragraph_2 = get_field('story_paragraph_2') ? get_field('story_paragraph_2') : 'We specialize in dishes that comfort the soul...';

// Gallery (ACF Free standard image fields)
$gallery_images = array();
if (function_exists('get_field')) {
    for ($i = 1; $i <= 6; $i++) {
        $img = get_field('gallery_image_' . $i);
        if ($img) {
            $gallery_images[] = $img;
        }
    }
}
?>

<!-- Hero Section -->
<header class="relative h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo esc_url($hero_image); ?>" alt="Hero Dish"
            class="w-full h-full object-cover object-center opacity-40 mix-blend-luminosity scale-105 animate-[zoomOut_20s_ease-out_forwards]">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#0c0c0c]/80 to-[#0c0c0c]"></div>
    </div>

    <div class="relative z-10 text-center px-6 max-w-5xl mx-auto mt-20">
        <div
            class="inline-block mb-4 px-4 py-1.5 rounded-full border border-accent/30 text-accent text-xs font-bold tracking-widest uppercase animate-reveal">
            <?php echo esc_html($branch_name); ?>
        </div>
        <h1
            class="text-5xl md:text-8xl font-black font-syne leading-[1.1] tracking-tight mb-8 animate-reveal delay-100">
            <?php echo wp_kses_post($hero_headline); ?>
        </h1>
        <p
            class="text-lg md:text-xl text-gray-400 font-light max-w-2xl mx-auto mb-10 animate-reveal delay-200 leading-relaxed">
            <?php echo esc_html($hero_subheadline); ?>
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6 animate-reveal delay-300">
            <a href="<?php echo esc_url($order_link); ?>" target="_blank"
                class="btn-accent px-10 py-4 rounded-full text-sm w-full sm:w-auto text-center flex items-center justify-center gap-2">
                Start Order
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
            <a href="#about"
                class="btn-outline px-10 py-4 rounded-full text-sm w-full sm:w-auto text-center hover:bg-white hover:text-black">
                Explore Menu
            </a>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce hidden md:block opacity-50">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14l-7 7m0 0l-7-7m7 7V3">
            </path>
        </svg>
    </div>
</header>

<!-- The Story (About) -->
<section id="about" class="py-32 relative">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            <div class="lg:w-1/2">
                <div class="relative img-wrap rounded-2xl">
                    <img src="<?php echo esc_url($story_image); ?>" alt="Our Story"
                        class="w-full h-[600px] object-cover img-zoom">
                    <div class="absolute inset-0 border border-white/10 rounded-2xl pointer-events-none"></div>
                </div>
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase">Our Heritage</h2>
                <h3 class="text-4xl md:text-5xl font-syne font-bold mb-8 leading-tight">
                    <?php echo esc_html($story_headline); ?>
                </h3>
                <p class="text-gray-400 mb-6 leading-relaxed font-light text-lg">
                    <?php echo nl2br(esc_html($story_paragraph_1)); ?>
                </p>
                <p class="text-gray-400 mb-10 leading-relaxed font-light text-lg">
                    <?php echo nl2br(esc_html($story_paragraph_2)); ?>
                </p>

                <div class="grid grid-cols-2 gap-8 border-t border-border pt-8">
                    <div>
                        <p class="text-4xl font-syne font-bold text-white mb-2">24h</p>
                        <p class="text-sm text-gray-500 uppercase tracking-wider font-semibold">Service</p>
                    </div>
                    <div>
                        <p class="text-4xl font-syne font-bold text-white mb-2">10+</p>
                        <p class="text-sm text-gray-500 uppercase tracking-wider font-semibold">Signature Dishes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid (Static structure, content can be dynamically pulled as needed) -->
<section id="services" class="py-32 bg-[#121212] border-y border-border">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <h2 class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase">We Live To Serve</h2>
            <h3 class="text-4xl md:text-5xl font-syne font-bold mb-6">Always accessible, however you prefer.</h3>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Hardcoded for structural integrity, client only needs to change branch-specific text usually -->
            <div class="glass-card p-8 rounded-2xl">
                <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center mb-6 text-accent">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                    </svg>
                </div>
                <h4 class="text-xl font-syne font-bold mb-3 text-white">Dine-In</h4>
                <p class="text-gray-400 font-light text-sm leading-relaxed">We are open 24 hours, Monday through Sunday.
                </p>
            </div>

            <div class="glass-card p-8 rounded-2xl">
                <div class="w-12 h-12 rounded-full bg-pink-500/10 flex items-center justify-center mb-6 text-pink-500">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-2-12.5v5l4 2.5-4 2.5v-5z" />
                    </svg>
                </div>
                <h4 class="text-xl font-syne font-bold mb-3 text-white">FoodPanda</h4>
                <p class="text-gray-400 font-light text-sm leading-relaxed">Available for rapid delivery from 4:00 AM
                    straight through to midnight.</p>
            </div>

            <div class="glass-card p-8 rounded-2xl">
                <div
                    class="w-12 h-12 rounded-full bg-green-500/10 flex items-center justify-center mb-6 text-green-500">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M19 8l-4 4h3c0 3.31-2.69 6-6 6-1.01 0-1.97-.25-2.8-.7l-1.46 1.46C8.97 19.54 10.43 20 12 20c4.42 0 8-3.58 8-8h3l-4-4zM6 12c0-3.31 2.69-6 6-6 1.01 0 1.97.25 2.8.7l1.46-1.46C15.03 4.46 13.57 4 12 4c-4.42 0-8 3.58-8 8H1l4 4 4-4H6z" />
                    </svg>
                </div>
                <h4 class="text-xl font-syne font-bold mb-3 text-white">GrabFood</h4>
                <p class="text-gray-400 font-light text-sm leading-relaxed">Round-the-clock delivery service. We are
                    available 24/7 on the Grab app.</p>
            </div>
        </div>
    </div>
</section>

<!-- Dynamic Gallery -->
<section id="gallery" class="py-32 relative">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="flex justify-between items-end mb-16 border-b border-border pb-6">
            <div>
                <h2 class="text-sm font-bold text-accent tracking-[0.2em] mb-4 uppercase">Visuals</h2>
                <h3 class="text-4xl md:text-5xl font-syne font-bold">Culinary Art.</h3>
            </div>
        </div>

        <?php if ($gallery_images): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($gallery_images as $image): ?>
                    <div class="img-wrap h-[350px]">
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                            class="w-full h-full object-cover img-zoom">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Fallback Static Gallery if no ACF images -->
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <div class="md:col-span-7 img-wrap h-[500px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/painitan_tapsilog_1773123184902.png"
                        class="w-full h-full object-cover img-zoom" alt="Tapsilog">
                </div>
                <div class="md:col-span-5 flex flex-col gap-6">
                    <div class="img-wrap h-[240px]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/painitan_lumpia_1773123214060.png"
                            class="w-full h-full object-cover img-zoom" alt="Lumpia">
                    </div>
                    <div class="img-wrap h-[236px]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/painitan_lugaw_1773123200372.png"
                            class="w-full h-full object-cover img-zoom" alt="Lugaw">
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Grand CTA -->
<section class="relative py-40 overflow-hidden border-t border-border">
    <div class="relative z-10 container mx-auto px-6 text-center max-w-4xl">
        <h2 class="text-5xl md:text-7xl font-syne font-black mb-8">Ready to order?</h2>
        <p class="text-xl text-gray-400 font-light mb-12">Skip the line. Place your order directly through our UTAK
            platform.</p>
        <a href="<?php echo esc_url($order_link); ?>" target="_blank"
            class="btn-accent px-12 py-5 rounded-full text-base inline-flex items-center gap-3">
            Order via UTAK
        </a>
    </div>
</section>

<?php get_footer(); ?>