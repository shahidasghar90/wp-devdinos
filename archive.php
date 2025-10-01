<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DevDinos
 */

get_header();
?>

<main id="primary" class="site-main py-20">
    <div class="container mx-auto px-4">
        <header class="page-header mb-8">
            <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>
        </header><!-- .page-header -->

        <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden'); ?>>
                        <div class="p-6">
                            <header class="entry-header">
                                <?php the_title( sprintf( '<h2 class="entry-title text-xl font-bold mb-2"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            </header><!-- .entry-header -->

                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div><!-- .entry-summary -->
                        </div>
                    </article><!-- #post-<?php the_ID(); ?> -->
                    <?php
                endwhile;
                ?>
            </div>
            <?php
            the_posts_navigation();
        else :
            ?>
            <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'devdinos' ); ?></p>
            <?php
        endif;
        ?>
    </div>
</main><!-- #main -->

<?php
get_footer();
