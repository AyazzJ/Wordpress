<?php
/**
 * Template Name: Contact
 */

get_header();
?>

<section class="pf-section">
    <div class="pf-shell">
        <header class="pf-section__head">
            <p class="pf-eyebrow"><?php esc_html_e('Contact', 'posterframe'); ?></p>
            <h1 class="pf-title"><?php the_title(); ?></h1>
            <p class="pf-lead"><?php esc_html_e('Reach out for poster requests, order questions, or collaboration ideas.', 'posterframe'); ?></p>
        </header>

        <div class="pf-grid pf-grid--3">
            <div class="pf-card">
                <div class="pf-card__body">
                    <p class="pf-eyebrow"><?php esc_html_e('Email', 'posterframe'); ?></p>
                    <p><a href="mailto:ayaz@jubaer.com">ayaz@jubaer.com</a></p>
                </div>
            </div>
            <div class="pf-card">
                <div class="pf-card__body">
                    <p class="pf-eyebrow"><?php esc_html_e('Phone', 'posterframe'); ?></p>
                    <p><a href="tel:+33660385849">+33 6 6038 58 49</a></p>
                </div>
            </div>
            <div class="pf-card">
                <div class="pf-card__body">
                    <p class="pf-eyebrow"><?php esc_html_e('Studio Hours', 'posterframe'); ?></p>
                    <p><?php esc_html_e('Mon–Fri, 9am–6pm', 'posterframe'); ?></p>
                </div>
            </div>
        </div>

        <div class="pf-content" style="margin-top: 24px;">
            <?php if (have_posts()) : while (have_posts()) : the_post();
                the_content();
            endwhile; endif; ?>
        </div>

        <div class="pf-card" style="margin-top: 24px;">
            <div class="pf-card__body">
                <p class="pf-eyebrow"><?php esc_html_e('Quick note', 'posterframe'); ?></p>
                <p><?php esc_html_e('If you use a contact form plugin, insert its shortcode in the page content. Otherwise, the links above work right away.', 'posterframe'); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
