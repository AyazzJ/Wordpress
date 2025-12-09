<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-nav-state="closed">
<?php wp_body_open(); ?>
<header class="pf-header">
    <div class="pf-shell">
        <div class="pf-brand">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="pf-brand__text"><?php bloginfo('name'); ?></a>
            <?php endif; ?>
            <p class="pf-tagline"><?php bloginfo('description'); ?></p>
        </div>
        <button class="pf-nav-toggle" aria-expanded="false" aria-controls="primary-menu">
            <span class="screen-reader-text"><?php esc_html_e('Toggle navigation', 'posterframe'); ?></span>
            <span class="pf-burger"></span>
        </button>
        <nav class="pf-nav" id="primary-menu">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'pf-menu',
                'fallback_cb'    => function () {
                    echo '<ul class="pf-menu">';
                    wp_list_pages(['title_li' => '']);
                    echo '</ul>';
                },
            ]);
            ?>
            <div class="pf-nav__cta">
                <a class="pf-button pf-button--ghost" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php esc_html_e('Browse Posters', 'posterframe'); ?></a>
            </div>
        </nav>
    </div>
</header>
<main class="pf-main">
