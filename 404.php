<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package devdinos
 */

get_header();
?>

<!-- ====== Banner Section Start -->
<div
  class="relative z-10 overflow-hidden pb-[60px] pt-[120px] dark:bg-dark md:pt-[130px] lg:pt-[160px]"
>
  <div
    class="absolute bottom-0 left-0 w-full h-px bg-linear-to-r from-stroke/0 via-stroke to-stroke/0 dark:via-dark-3"
  ></div>
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center -mx-4">
      <div class="w-full px-4">
        <div class="text-center">
          <h1
            class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
          >
            404 Page
          </h1>
          <p class="mb-5 text-base text-body-color dark:text-dark-6">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
          </p>

          <ul class="flex items-center justify-center gap-[10px]">
            <li>
              <a
                href="<?php echo esc_url( home_url( '/' ) ); ?>"
                class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white"
              >
                Home
              </a>
            </li>
            <li>
              <a
                href="javascript:void(0)"
                class="flex items-center gap-[10px] text-base font-medium text-body-color"
              >
                <span class="text-body-color dark:text-dark-6"> / </span>
                404
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Banner Section End -->

<?php
get_footer();