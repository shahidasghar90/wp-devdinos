<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DevDinos
 */

get_header();
?>

<main id="primary" class="site-main py-20">
    <div class="container mx-auto px-4">
        <div class="prose lg:prose-xl dark:prose-invert mx-auto">
            <?php
            while ( have_posts() ) :
                the_post();

                the_title( '<h1 class="entry-title">', '</h1>' );
                the_content();

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
