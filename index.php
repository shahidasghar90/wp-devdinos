<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devdinos
 */

get_header();
?>

<div class="container mx-auto px-4 py-8">
    <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
            <?php if ( have_posts() ) : ?>
                <?php if ( is_home() && ! is_front_page() ) : ?>
                    <header class="page-header mb-8">
                        <h1 class="page-title text-3xl font-bold"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <?php
                // Start the Loop.
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
                        <header class="entry-header">
                            <?php the_title( sprintf( '<h2 class="entry-title text-2xl font-bold mb-2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header>

                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer">
                           <a href="<?php echo esc_url( get_permalink() ); ?>" class="text-blue-500 hover:underline">Read More</a>
                        </footer>
                    </article>
                    <?php
                endwhile;

                // Previous/next page navigation.
                the_posts_pagination(
                    array(
                        'prev_text' => __( 'Previous', 'devdinos' ),
                        'next_text' => __( 'Next', 'devdinos' ),
                    )
                );

            else :
                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();