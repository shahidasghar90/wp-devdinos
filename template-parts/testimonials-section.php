<section id="testimonials" class="overflow-hidden bg-gray-1 py-20 dark:bg-dark-2 md:py-[120px]">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                <?php echo esc_html(get_theme_mod('testimonial_subtitle', 'Testimonials')); ?>
              </span>
              <h2 class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                <?php echo esc_html(get_theme_mod('testimonial_title', 'What our Clients Say')); ?>
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                <?php echo wp_kses_post(get_theme_mod('testimonial_description', 'Don’t just take our word for it, see what our clients say! We’re known for delivering exceptional results and building strong, lasting partnerships."')); ?>
              </p>
            </div>
          </div>
        </div>

         <?php
        $posts_per_page = get_theme_mod('testimonial_posts_per_page', 4);
        $slider_enabled = get_theme_mod('testimonial_slider_enable', true);

        $args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => $posts_per_page,
            'orderby' => 'date',
            'order' => 'DESC',
        );
        $testimonial_query = new WP_Query($args);

        if ($testimonial_query->have_posts()) :
            $wrapper_class = $slider_enabled ? 'swiper-wrapper' : 'flex flex-wrap justify-center';
            $item_class = $slider_enabled ? 'swiper-slide' : 'w-full md:w-1/2 lg:w-1/3 p-4';
        ?>
        <div class="-m-5">
          <div class="p-5 <?php if ($slider_enabled) echo 'swiper testimonial-carousel common-carousel'; ?>">
            <div class="<?php echo $wrapper_class; ?>">
              <?php
              while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
              ?>
              <div class="<?php echo $item_class; ?>">
                <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px] h-full">
                  <div class="mb-[18px] flex items-center gap-[2px]">
                    <?php
                    $rating = intval(get_post_meta(get_the_ID(), '_testimonial_rating', true));
                    $star_icon_url = get_theme_mod('testimonial_star_icon', get_template_directory_uri() . '/assets/images/testimonials/icon-star.svg');

                    if (empty($star_icon_url)) {
                        $star_icon_url = get_template_directory_uri() . '/assets/images/testimonials/icon-star.svg';
                    }

                    for ($i = 1; $i <= 5; $i++) {
                        // Using inline style to force the correct appearance
                        $style = ($i <= $rating) ? 'opacity: 1;' : 'opacity: 0.3; filter: grayscale(1);';
                        echo '<img src="' . esc_url($star_icon_url) . '" alt="star icon" style="' . esc_attr($style) . '" />';
                    }
                    ?>
                  </div>

                  <p class="mb-6 text-base text-body-color dark:text-dark-6">
                    &ldquo;<?php echo strip_tags(get_the_content()); ?>&rdquo;
                  </p>

                  <div class="flex items-center gap-4">
                    <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" class="h-full w-full object-cover" />
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials/author-01.jpg" alt="author" class="h-full w-full object-cover" />
                      <?php endif; ?>
                    </div>

                    <div>
                      <h3 class="text-sm font-semibold text-dark dark:text-white">
                        <?php the_title(); ?>
                      </h3>
                      <p class="text-xs text-body-secondary">
                        <?php
                        if (function_exists('get_field') && get_field('author_role')) {
                            echo esc_html(get_field('author_role'));
                        } else {
                            echo 'Client';
                        }
                        ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              endwhile;
              ?>
            </div>
          
            <div class="mt-[60px] flex items-center justify-center gap-1">
              <div class="swiper-button-prev">
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z"
                  />
                </svg>
              </div>

              <div class="swiper-button-next">
                <svg
                  class="fill-current"
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z"
                  />
                </svg>
              </div>
            </div>
            </div>
        </div>
        <?php
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </section>