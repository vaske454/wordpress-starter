<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            printf(
                esc_html(_n('%s Comment', '%s Comments', get_comments_number(), 'server_theme')),
                number_format_i18n(get_comments_number())
            );
            ?>
        </h2>

        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ul',
                'short_ping'  => true,
                'avatar_size' => 42,
            ));
            ?>
        </ul>
    <?php endif; ?>

    <?php if (!comments_open() && get_comments_number()) : ?>
        <p class="no-comments">
            <?php esc_html_e('Comments are closed.', 'server_theme'); ?>
        </p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>
