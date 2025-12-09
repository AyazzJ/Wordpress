<article id="post-<?php the_ID(); ?>" <?php post_class('pf-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a class="pf-card__thumb" href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('posterframe-portrait'); ?>
        </a>
    <?php endif; ?>
    <div class="pf-card__body">
        <h2 class="pf-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="pf-card__meta"><?php echo esc_html(get_the_date()); ?></p>
        <div class="pf-card__excerpt"><?php the_excerpt(); ?></div>
        <div class="pf-card__footer">
            <a class="pf-button pf-button--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e('View Poster', 'posterframe'); ?></a>
        </div>
    </div>
</article>
