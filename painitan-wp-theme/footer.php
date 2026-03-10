<!-- High-end Footer -->
<footer class="bg-black pt-20 pb-10 border-t border-border <?php if (!is_front_page())
    echo 'mt-20'; ?>">
    <div class="container mx-auto px-6 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <!-- Brand -->
            <div class="md:col-span-2">
                <a href="<?php echo home_url('/'); ?>" class="block mb-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Painitan Logo"
                        class="h-16 w-auto object-contain">
                </a>
                <p class="text-gray-500 font-light text-sm max-w-sm leading-relaxed mb-6">
                    <?php
                    // Fetch global text from the Front Page ID
                    $front_page_id = get_option('page_on_front');
                    if (function_exists('get_field') && get_field('footer_about_text', $front_page_id)) {
                        echo esc_html(get_field('footer_about_text', $front_page_id));
                    } else {
                        echo "Authentic Filipino dining evolved. Serving high-quality local delicacies 24/7.";
                    }
                    ?>
                </p>
                <div class="flex space-x-4">
                    <a href="https://facebook.com" target="_blank"
                        class="w-10 h-10 rounded-full border border-border flex items-center justify-center text-gray-400 hover:text-white hover:border-white transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.675 0h-21.35C.597 0 0 .597 0 1.325v21.351C0 23.403.597 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.597 1.323-1.325v-21.35C24 .597 23.403 0 22.675 0z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div>
                <h4 class="text-white font-syne font-bold mb-6 text-sm uppercase tracking-wider">Branches</h4>
                <ul class="space-y-3 text-gray-500 font-light text-sm">
                    <li><a href="<?php echo home_url('/iligan'); ?>"
                            class="hover:text-accent transition-colors">Iligan</a></li>
                    <li><a href="<?php echo home_url('/lapu-lapu'); ?>"
                            class="hover:text-accent transition-colors">Lapu-Lapu</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-syne font-bold mb-6 text-sm uppercase tracking-wider">Delivery Partners</h4>
                <ul class="space-y-3 text-gray-500 font-light text-sm">
                    <li><a href="https://utak.io/store/painitan" class="hover:text-accent transition-colors">Direct
                            (UTAK)</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">GrabFood</a></li>
                    <li><a href="#" class="hover:text-accent transition-colors">FoodPanda</a></li>
                </ul>
            </div>
        </div>

        <div
            class="border-t border-border pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-600 font-medium tracking-wide">
            <p>&copy;
                <?php echo date('Y'); ?> PAINITAN.COM. ALL RIGHTS RESERVED.
            </p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="<?php echo home_url('/contact'); ?>" class="hover:text-gray-300">Contact Us</a>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Menu Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const iconBars = document.querySelector('.menu-icon-bars');
        const iconClose = document.querySelector('.menu-icon-close');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        let isMenuOpen = false;

        if (btn && menu) {
            function toggleMenu() {
                isMenuOpen = !isMenuOpen;
                if (isMenuOpen) {
                    menu.classList.remove('translate-x-full');
                    iconBars.classList.add('hidden');
                    iconClose.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                } else {
                    menu.classList.add('translate-x-full');
                    iconBars.classList.remove('hidden');
                    iconClose.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            }

            btn.addEventListener('click', toggleMenu);

            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (isMenuOpen) toggleMenu();
                });
            });
        }
    });
</script>

<?php wp_footer(); ?>
</body>

</html>