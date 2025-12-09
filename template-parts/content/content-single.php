<article id="post-<?php the_ID(); ?>" <?php post_class('pf-single'); ?>>
    <header class="pf-single__head">
        <p class="pf-eyebrow"><?php esc_html_e('Poster Spotlight', 'posterframe'); ?></p>
        <h1 class="pf-title"><?php the_title(); ?></h1>
        <p class="pf-card__meta"><?php echo esc_html(get_the_date()); ?></p>
    </header>

    <?php if (has_post_thumbnail()) : ?>
        <div class="pf-single__media">
            <?php the_post_thumbnail('posterframe-portrait'); ?>
        </div>
    <?php endif; ?>

    <div class="pf-content">
        <?php the_content(); ?>
    </div>

    <footer class="pf-single__footer">
        <div class="pf-tags">
            <?php the_tags('', ' ', ''); ?>
        </div>
        <div class="pf-share">
            <span class="pf-eyebrow"><?php esc_html_e('Share', 'posterframe'); ?></span>
            <a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode(get_the_title()); ?>&url=<?php echo rawurlencode(get_permalink()); ?>" target="_blank" rel="noopener" class="pf-button pf-button--ghost">X / Twitter</a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode(get_permalink()); ?>" target="_blank" rel="noopener" class="pf-button pf-button--ghost">Facebook</a>
        </div>
    </footer>
</article>
