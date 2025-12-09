<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="pf-comments">
    <?php if (have_comments()) : ?>
        <h2 class="pf-comments__title">
            <?php
            printf(
                esc_html(_nx('One comment', '%1$s comments', get_comments_number(), 'comments title', 'posterframe')),
                number_format_i18n(get_comments_number())
            );
            ?>
        </h2>

        <ol class="pf-comment-list">
            <?php
            wp_list_comments([
                'style'      => 'ol',
                'short_ping' => true,
            ]);
            ?>
        </ol>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="pf-comment-nav" aria-label="<?php esc_attr_e('Comments navigation', 'posterframe'); ?>">
                <div class="pf-comment-nav__prev"><?php previous_comments_link(__('Older comments', 'posterframe')); ?></div>
                <div class="pf-comment-nav__next"><?php next_comments_link(__('Newer comments', 'posterframe')); ?></div>
            </nav>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number()) : ?>
        <p class="pf-comments__closed"><?php esc_html_e('Comments are closed.', 'posterframe'); ?></p>
    <?php endif; ?>

    <?php comment_form(["class_submit" => "pf-button"]); ?>
</div>
