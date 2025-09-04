<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header mb-8">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <div class="entry-meta text-gray-500">
                            <span class="posted-on"><?php echo get_the_date(); ?></span>
                            <span class="byline"> by <?php the_author(); ?></span>
                        </div>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer mt-8">
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                        ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
