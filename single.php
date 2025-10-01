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

<!-- ====== Banner Section Start -->
<div class="relative z-10 overflow-hidden pb-[60px] pt-[120px] dark:bg-dark md:pt-[130px] lg:pt-[160px]">
    <div class="absolute bottom-0 left-0 w-full h-px bg-linear-to-r from-stroke/0 via-stroke to-stroke/0 dark:via-dark-3"></div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4">
                <div class="text-center">
                    <?php the_title('<h1 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">', '</h1>'); ?>
                    <ul class="flex items-center justify-center gap-[10px]">
                        <li>
                            <a href="<?php echo home_url(); ?>" class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white">
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center gap-[10px] text-base font-medium text-body-color">
                                <span class="text-body-color dark:text-dark-6"> / </span>
                                <?php the_title(); ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Banner Section End -->

<!-- ====== Blog Details Section Start -->
<section class="pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('prose lg:prose-xl dark:prose-invert mx-auto'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="wow fadeInUp relative z-20 mb-[50px] h-[300px] overflow-hidden rounded-[5px] md:h-[400px] lg:h-[500px]" data-wow-delay=".1s">
                                <?php the_post_thumbnail('full', ['class' => 'object-cover object-center w-full h-full']); ?>
                                <div class="absolute top-0 left-0 z-10 flex items-end w-full h-full bg-linear-to-t from-dark-700 to-transparent">
                                    <div class="flex flex-wrap items-center p-4 pb-4 sm:px-8">
                                        <div class="flex items-center mb-4 mr-5 md:mr-10">
                                            <div class="w-10 h-10 mr-4 overflow-hidden rounded-full">
                                                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', ['class' => 'w-full']); ?>
                                            </div>
                                            <p class="text-base font-medium text-white">
                                                By
                                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="text-white hover:opacity-70">
                                                    <?php the_author(); ?>
                                                </a>
                                            </p>
                                        </div>
                                        <div class="flex items-center mb-4">
                                            <p class="flex items-center mr-5 text-sm font-medium text-white md:mr-6">
                                                <span class="mr-3">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                                        <path d="M13.9998 2.6499H12.6998V2.0999C12.6998 1.7999 12.4498 1.5249 12.1248 1.5249C11.7998 1.5249 11.5498 1.7749 11.5498 2.0999V2.6499H4.4248V2.0999C4.4248 1.7999 4.1748 1.5249 3.8498 1.5249C3.5248 1.5249 3.2748 1.7749 3.2748 2.0999V2.6499H1.9998C1.1498 2.6499 0.424805 3.3499 0.424805 4.2249V12.9249C0.424805 13.7749 1.1248 14.4999 1.9998 14.4999H13.9998C14.8498 14.4999 15.5748 13.7999 15.5748 12.9249V4.1999C15.5748 3.3499 14.8498 2.6499 13.9998 2.6499ZM1.5748 7.2999H3.6998V9.7749H1.5748V7.2999ZM4.8248 7.2999H7.4498V9.7749H4.8248V7.2999ZM7.4498 10.8999V13.3499H4.8248V10.8999H7.4498V10.8999ZM8.5748 10.8999H11.1998V13.3499H8.5748V10.8999ZM8.5748 9.7749V7.2999H11.1998V9.7749H8.5748ZM12.2998 7.2999H14.4248V9.7749H12.2998V7.2999ZM1.9998 3.7749H3.2998V4.2999C3.2998 4.5999 3.5498 4.8749 3.8748 4.8749C4.1998 4.8749 4.4498 4.6249 4.4498 4.2999V3.7749H11.5998V4.2999C11.5998 4.5999 11.8498 4.8749 12.1748 4.8749C12.4998 4.8749 12.7498 4.6249 12.7498 4.2999V3.7749H13.9998C14.2498 3.7749 14.4498 3.9749 14.4498 4.2249V6.1749H1.5748V4.2249C1.5748 3.9749 1.7498 3.7749 1.9998 3.7749ZM1.5748 12.8999V10.8749H3.6998V13.3249H1.9998C1.7498 13.3499 1.5748 13.1499 1.5748 12.8999ZM13.9998 13.3499H12.2998V10.8999H14.4248V12.9249C14.4498 13.1749 14.2498 13.3499 13.9998 13.3499Z" />
                                                    </svg>
                                                </span>
                                                <?php echo get_the_date(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="flex relative">   
                            <div class="entry-content">
                                <?php the_content(); ?> 
                            </div><!-- .entry-content -->                           
                                <div class="w-full lg:w-4/12 px-4">
                                    <?php get_sidebar(); ?>
                                </div>
                        </div>
                    </article><!-- #post-<?php the_ID(); ?> -->
                <?php endwhile; // End of the loop. ?>
                
            </div>        
        </div>

        <!--  Tags and Share Section -->
         <div class="flex flex-wrap items-center mb-12 -mx-4 mt-8">
                    <div class="w-full px-4 md:w-1/2">
                        <div class="flex flex-wrap items-center gap-3 mb-8 wow fadeInUp md:mb-0" data-wow-delay=".1s">
                            <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '" class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">' . $tag->name . '</a>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2">
                        <div class="flex items-center wow fadeInUp md:justify-end" data-wow-delay=".1s">
                            <span class="mr-5 text-sm font-medium text-body-color dark:text-dark-6">
                                Share This Post
                            </span>
                            <div class="flex items-center gap-[10px]">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="#1877F2"/>
                                        <path d="M17 15.5399V12.7518C17 11.6726 17.8954 10.7976 19 10.7976H21V7.86631L18.285 7.67682C15.9695 7.51522 14 9.30709 14 11.5753V15.5399H11V18.4712H14V24.3334H17V18.4712H20L21 15.5399H17Z" fill="white"/>
                                    </svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="#55ACEE"/>
                                        <path d="M24.2945 11.375C24.4059 11.2451 24.2607 11.0755 24.0958 11.1362C23.728 11.2719 23.3918 11.3614 22.8947 11.4166C23.5062 11.0761 23.7906 10.5895 24.0219 9.99339C24.0777 9.84961 23.9094 9.71915 23.7645 9.78783C23.1759 10.0669 22.5408 10.274 21.873 10.3963C21.2129 9.7421 20.272 9.33331 19.2312 9.33331C17.2325 9.33331 15.6117 10.8406 15.6117 12.6993C15.6117 12.9632 15.6441 13.2202 15.7051 13.4663C12.832 13.3324 10.2702 12.1034 8.49031 10.2188C8.36832 10.0897 8.14696 10.1068 8.071 10.2643C7.86837 10.6846 7.7554 11.1509 7.7554 11.6418C7.7554 12.8093 8.39417 13.8395 9.36518 14.4431C8.92981 14.4301 8.51344 14.3452 8.12974 14.2013C7.94292 14.1312 7.72877 14.2543 7.75387 14.4427C7.94657 15.8893 9.11775 17.0827 10.6295 17.3647C10.3259 17.442 10.0061 17.483 9.67537 17.483C9.59517 17.483 9.51567 17.4805 9.43688 17.4756C9.23641 17.4632 9.07347 17.6426 9.15942 17.8141C9.72652 18.946 10.951 19.7361 12.376 19.7607C11.1374 20.6637 9.57687 21.2017 7.88109 21.2017C7.672 21.2017 7.5823 21.4706 7.7678 21.5617C9.20049 22.266 10.832 22.6666 12.5656 22.6666C19.2231 22.6666 22.8631 17.5377 22.8631 13.0896C22.8631 12.944 22.8594 12.7984 22.8528 12.6542C23.3932 12.2911 23.8789 11.8595 24.2945 11.375Z" fill="white"/>
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank">
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="#007AB9"/>
                                        <path d="M11.7836 10.1666C11.7833 10.8452 11.3716 11.4559 10.7426 11.7106C10.1137 11.9654 9.39306 11.8134 8.92059 11.3263C8.44811 10.8392 8.31813 10.1143 8.59192 9.49341C8.86572 8.87251 9.48862 8.4796 10.1669 8.49996C11.0678 8.527 11.784 9.26533 11.7836 10.1666ZM11.8999 13H8.3999V23H11.8999V13ZM19.3999 12.75C17.7999 12.75 16.8 13.53 16.3 14.25V13H12.9V23H16.4V17.5C16.4 16.15 16.9 15.25 18.15 15.25C19.25 15.25 19.9 16 19.9 17.5V23H23.4V17.25C23.4 14.5 21.4 12.75 19.3999 12.75Z" fill="white"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        <!--  Tags and Share Section End-->
         <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full lg:w-8/12 px-4">
                <footer class="entry-footer mt-8">
                    <?php
                    $hide_comments = get_post_meta(get_the_ID(), '_hide_comments', true);

                    // Show comments only if the meta field is not '1'
                    if ('1' !== $hide_comments && (comments_open() || get_comments_number())) :
                    ?>
                        <div class="mt-8">
                            <h2 class="mb-6 text-2xl font-bold text-dark dark:text-white">
                                <?php
                                $comments_number = get_comments_number();
                                if ('1' === $comments_number) {
                                    _e('One Comment', 'devdinos');
                                } else {
                                    printf(
                                        /* translators: 1: number of comments */
                                        _nx(
                                            '%1$s Comment',
                                            '%1$s Comments',
                                            $comments_number,
                                            'comments title',
                                            'devdinos'
                                        ),
                                        number_format_i18n($comments_number)
                                    );
                                }
                                ?>
                            </h2>
                            <div class="prose dark:prose-invert max-w-none">
                                <?php comments_template(); ?>
                            </div>
                        </div>
                    <?php
                    endif;
                    ?>
                </footer><!-- .entry-footer -->
            </div>
        </div>
         <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 wow fadeInUp mt-14" data-wow-delay=".2s">
                        <h2 class="relative pb-5 text-2xl font-semibold text-dark dark:text-white sm:text-[36px]">
                            Related Articles
                        </h2>
                        <span class="mb-10 inline-block h-[2px] w-20 bg-primary"></span>
                    </div>

                    <?php
                    $related_args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'post__not_in'   => array( get_the_ID() ),
                        'tax_query'      => array(
                            'relation' => 'OR',
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'term_id',
                                'terms'    => wp_get_post_categories( get_the_ID(), array( 'fields' => 'ids' ) ),
                            ),
                            array(
                                'taxonomy' => 'post_tag',
                                'field'    => 'term_id',
                                'terms'    => wp_get_post_tags( get_the_ID(), array( 'fields' => 'ids' ) ),
                            ),
                        ),
                    );

                    $related_query = new WP_Query( $related_args );

                    if ( $related_query->have_posts() ) :
                        while ( $related_query->have_posts() ) : $related_query->the_post();
                    ?>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
                            <div class="mb-8 overflow-hidden rounded-[5px]">
                                <a href="<?php the_permalink(); ?>" class="block">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <img
                                            src="<?php the_post_thumbnail_url('large'); ?>"
                                            alt="<?php the_title_attribute(); ?>"
                                            class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                                        />
                                    <?php else: ?>
                                        <img
                                            src="https://via.placeholder.com/400x250"
                                            alt="placeholder"
                                            class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                                        />
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div>
                                <span class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white">
                                    <?php echo get_the_date(); ?>
                                </span>
                                <h3>
                                    <a
                                        href="<?php the_permalink(); ?>"
                                        class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                                    >
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <!-- <div class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    <?php the_excerpt(); ?>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
    </div>
</section>
<!-- ====== Blog Details Section End -->

<?php
get_footer();