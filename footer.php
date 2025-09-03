<footer
  class="wow fadeInUp relative z-10 bg-[#090E34] pt-20 lg:pt-[100px]"
  data-wow-delay=".15s"
>
  <div class="container px-4 mx-auto">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-4/12 xl:w-3/12">
        <div class="w-full mb-10">
          <a
            href="<?php echo home_url(); ?>"
            class="mb-6 inline-block max-w-[160px]"
          >
            <img
              src="<?php echo esc_url(get_theme_mod('footer_logo', get_template_directory_uri() . '/assets/images/logo/logo-white.svg')); ?>"
              alt="logo"
              class="max-w-full"
            />
          </a>
          <p class="mb-8 max-w-[270px] text-base text-gray-7">
            <?php echo wp_kses_post(get_theme_mod('footer_description', 'We create digital experiences for brands and companies by using technology.')); ?>
          </p>
          <div class="flex items-center -mx-3">
            <a
              href="<?php echo esc_url(get_theme_mod('footer_social_facebook_url', '#')); ?>"
              class="px-3 text-gray-7 hover:text-white"
            >
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <path
                  d="M16.294 8.86875H14.369H13.6815V8.18125V6.05V5.3625H14.369H15.8128C16.1909 5.3625 16.5003 5.0875 16.5003 4.675V1.03125C16.5003 0.653125 16.2253 0.34375 15.8128 0.34375H13.3034C10.5878 0.34375 8.69714 2.26875 8.69714 5.12187V8.1125V8.8H8.00964H5.67214C5.19089 8.8 4.74402 9.17812 4.74402 9.72812V12.2031C4.74402 12.6844 5.12214 13.1313 5.67214 13.1313H7.94089H8.62839V13.8188V20.7281C8.62839 21.2094 9.00652 21.6562 9.55652 21.6562H12.7878C12.994 21.6562 13.1659 21.5531 13.3034 21.4156C13.4409 21.2781 13.544 21.0375 13.544 20.8312V13.8531V13.1656H14.2659H15.8128C16.2596 13.1656 16.6034 12.8906 16.6721 12.4781V12.4438V12.4094L17.1534 10.0375C17.1878 9.79688 17.1534 9.52187 16.9471 9.24687C16.8784 9.075 16.569 8.90312 16.294 8.86875Z"
                />
              </svg>
            </a>
            <a
              href="<?php echo esc_url(get_theme_mod('footer_social_twitter_url', '#')); ?>"
              class="px-3 text-gray-7 hover:text-white"
            >
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <path
                  d="M20.1236 5.91236C20.2461 5.76952 20.0863 5.58286 19.905 5.64972C19.5004 5.79896 19.1306 5.8974 18.5837 5.95817C19.2564 5.58362 19.5693 5.04828 19.8237 4.39259C19.885 4.23443 19.7 4.09092 19.5406 4.16647C18.8931 4.47345 18.1945 4.70121 17.4599 4.83578C16.7338 4.11617 15.6988 3.6665 14.5539 3.6665C12.3554 3.6665 10.5725 5.32454 10.5725 7.36908C10.5725 7.65933 10.6081 7.94206 10.6752 8.21276C7.51486 8.06551 4.6968 6.71359 2.73896 4.64056C2.60477 4.49848 2.36128 4.51734 2.27772 4.69063C2.05482 5.15296 1.93056 5.66584 1.93056 6.20582C1.93056 7.49014 2.6332 8.62331 3.70132 9.28732C3.22241 9.27293 2.76441 9.17961 2.34234 9.02125C2.13684 8.94416 1.90127 9.07964 1.92888 9.28686C2.14084 10.8781 3.42915 12.1909 5.09205 12.5011C4.75811 12.586 4.40639 12.6311 4.04253 12.6311C3.95431 12.6311 3.86685 12.6284 3.78019 12.6231C3.55967 12.6094 3.38044 12.8067 3.47499 12.9954C4.09879 14.2404 5.44575 15.1096 7.0132 15.1367C5.65077 16.13 3.93418 16.7218 2.06882 16.7218C1.83882 16.7218 1.74015 17.0175 1.9442 17.1178C3.52016 17.8924 5.31487 18.3332 7.22182 18.3332C14.545 18.3332 18.549 12.6914 18.549 7.79843C18.549 7.63827 18.545 7.47811 18.5377 7.31945C19.1321 6.92012 19.6664 6.44528 20.1236 5.91236Z"
                />
              </svg>
            </a>
            <a
              href="<?php echo esc_url(get_theme_mod('footer_social_instagram_url', '#')); ?>"
              class="px-3 text-gray-7 hover:text-white"
            >
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <path
                  d="M11.0297 14.4305C12.9241 14.4305 14.4598 12.8948 14.4598 11.0004C14.4598 9.10602 12.9241 7.57031 11.0297 7.57031C9.13529 7.57031 7.59958 9.10602 7.59958 11.0004C7.59958 12.8948 9.13529 14.4305 11.0297 14.4305Z"
                />
                <path
                  d="M14.7554 1.8335H7.24463C4.25807 1.8335 1.83334 4.25823 1.83334 7.24479V14.6964C1.83334 17.7421 4.25807 20.1668 7.24463 20.1668H14.6962C17.7419 20.1668 20.1667 17.7421 20.1667 14.7555V7.24479C20.1667 4.25823 17.7419 1.8335 14.7554 1.8335ZM11.0296 15.4948C8.51614 15.4948 6.53496 13.4545 6.53496 11.0002C6.53496 8.54586 8.54571 6.50554 11.0296 6.50554C13.4839 6.50554 15.4946 8.54586 15.4946 11.0002C15.4946 13.4545 13.5134 15.4948 11.0296 15.4948ZM17.2393 6.91952C16.9436 7.24479 16.5 7.42221 15.9973 7.42221C15.5538 7.42221 15.1102 7.24479 14.7554 6.91952C14.4301 6.59425 14.2527 6.18027 14.2527 5.67758C14.2527 5.17489 14.4301 4.79049 14.7554 4.43565C15.0807 4.08081 15.4946 3.90339 15.9973 3.90339C16.4409 3.90339 16.914 4.08081 17.2393 4.40608C17.535 4.79049 17.7419 5.23403 17.7419 5.70715C17.7124 6.18027 17.535 6.59425 17.2393 6.91952Z"
                />
                <path
                  d="M16.0276 4.96777C15.6432 4.96777 15.318 5.29304 15.318 5.67745C15.318 6.06186 15.6432 6.38713 16.0276 6.38713C16.412 6.38713 16.7373 6.06186 16.7373 5.67745C16.7373 5.29304 16.4416 4.96777 16.0276 4.96777Z"
                />
              </svg>
            </a>
            <a
              href="<?php echo esc_url(get_theme_mod('footer_social_linkedin_url', '#')); ?>"
              class="px-3 text-gray-7 hover:text-white"
            >
              <svg
                width="22"
                height="22"
                viewBox="0 0 22 22"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="fill-current"
              >
                <path
                  d="M18.8065 1.8335H3.16399C2.42474 1.8335 1.83334 2.42489 1.83334 3.16414V18.8362C1.83334 19.5459 2.42474 20.1668 3.16399 20.1668H18.7473C19.4866 20.1668 20.078 19.5754 20.078 18.8362V3.13457C20.1371 2.42489 19.5457 1.8335 18.8065 1.8335ZM7.24464 17.4168H4.55379V8.69371H7.24464V17.4168ZM5.88443 7.48135C4.99733 7.48135 4.31721 6.77167 4.31721 5.91414C4.31721 5.05661 5.0269 4.34694 5.88443 4.34694C6.74196 4.34694 7.45163 5.05661 7.45163 5.91414C7.45163 6.77167 6.8011 7.48135 5.88443 7.48135ZM17.4463 17.4168H14.7554V13.1883C14.7554 12.183 14.7258 10.8523 13.336 10.8523C11.9167 10.8523 11.7097 11.976 11.7097 13.0996V17.4168H9.01884V8.69371H11.6506V9.90608H11.6801C12.0645 9.1964 12.9221 8.48672 14.2527 8.48672C17.0027 8.48672 17.5054 10.2609 17.5054 12.6856V17.4168H17.4463Z"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <!--About Us-->

      <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-2/12 xl:w-2/12">
        <div class="w-full mb-10">
          <h4 class="text-lg font-semibold text-white mb-9">About Us</h4>
          <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_about',
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'walker' => new Footer_Menu_Walker(),
            ));
          ?>
        </div>
      </div>

      <!--Features-->
      <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
        <div class="w-full mb-10">
          <h4 class="text-lg font-semibold text-white mb-9">Features</h4>
          <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_features',
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'walker' => new Footer_Menu_Walker(),
            ));
          ?>
        </div>
      </div>

      <!--Products-->
        <div class="w-full px-4 sm:w-1/2 md:w-1/2 lg:w-3/12 xl:w-2/12">
        <div class="w-full mb-10">
          <h4 class="text-lg font-semibold text-white mb-9">
            Our Products
          </h4>
          <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_products',
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>',
                'walker' => new Footer_Menu_Walker(),
            ));
          ?>
        </div>
      </div>

      <div class="w-full px-4 md:w-2/3 lg:w-6/12 xl:w-3/12">
        <div class="w-full mb-10">
          <h4 class="text-lg font-semibold text-white mb-9">Latest blog</h4>
          <div class="flex flex-col gap-8">
            <?php
                $latest_posts = new WP_Query(array(
                    'posts_per_page' => 2,
                    'post_status' => 'publish',
                ));

                if ($latest_posts->have_posts()) :
                    while ($latest_posts->have_posts()) : $latest_posts->the_post();
            ?>
            <a
              href="<?php the_permalink(); ?>"
              class="group flex items-center gap-[22px]"
            >
              <div class="overflow-hidden rounded-sm w-[80px] h-[80px]">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail', ['class' => 'w-full h-full object-cover', 'alt' => get_the_title()]); ?>
                <?php else : ?>
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-footer-01.jpg"
                      alt="blog"
                      class="w-full h-full object-cover"
                    />
                <?php endif; ?>
              </div>
              <span
                class="max-w-[180px] text-base text-gray-7 group-hover:text-white"
              >
                <?php echo wp_trim_words(get_the_title(), 7, '...'); ?>
              </span>
            </a>
            <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- Bottom bar -->
   <div class="mt-12 border-t border-[#8890A4]/40 py-8 lg:mt-[60px]">
    <div class="container px-4 mx-auto">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4 md:w-2/3 lg:w-1/2">
          <div class="my-1">
            <?php
              wp_nav_menu(array(
                  'theme_location' => 'footer_bottom_bar',
                  'container' => 'div',
                  'container_class' => 'flex items-center justify-center -mx-3 md:justify-start',
                  'items_wrap' => '%3$s',
                  'walker'  => new Footer_Bottom_Bar_Walker(),
                  'depth'   => 1,
              ));
            ?>
          </div>
        </div>
        <div class="w-full px-4 md:w-1/3 lg:w-1/2">
          <div class="flex justify-center my-1 md:justify-end">
            <p class="text-base text-gray-7">
              <?php echo esc_html(get_theme_mod('footer_copyright_text', 'Designed and Developed by')); ?>
              <a
                href="<?php echo esc_url(get_theme_mod('footer_copyright_link_url', 'https://tailgrids.com')); ?>"
                rel="nofollow noopener"
                target="_blank"
                class="text-gray-1 hover:underline"
              >
                <?php echo esc_html(get_theme_mod('footer_copyright_link_text', 'TailGrids and UIdeck')); ?>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Shape -->
  <div>
    <span class="absolute left-0 top-0 z-[-1]">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/shape-1.svg" alt="" />
    </span>

    <span class="absolute bottom-0 right-0 z-[-1]">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/shape-3.svg" alt="" />
    </span>

    <span class="absolute right-0 top-0 z-[-1]">
      <svg
        width="102"
        height="102"
        viewBox="0 0 102 102"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M1.8667 33.1956C2.89765 33.1956 3.7334 34.0318 3.7334 35.0633C3.7334 36.0947 2.89765 36.9309 1.8667 36.9309C0.835744 36.9309 4.50645e-08 36.0947 0 35.0633C-4.50645e-08 34.0318 0.835744 33.1956 1.8667 33.1956Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M18.2939 33.1956C19.3249 33.1956 20.1606 34.0318 20.1606 35.0633C20.1606 36.0947 19.3249 36.9309 18.2939 36.9309C17.263 36.9309 16.4272 36.0947 16.4272 35.0633C16.4272 34.0318 17.263 33.1956 18.2939 33.1956Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M34.7209 33.195C35.7519 33.195 36.5876 34.0311 36.5876 35.0626C36.5876 36.0941 35.7519 36.9303 34.7209 36.9303C33.69 36.9303 32.8542 36.0941 32.8542 35.0626C32.8542 34.0311 33.69 33.195 34.7209 33.195Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M50.9341 33.195C51.965 33.195 52.8008 34.0311 52.8008 35.0626C52.8008 36.0941 51.965 36.9303 50.9341 36.9303C49.9031 36.9303 49.0674 36.0941 49.0674 35.0626C49.0674 34.0311 49.9031 33.195 50.9341 33.195Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M1.8667 16.7605C2.89765 16.7605 3.7334 17.5966 3.7334 18.6281C3.7334 19.6596 2.89765 20.4957 1.8667 20.4957C0.835744 20.4957 4.50645e-08 19.6596 0 18.6281C-4.50645e-08 17.5966 0.835744 16.7605 1.8667 16.7605Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M18.2939 16.7605C19.3249 16.7605 20.1606 17.5966 20.1606 18.6281C20.1606 19.6596 19.3249 20.4957 18.2939 20.4957C17.263 20.4957 16.4272 19.6596 16.4272 18.6281C16.4272 17.5966 17.263 16.7605 18.2939 16.7605Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M34.7209 16.7605C35.7519 16.7605 36.5876 17.5966 36.5876 18.6281C36.5876 19.6596 35.7519 20.4957 34.7209 20.4957C33.69 20.4957 32.8542 19.6596 32.8542 18.6281C32.8542 17.5966 33.69 16.7605 34.7209 16.7605Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M50.9341 16.7605C51.965 16.7605 52.8008 17.5966 52.8008 18.6281C52.8008 19.6596 51.965 20.4957 50.9341 20.4957C49.9031 20.4957 49.0674 19.6596 49.0674 18.6281C49.0674 17.5966 49.9031 16.7605 50.9341 16.7605Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M1.8667 0.324951C2.89765 0.324951 3.7334 1.16115 3.7334 2.19261C3.7334 3.22408 2.89765 4.06024 1.8667 4.06024C0.835744 4.06024 4.50645e-08 3.22408 0 2.19261C-4.50645e-08 1.16115 0.835744 0.324951 1.8667 0.324951Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M18.2939 0.324951C19.3249 0.324951 20.1606 1.16115 20.1606 2.19261C20.1606 3.22408 19.3249 4.06024 18.2939 4.06024C17.263 4.06024 16.4272 3.22408 16.4272 2.19261C16.4272 1.16115 17.263 0.324951 18.2939 0.324951Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M34.7209 0.325302C35.7519 0.325302 36.5876 1.16147 36.5876 2.19293C36.5876 3.2244 35.7519 4.06056 34.7209 4.06056C33.69 4.06056 32.8542 3.2244 32.8542 2.19293C32.8542 1.16147 33.69 0.325302 34.7209 0.325302Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M50.9341 0.325302C51.965 0.325302 52.8008 1.16147 52.8008 2.19293C52.8008 3.2244 51.965 4.06056 50.9341 4.06056C49.9031 4.06056 49.0674 3.2244 49.0674 2.19293C49.0674 1.16147 49.9031 0.325302 50.9341 0.325302Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M66.9037 33.1956C67.9346 33.1956 68.7704 34.0318 68.7704 35.0633C68.7704 36.0947 67.9346 36.9309 66.9037 36.9309C65.8727 36.9309 65.037 36.0947 65.037 35.0633C65.037 34.0318 65.8727 33.1956 66.9037 33.1956Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M83.3307 33.1956C84.3616 33.1956 85.1974 34.0318 85.1974 35.0633C85.1974 36.0947 84.3616 36.9309 83.3307 36.9309C82.2997 36.9309 81.464 36.0947 81.464 35.0633C81.464 34.0318 82.2997 33.1956 83.3307 33.1956Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M99.7576 33.1956C100.789 33.1956 101.624 34.0318 101.624 35.0633C101.624 36.0947 100.789 36.9309 99.7576 36.9309C98.7266 36.9309 97.8909 36.0947 97.8909 35.0633C97.8909 34.0318 98.7266 33.1956 99.7576 33.1956Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M66.9037 16.7605C67.9346 16.7605 68.7704 17.5966 68.7704 18.6281C68.7704 19.6596 67.9346 20.4957 66.9037 20.4957C65.8727 20.4957 65.037 19.6596 65.037 18.6281C65.037 17.5966 65.8727 16.7605 66.9037 16.7605Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
        <path
          d="M83.3307 16.7605C84.3616 16.7605 85.1974 17.5966 85.1974 18.6281C85.1974 19.6596 84.3616 20.4957 83.3307 20.4957C82.2997 20.4957 81.464 19.6596 81.464 18.6281C81.464 17.5966 82.2997 16.7605 83.3307 16.7605Z"
          fill="white"
          fill-opacity="0.08"
        ></path>
      </svg>
    </span>
  </div>
</footer>

<?php wp_footer(); ?>
      
</body>
</html>
