<?php if (get_theme_mod('footer_brands_section_show', 1)) : ?>
    <section id="footer-brand" class="pb-20 bg-white dark:bg-dark">
      <div class="container px-4 mx-auto">
                <div class="mb-12 text-center lg:mb-20">
                    <h2 class="mb-5 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px]">
                      <?php echo esc_html(get_theme_mod('footer_brands_title', 'Built with latest technology')); ?>
                    </h2>
                </div>
        <div
          class="flex flex-wrap items-center justify-center gap-8 -mx-4 xl:gap-11"
        >
          <?php
          $default_brands = [
            1 => [
                'link' => '#',
                'image' => get_template_directory_uri() . '/assets/images/brands/brand-01.svg',
                'image_dark' => get_template_directory_uri() . '/assets/images/brands/brand-white-01.svg',
            ],
            2 => [
                'link' => '#',
                'image' => get_template_directory_uri() . '/assets/images/brands/brand-02.svg',
                'image_dark' => get_template_directory_uri() . '/assets/images/brands/brand-white-02.svg',
            ],
            3 => [
                'link' => '#',
                'image' => get_template_directory_uri() . '/assets/images/brands/brand-03.svg',
                'image_dark' => get_template_directory_uri() . '/assets/images/brands/brand-white-03.svg',
            ],
            4 => [
                'link' => '#',
                'image' => get_template_directory_uri() . '/assets/images/brands/brand-04.svg',
                'image_dark' => get_template_directory_uri() . '/assets/images/brands/brand-white-04.svg',
            ],
            5 => [
                'link' => '#',
                'image' => get_template_directory_uri() . '/assets/images/brands/brand-05.svg',
                'image_dark' => get_template_directory_uri() . '/assets/images/brands/brand-white-05.svg',
            ],
          ];

          for ($i = 1; $i <= 5; $i++) {
            $image_url = get_theme_mod("footer_brand_image_$i", $default_brands[$i]['image']);
            $image_dark_url = get_theme_mod("footer_brand_image_dark_$i", $default_brands[$i]['image_dark']);
            $link_url = get_theme_mod("footer_brand_url_$i", $default_brands[$i]['link']);
          ?>
              <a href="<?php echo esc_url($link_url); ?>" class="block">
                <img
                  src="<?php echo esc_url($image_url); ?>"
                  alt="brand"
                  class="mx-auto dark:hidden"
                  style="max-height: 40px;"
                />
                <img
                  src="<?php echo esc_url($image_dark_url); ?>"
                  alt="brand"
                  class="hidden mx-auto dark:block"
                  style="max-height: 40px;"
                />
              </a>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <?php endif; ?>