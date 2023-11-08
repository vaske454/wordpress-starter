<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e('Oops! That page can&rsquo;t be found.', 'server_theme'); ?>
                </h1>
            </header>

            <div class="page-content">
                <p>
                    <?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'server_theme'); ?>
                </p>

                <?php get_search_form(); ?>

            </div>

        </main>
    </div>

<?php
get_sidebar();
get_footer();
