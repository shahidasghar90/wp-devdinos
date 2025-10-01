 <!-- Hero Section Start -->
  <section>
    <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
              <h1 class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                <!-- Open-Source Web Template for SaaS, Startup, Apps, and More -->
                <?php echo get_theme_mod('hero_title', 'Bringing Your Digital Vision to Life.'); ?>
              </h1>
              <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                <?php echo get_theme_mod('hero_subtitle', 'We specialize in crafting seamless and dynamic web experiences, blending the latest in front-end and back-end technologies to deliver exceptional digital solutions.'); ?>
              </p>
              <ul class="flex flex-wrap items-center justify-center gap-5 mb-10">
                <li>
                  <a href="https://ims.devdinos.com/" class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color">
                     <?php echo get_theme_mod('hero_button_one_text', 'IMS Login'); ?>
                  </a>
                </li>
                <li>
                  <a href="https://dino-wealth.vercel.app/" target="_blank" class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark">
                     <?php echo get_theme_mod('hero_button_two_text', 'Dino-Wealth Login'); ?>
                  </a>
                </li>
              </ul>
              <div>
                 <p class="mb-4 text-base font-medium text-center text-white">
                  <?php echo get_theme_mod('brands_title', 'Driven by next-gen technology'); ?>
                </p>
                <div class="flex items-center justify-center gap-4 text-center wow fadeInUp" data-wow-delay=".3s">
                  <?php
                  $default_brands = [
                    get_template_directory_uri() . '/assets/images/brands/brand-white-01.svg',
                    get_template_directory_uri() . '/assets/images/brands/brand-white-02.svg',
                    get_template_directory_uri() . '/assets/images/brands/brand-white-03.svg',
                    get_template_directory_uri() . '/assets/images/brands/brand-white-04.svg',
                    get_template_directory_uri() . '/assets/images/brands/brand-white-05.svg',
                  ];
                  for ($i = 1; $i <= 5; $i++) :
                    $image = get_theme_mod("brand_image_$i", $default_brands[$i - 1]);
                    $url = get_theme_mod("brand_url_$i", '#');
                    if ($image) :
                  ?>
                      <a href="<?php echo esc_url($url); ?>" class="duration-300 ease-in-out text-white/60 hover:text-white">
                        <img src="<?php echo esc_url($image); ?>" alt="brand-<?php echo $i; ?>" class="h-auto w-16" />
                      </a>
                  <?php
                    endif;
                  endfor;
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4">
            <div class="wow fadeInUp relative z-10 mx-auto max-w-[845px]" data-wow-delay=".25s">
              <div class="mt-16">
                <?php
                  $hero_image = get_theme_mod('hero_image');
                  if (empty($hero_image)) {
                    $hero_image = get_template_directory_uri() . '/assets/images/hero/hero-image.jpg';
                  }
                ?>
                <img src="<?php echo esc_url($hero_image); ?>" alt="hero" class="mx-auto max-w-full rounded-t-xl rounded-tr-xl" />
              </div>
              <div class="absolute bottom-0 -left-9 z-[-1]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/dotted-shape.svg" alt="shape" class="w-full" />
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- Hero Section End -->