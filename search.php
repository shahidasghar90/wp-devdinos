<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package DevDinos
 */

get_header();
?>

<main id="primary" class="site-main py-20">
    <div class="container mx-auto px-4">
        <header class="page-header mb-8">
            <h1 class="page-title">
                <?php
                /* translators: %s: search query. */
                printf( esc_html__( 'Search Results for: %s', 'devdinos' ), '<span>' . get_search_query() . '</span>' );
                ?>
            </h1>
        </header><!-- .page-header -->

        <?php if ( have_posts() ) : ?>
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('mb-8'); ?>>
                    <header class="entry-header">
                        <?php the_title( sprintf( '<h2 class="entry-title text-2xl font-bold"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                    </header><!-- .entry-header -->

                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div><!-- .entry-summary -->
                </article><!-- #post-<?php the_ID(); ?> -->
                <?php
            endwhile;

            the_posts_navigation();

        else :
            ?>
            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'devdinos' ); ?></p>
            <?php
                get_search_form();
        endif;
        ?>
    </div>
</main><!-- #main -->

<?php
get_footer();
