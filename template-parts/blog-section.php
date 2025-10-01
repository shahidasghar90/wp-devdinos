<!-- ====== Blog Section Start -->
     <section  id="blog" class="bg-gray-1 pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap justify-center -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[485px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                <?php echo get_theme_mod('blog_subtitle', 'Our Blogs'); ?>
              </span>
              <h2
                class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
              >
                <?php echo get_theme_mod('blog_title', 'Our Recent News'); ?>
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                <?php echo get_theme_mod('blog_description', 'Explore our blog for expert advice, industry news, and valuable resources to help you succeed online.'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4">
          <?php
            $posts_per_page = get_theme_mod('blog_posts_per_page', 3);
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $posts_per_page,
            );
            $blog_posts = new WP_Query($args);
            if ($blog_posts->have_posts()) :
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
          ?>
          <div class="w-full px-4 md:w-1/2 lg:w-1/3">
            <div class="mb-10 wow fadeInUp group" data-wow-delay=".1s">
              <div class="mb-8 overflow-hidden rounded-[5px]">
                <a href="<?php the_permalink(); ?>" class="block">
                  <?php if (has_post_thumbnail()) : ?>
                    <img
                      src="<?php the_post_thumbnail_url('large'); ?>"
                      alt="<?php the_title_attribute(); ?>"
                      class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                    />
                  <?php endif; ?>
                </a>
              </div>
              <div>
                <span
                  class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                >
                  <?php echo get_the_date(); ?>
                </span>
                <h3>
                  <a
                    href="<?php the_permalink(); ?>"
                    class="inline-block mb-4 text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <?php the_title(); ?>
                  </a>
                </h3>
                <p
                  class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                >
                  <?php the_excerpt(); ?>
                </p>
              </div>
            </div>
          </div>
          <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No posts found.</p>';
            endif;
          ?>
        </div>
      </div>
    </section>
    <!-- ====== Blog Section End -->