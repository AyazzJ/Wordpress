<?php
/**
 * Template Name: About / À propos
 */

get_header();
?>

<section class="pf-section">
    <div class="pf-shell">
        <header class="pf-section__head">
            <p class="pf-eyebrow"><?php esc_html_e('Our Story', 'posterframe'); ?></p>
            <h1 class="pf-title"><?php the_title(); ?></h1>
            <p class="pf-lead"><?php esc_html_e('Why we obsess over cinematic art prints and how we curate every drop.', 'posterframe'); ?></p>
        </header>

        <div class="pf-content">
            <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile; endif; ?>

            <div class="pf-grid pf-grid--3" style="margin-top: 28px;">
                <div>
                    <p class="pf-eyebrow"><?php esc_html_e('Curation', 'posterframe'); ?></p>
                    <p><?php esc_html_e('We source theatrical one-sheets, gallery variants, and independent artist runs with verified provenance.', 'posterframe'); ?></p>
                </div>
                <div>
                    <p class="pf-eyebrow"><?php esc_html_e('Quality', 'posterframe'); ?></p>
                    <p><?php esc_html_e('Museum-grade paper, archival inks, and careful tube packing so posters arrive mint.', 'posterframe'); ?></p>
                </div>
                <div>
                    <p class="pf-eyebrow"><?php esc_html_e('Community', 'posterframe'); ?></p>
                    <p><?php esc_html_e('Drops announced to subscribers first; limited runs remain limited—no surprise reprints.', 'posterframe'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
