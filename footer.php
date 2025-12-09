    </main>
    <footer class="pf-footer">
        <div class="pf-shell pf-footer__grid">
            <div>
                <h3 class="pf-footer__title"><?php esc_html_e('Stay In The Frame', 'posterframe'); ?></h3>
                <p class="pf-footer__copy"><?php esc_html_e('Drop your email to hear about new posters, signed prints, and limited drops.', 'posterframe'); ?></p>
                <form class="pf-newsletter" action="#" method="post">
                    <label class="screen-reader-text" for="pf-news-email"><?php esc_html_e('Email address', 'posterframe'); ?></label>
                    <input type="email" id="pf-news-email" name="email" placeholder="<?php esc_attr_e('you@example.com', 'posterframe'); ?>" required>
                    <button type="submit" class="pf-button"><?php esc_html_e('Notify Me', 'posterframe'); ?></button>
                </form>
            </div>
            <div>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'pf-footer-menu',
                    'fallback_cb'    => '__return_false',
                ]);
                ?>
            </div>
            <div class="pf-footer__widgets">
                <?php if (is_active_sidebar('footer-widgets')) {
                    dynamic_sidebar('footer-widgets');
                } ?>
            </div>
        </div>
        <div class="pf-footer__meta">
            <div class="pf-shell pf-footer__meta-inner">
                <span>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?></span>
                <span><?php esc_html_e('Crafted for poster collectors.', 'posterframe'); ?></span>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
