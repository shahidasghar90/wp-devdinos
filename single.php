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
                            
                        <div class="entry-content">
                            <?php the_content(); ?>  
                        </div><!-- .entry-content -->
                            </article><!-- #post-<?php the_ID(); ?> -->
                <?php endwhile; // End of the loop. ?>
            </div>
            <div class="w-full lg:w-4/12 px-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
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
    </div>
</section>
<!-- ====== Blog Details Section End -->

<?php
get_footer();