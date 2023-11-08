<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e('Search Results for:', 'server_theme'); ?>
                    <span><?php echo get_search_query(); ?></span>
                </h1>
            </header>

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </header>

                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                <p><?php esc_html_e('No results found.', 'server_theme'); ?></p>

            <?php endif; ?>

        </main>
    </div>

<?php
get_sidebar();
get_footer();
