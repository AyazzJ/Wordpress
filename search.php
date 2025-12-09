<?php get_header(); ?>

<section class="pf-section">
    <div class="pf-shell">
        <header class="pf-section__head">
            <p class="pf-eyebrow"><?php printf(esc_html__('Search: %s', 'posterframe'), get_search_query()); ?></p>
            <p class="pf-lead"><?php esc_html_e('Looking for a title, director, or style? Here are your results.', 'posterframe'); ?></p>
        </header>

        <?php if (have_posts()) : ?>
            <div class="pf-grid pf-grid--3">
                <?php while (have_posts()) : the_post();
                    get_template_part('template-parts/content/content', get_post_type());
                endwhile; ?>
            </div>
            <div class="pf-pagination">
                <?php the_posts_pagination(); ?>
            </div>
        <?php else : ?>
            <?php get_template_part('template-parts/content/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
