<?php
/**
 * Template Name: Cart / Panier
 */

get_header();
?>

<section class="pf-section">
    <div class="pf-shell">
        <header class="pf-section__head">
            <p class="pf-eyebrow"><?php esc_html_e('Your Cart', 'posterframe'); ?></p>
            <h1 class="pf-title"><?php the_title(); ?></h1>
            <p class="pf-lead"><?php esc_html_e('Review items before checkout.', 'posterframe'); ?></p>
        </header>

        <div class="pf-content">
            <?php if (class_exists('WooCommerce')) {
                echo do_shortcode('[woocommerce_cart]');
            } else {
                echo '<p>' . esc_html__('WooCommerce is not active. Activate it to show the cart.', 'posterframe') . '</p>';
            } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
