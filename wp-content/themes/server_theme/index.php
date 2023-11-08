<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package server_theme
 */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php
    endwhile;
else :
    ?>
    <p>No articles found.</p>
<?php
endif;

get_footer();