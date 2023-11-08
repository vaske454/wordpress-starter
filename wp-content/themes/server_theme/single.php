<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-meta">
                            <?php
                            printf(
                                esc_html__('Posted on %s by %s', 'server_theme'),
                                get_the_date(),
                                get_the_author()
                            );
                            ?>
                        </div>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <footer class="entry-footer">
                        <?php comments_template(); ?>
                    </footer>
                </article>

            <?php endwhile; ?>

        </main>
    </div>

<?php
get_sidebar();
get_footer();
