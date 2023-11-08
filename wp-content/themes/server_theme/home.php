<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php single_post_title(); ?></h1>
                </header>

                <?php
                while (have_posts()) : the_post();
                 get_template_part('template-views/shared/content');

                endwhile;
                the_posts_pagination();

            else :
                get_template_part('template-views/shared/content', 'none');

            endif;
            ?>

        </main>
    </div>

<?php
get_sidebar();
get_footer();
