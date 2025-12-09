<?php get_header(); ?>

<section class="pf-section">
    <div class="pf-shell">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/content/content', 'single'); ?>
            <?php if (comments_open() || get_comments_number()) {
                comments_template();
            } ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>
