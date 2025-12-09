<?php get_header(); ?>

<section class="pf-section">
    <div class="pf-shell">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('pf-page'); ?>>
                <header class="pf-page__head">
                    <p class="pf-eyebrow"><?php esc_html_e('Page', 'posterframe'); ?></p>
                    <h1 class="pf-title"><?php the_title(); ?></h1>
                </header>
                <div class="pf-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
