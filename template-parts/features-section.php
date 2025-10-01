<section class="pb-8 pt-20 dark:bg-dark lg:pb-[70px] lg:pt-[120px]">
  <div id="features" class="container px-4 mx-auto">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="mx-auto mb-12 max-w-[490px] text-center lg:mb-[70px]">
          <span class="block mb-2 text-lg font-semibold text-primary">
            <?php echo get_theme_mod('features_main_title', 'Features'); ?>
          </span>
          <h2 class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
            <?php echo get_theme_mod('features_main_subtitle', 'Our Awesome Features of DevDinos'); ?>
          </h2>
          <?php echo get_theme_mod('features_main_description', 'At Devdeinos, we specialize in delivering top-notch web development solutions tailored to meet your business needs. From dynamic websites and e-commerce platforms to custom web applications and responsive designs, our expert team combines innovative technologies with creative design to bring your vision to life. Whether you’re looking to enhance your online presence or build a robust digital solution from scratch, we’re here to help you succeed in the digital landscape.'); ?>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap -mx-4">
       <?php
      $default_icon = '<svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M30.5801 8.30514H27.9926C28.6113 7.85514 29.1176 7.34889 29.3426 6.73014C29.6801 5.88639 29.6801 4.48014 27.9363 2.84889C26.0801 1.04889 24.3926 1.04889 23.3238 1.33014C20.9051 1.94889 19.2738 4.76139 18.3738 6.78639C17.4738 4.76139 15.8426 2.00514 13.4238 1.33014C12.3551 1.04889 10.6676 1.10514 8.81133 2.84889C7.06758 4.53639 7.12383 5.88639 7.40508 6.73014C7.63008 7.34889 8.13633 7.85514 8.75508 8.30514H5.71758C4.08633 8.30514 2.73633 9.65514 2.73633 11.2864V14.9989C2.73633 16.5739 4.03008 17.8676 5.60508 17.9239V31.6489C5.60508 33.5614 7.18008 35.1926 9.14883 35.1926H27.5426C29.4551 35.1926 31.0863 33.6176 31.0863 31.6489V17.8676C32.4926 17.6426 33.5613 16.4051 33.5613 14.9426V11.2301C33.5613 9.59889 32.2113 8.30514 30.5801 8.30514ZM23.9426 3.69264C23.9988 3.69264 24.1676 3.63639 24.3363 3.63639C24.7301 3.63639 25.3488 3.80514 26.1926 4.59264C26.8676 5.21139 27.0363 5.66139 26.9801 5.77389C26.6988 6.56139 23.8863 7.40514 20.6801 7.74264C21.4676 5.99889 22.6488 4.03014 23.9426 3.69264ZM10.4988 4.64889C11.3426 3.86139 11.9613 3.69264 12.3551 3.69264C12.5238 3.69264 12.6363 3.74889 12.7488 3.74889C14.0426 4.08639 15.2801 5.99889 16.0676 7.79889C12.8613 7.46139 10.0488 6.61764 9.76758 5.83014C9.71133 5.66139 9.88008 5.26764 10.4988 4.64889ZM5.26758 14.9426V11.2301C5.26758 11.0051 5.43633 10.7801 5.71758 10.7801H30.5801C30.8051 10.7801 31.0301 10.9489 31.0301 11.2301C31.0301 11.1676 30.8613 11.3926 30.5801 11.3926H5.71758C5.49258 11.3926 5.26758 11.2239 5.26758 10.9426ZM27.5426 32.6614H9.14883C8.58633 32.6614 8.13633 32.2114 8.13633 31.6489V17.9239H28.4988V31.6489C28.5551 32.2114 28.1051 32.6614 27.5426 32.6614Z" fill="white" /></svg>';
      for ($i = 1; $i <= 4; $i++) :
        $delay = .1 + ($i - 1) * .05;
      ?>
      <div class="w-full px-4 md:w-1/2 lg:w-1/4">
        <div class="mb-12 wow fadeInUp group" data-wow-delay=".1s">
          <div class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary">
            <span class="absolute left-0 top-0 -z-1 mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"></span>
             <?php
              $icon = get_theme_mod('feature_icon_' . $i);
              if (!empty($icon)) {
                echo $icon;
              } else {
                echo $default_icon;
              }
              ?>
          </div>
          <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
             <?php echo esc_html(get_theme_mod('feature_title_' . $i, 'Full-Stack Development ' . $i)); ?>
          </h4>
          <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
            <?php echo esc_html(get_theme_mod('feature_description_' . $i, 'We offer comprehensive website development, covering both the front-end and back-end.')); ?>
          </p>
           <a href="<?php echo esc_url(get_theme_mod('feature_link_' . $i, '#')); ?>" class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
              Learn More
            </a>
        </div>
      </div>
      <?php endfor; ?>
      
      <!-- Add more feature items here as necessary -->
    </div>
  </div>
</section>