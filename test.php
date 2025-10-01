<?php
/**
 * Template Name: Custom Page Template
 */

get_header(); ?>

<main id="primary" class="site-main py-20">
    <div class="container mx-auto px-4">
        <div class="prose lg:prose-xl dark:prose-invert mx-auto">
            <?php
            // Start the Loop.
            while ( have_posts() ) :
                the_post();

                the_title( '<h1 class="entry-title">', '</h1>' );
                the_content();

            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
