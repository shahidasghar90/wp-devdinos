<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package devdinos
 */

get_header();
?>


<main id="primary" class="site-main">
  <!-- ==== Banner Section Start -->
<?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
$has_featured_image = !empty($featured_img_url);
?>
<div class="relative z-10 overflow-hidden pb-[60px] pt-[120px] dark:bg-dark md:pt-[130px] lg:pt-[160px]"
     style="<?php echo $has_featured_image ? "background-image: url('" . esc_url($featured_img_url) . "'); background-size: cover; background-position: center;" : ''; ?>">
    <?php if ($has_featured_image) : ?>
        <!-- Overlay to darken the background image for better text readability -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <?php endif; ?>

    <div class="relative container mx-auto px-4">
      <div class="flex flex-wrap items-center -mx-4">
        <div class="w-full px-4">
          <div class="text-center relative z-10">
            <h1 class="mb-4 text-3xl font-bold sm:text-4xl md:text-[40px] md:leading-[1.2] <?php echo $has_featured_image ? 'text-white' : 'text-dark dark:text-white'; ?>">
              <?php the_title(); ?>
            </h1>
                <?php
                $subtitle = get_post_meta(get_the_ID(), '_devdinos_breadcrumb_subtitle', true);
                if (!$subtitle) {
                    $subtitle = 'Default subtitle text'; // fallback subtitle
                }
                $page_title = get_the_title();
                $page_url = get_permalink();
                echo '<p id="breadcrumbs" class="mb-5 text-base ' . ($has_featured_image ? 'text-white' : 'text-body-color dark:text-dark-6') . '">' . esc_html($subtitle) . '</p>';
                echo '<p class="text-sm ' . ($has_featured_image ? 'text-white' : 'text-gray-500 dark:text-dark-5') . '">Home / <a href="' . esc_url($page_url) . '" class="hover:underline">' . esc_html($page_title) . '</a></p>';
                ?>
          </div>
        </div>
      </div>
    </div>
</div>
  <!-- ==== Banner Section End -->

  <!-- ==== Content Section Start -->
  <section class="bg-white py-20 dark:bg-dark-2 lg:py-[110px]">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="prose max-w-full mx-auto dark:prose-invert">
            <?php
            while (have_posts()) :
              the_post();
              the_content();

              // If comments are open or we have at least one comment, load up the comment template.
              if (comments_open() || get_comments_number()) :
                comments_template();
              endif;
            endwhile;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==== Content Section End -->
</main>

<?php
get_footer();
?>

