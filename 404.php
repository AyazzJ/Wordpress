<?php get_header(); ?>

<section class="pf-section pf-section--narrow">
    <div class="pf-shell pf-404">
        <p class="pf-eyebrow"><?php esc_html_e('404', 'posterframe'); ?></p>
        <h1 class="pf-title"><?php esc_html_e('Frame not found.', 'posterframe'); ?></h1>
        <p class="pf-lead"><?php esc_html_e('The poster you are looking for might have sold out or moved. Try searching again.', 'posterframe'); ?></p>
        <?php get_search_form(); ?>
        <a class="pf-button" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back to home', 'posterframe'); ?></a>
    </div>
</section>

<?php get_footer(); ?>
