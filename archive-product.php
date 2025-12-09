<?php
/**
 * Shop (WooCommerce) archive
 */

get_header();
?>

<section class="pf-section">
    <div class="pf-shell">
        <header class="pf-section__head">
            <p class="pf-eyebrow"><?php esc_html_e('Boutique', 'posterframe'); ?></p>
            <h1 class="pf-title"><?php woocommerce_page_title(); ?></h1>
            <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
                <p class="pf-lead"><?php echo esc_html(get_bloginfo('description')); ?></p>
            <?php endif; ?>
        </header>

        <?php if (woocommerce_product_loop()) : ?>
            <?php woocommerce_output_all_notices(); ?>
            <?php woocommerce_catalog_ordering(); ?>
            <?php woocommerce_product_loop_start(); ?>

            <?php while (have_posts()) : the_post(); ?>
                <?php wc_get_template_part('content', 'product'); ?>
            <?php endwhile; ?>

            <?php woocommerce_product_loop_end(); ?>
            <?php woocommerce_pagination(); ?>
        <?php else : ?>
            <?php wc_get_template('loop/no-products-found.php'); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
