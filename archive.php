<?php get_header(); ?>

<section class="pf-section">
    <div class="pf-shell">
        <header class="pf-section__head">
            <p class="pf-eyebrow"><?php the_archive_title(); ?></p>
            <p class="pf-lead"><?php the_archive_description(); ?></p>
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
