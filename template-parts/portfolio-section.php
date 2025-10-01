<section id="portfolio" x-data="{
      showCards: 'all',
      activeClasses: 'bg-primary text-white',
      inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
    }" class="bg-[#F3F4F6] pb-12 pt-20 dark:bg-dark lg:pb-[90px] lg:pt-[120px]">
      <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[510px] text-center">
              <span class="mb-2 block text-lg font-semibold text-primary">
                <?php echo get_theme_mod('portfolio_subtitle', 'Our Portfolio'); ?>
              </span>
              <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px] dark:text-white">
                <?php echo get_theme_mod('portfolio_title', 'Our Recent Projects'); ?>
              </h2>
              <p class="text-base text-body-color dark:text-dark-6">
                <?php echo get_theme_mod('portfolio_description', 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.'); ?>
              </p>
            </div>
          </div>
        </div>

        <div class="w-full px-4">
          <div class="mb-12 flex flex-wrap items-center justify-center">
            <div class="mb-2 sm:mb-0">
              <button @click="showCards = 'all'" :class="showCards == 'all' ? activeClasses : inactiveClasses"
                class="mr-2 rounded-md px-5 py-2 text-base font-semibold sm:mr-4 lg:px-8">
                All Projects
              </button>
              <?php
                $terms = get_terms( array(
                    'taxonomy' => 'project_category',
                    'hide_empty' => true,
                ) );

                foreach($terms as $term){
                    echo '<button @click="showCards = \''. $term->slug .'\'" :class="showCards == \''. $term->slug .'\' ? activeClasses : inactiveClasses" class="mr-2 rounded-md px-5 py-2 text-base font-semibold sm:mr-4 lg:px-8">' . $term->name . '</button>';
                }
              ?>
            </div>
          </div>
        </div>

        <div class="-mx-4 flex flex-wrap justify-center">
          <?php
            $max_posts = get_theme_mod('portfolio_max_posts', -1);
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => $max_posts,
            );
            $project_query = new WP_Query($args);

            if ($project_query->have_posts()) :
                while ($project_query->have_posts()) : $project_query->the_post();
                    $terms = get_the_terms(get_the_ID(), 'project_category');
                    $term_slugs_array = array();
                    if ($terms && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            $term_slugs_array[] = $term->slug;
                        }
                    }
          ?>
          <div x-show="showCards === 'all' || <?php echo '[\'' . implode('\',\'', $term_slugs_array) . '\']'; ?>.includes(showCards)"
            class="w-full px-4 md:w-1/2 xl:w-1/3">
            <div class="relative mb-12">
              <div class="overflow-hidden rounded-[10px]">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="portfolio" class="w-full" />
                <?php endif; ?>
              </div>
              <div
                class="relative z-10 mx-7 -mt-20 rounded-lg bg-white px-3 py-[34px] text-center shadow-portfolio dark:bg-dark-2 dark:shadow-box-dark">
                <span class="mb-2 block text-sm font-medium text-primary">
                  <?php
                    if ($terms && !is_wp_error($terms)) {
                        echo esc_html($terms[0]->name);
                    }
                  ?>
                </span>
                <h3 class="mb-5 text-xl font-bold text-dark dark:text-white">
                  <?php the_title(); ?>
                </h3>
                <a href="<?php the_permalink(); ?>"
                  class="inline-block rounded-md border border-stroke px-7 py-[10px] text-sm font-medium text-body-color transition hover:border-primary hover:bg-primary hover:text-white dark:border-dark-3 dark:text-dark-6">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <?php
                endwhile;
                wp_reset_postdata(); // Reset the post data
            else :
                echo '<p class="text-center w-full">No projects found.</p>';
            endif;
          ?>
        </div>
      </div>
    </section>