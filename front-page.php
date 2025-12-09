<?php get_header(); ?>

<?php
$highlight_post = null;

// If WooCommerce is active prefer spotlighting a product with an image.
if ( function_exists('wc_get_product') ) {
    $products = get_posts([
        'post_type'   => 'product',
        'numberposts' => 1,
        'meta_key'    => '_thumbnail_id',
    ]);
    if ( $products ) {
        $highlight_post = $products[0];
    }
}

// Fallback to a regular post if no product is available or WooCommerce isn't active.
if ( ! $highlight_post ) {
    $posts = get_posts([
        'numberposts' => 1,
        'meta_key'    => '_thumbnail_id',
    ]);
    $highlight_post = $posts ? $posts[0] : null;
}

$shop_page = function_exists('wc_get_page_id') ? get_permalink(wc_get_page_id('shop')) : '';
$shop_link = $shop_page ? $shop_page : home_url('/');
?>

<section class="pf-hero">
    <div class="pf-shell pf-hero__inner">
        <div class="pf-hero__copy">
            <p class="pf-eyebrow"><?php esc_html_e('Poster House for Cinephiles', 'posterframe'); ?></p>
            <h1 class="pf-hero__title"><?php esc_html_e('Collect bold, limited-run movie posters.', 'posterframe'); ?></h1>
            <p class="pf-hero__lead"><?php esc_html_e('Curated art prints, signed variants, and gallery-grade finishes designed to make your walls feel like a premiere night.', 'posterframe'); ?></p>
            <div class="pf-cta-row">
                <a class="pf-button" href="<?php echo esc_url($shop_link); ?>"><?php esc_html_e('Shop Posters', 'posterframe'); ?></a>
                <a class="pf-button pf-button--ghost" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php esc_html_e('Explore Stories', 'posterframe'); ?></a>
            </div>
            <div class="pf-metrics">
                <div><span class="pf-metrics__number">150+</span><span class="pf-metrics__label"><?php esc_html_e('Titles curated', 'posterframe'); ?></span></div>
                <div><span class="pf-metrics__number">24h</span><span class="pf-metrics__label"><?php esc_html_e('Average ship time', 'posterframe'); ?></span></div>
                <div><span class="pf-metrics__number">Museum</span><span class="pf-metrics__label"><?php esc_html_e('Grade stock', 'posterframe'); ?></span></div>
            </div>
        </div>
        <div class="pf-hero__poster">
            <?php if ($highlight_post && has_post_thumbnail($highlight_post->ID)) : ?>
                <a href="<?php echo esc_url(get_permalink($highlight_post->ID)); ?>" class="pf-hero__thumb">
                    <?php echo get_the_post_thumbnail($highlight_post->ID, 'posterframe-portrait'); ?>
                    <span class="pf-hero__badge"><?php esc_html_e('Featured', 'posterframe'); ?></span>
                </a>
            <?php else : ?>
                <div class="pf-hero__placeholder">
                    <span><?php esc_html_e('Add a featured image to any post to see it spotlighted here.', 'posterframe'); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="pf-section">
    <div class="pf-shell">
        <header class="pf-section__head">
            <h2 class="pf-eyebrow"><?php esc_html_e('Fresh Drops', 'posterframe'); ?></h2>
            <p class="pf-lead"><?php esc_html_e('New releases and recent additions to the poster vault.', 'posterframe'); ?></p>
        </header>
        <?php
        $grid = new WP_Query([
            'posts_per_page' => 6,
        ]);
        if ($grid->have_posts()) : ?>
            <div class="pf-grid pf-grid--3">
                <?php while ($grid->have_posts()) : $grid->the_post();
                    get_template_part('template-parts/content/content', get_post_type());
                endwhile; ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <?php get_template_part('template-parts/content/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>

<section class="pf-section pf-section--accent">
    <div class="pf-shell pf-cta">
        <div>
            <h2 class="pf-cta__title"><?php esc_html_e('Looking for a specific title?', 'posterframe'); ?></h2>
            <p class="pf-lead"><?php esc_html_e('Send us your grail wishlist. We hunt for rare theatrical prints, festival one-sheets, and alternate art.', 'posterframe'); ?></p>
        </div>
        <a class="pf-button" href="mailto:hello@example.com?subject=Poster%20Request">
            <?php esc_html_e('Request a poster', 'posterframe'); ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
