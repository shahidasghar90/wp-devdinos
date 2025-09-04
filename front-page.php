
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php get_header(); ?>
    <!-- Navbar Section Start -->
    <!-- <div class="absolute top-0 left-0 z-40 flex items-center w-full bg-transparent ud-header">
      <div class="container px-4 mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
          <div class="max-w-full px-4 w-60">
             <a href="<?php echo home_url(); ?>" class="block w-full py-5 navbar-logo">
              <?php if (has_custom_logo()) {
                the_custom_logo();
              } else { ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-devdinos-dark.png" alt="logo" class="w-full header-logo" />
              <?php } ?>
            </a>
          </div>
          <div class="flex items-center justify-between w-full px-4">
            <div>
              <button id="navbarToggler" class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
                <span class="relative my-[6px] block h-[2px] w-[30px] bg-white"></span>
              </button>
              <nav id="navbarCollapse" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark-2 lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:px-4 lg:py-0 lg:shadow-none dark:lg:bg-transparent xl:px-6">
                <?php
                  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'block lg:flex 2xl:ml-20',
                    'container' => false,
                  ));
                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Navbar Section End -->

    <!-- Hero Section Start -->
    <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4">
            <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
              <h1 class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                <!-- Open-Source Web Template for SaaS, Startup, Apps, and More -->
                <?php echo get_theme_mod('hero_title', 'Open-Source Web Template for SaaS, Startup, Apps, and More'); ?>
              </h1>
              <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                <?php echo get_theme_mod('hero_subtitle', 'Multidisciplinary Web Template Built with Your Favourite Technology - HTML Bootstrap, Tailwind and React NextJS.'); ?>
              </p>
              <ul class="flex flex-wrap items-center justify-center gap-5 mb-10">
                <li>
                  <a href="https://links.tailgrids.com/play-download" class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color">
                     <?php echo get_theme_mod('hero_button_one_text', 'Download Now'); ?>
                  </a>
                </li>
                <li>
                  <a href="https://github.com/tailgrids/play-tailwind" target="_blank" class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark">
                     <?php echo get_theme_mod('hero_button_two_text', 'Star on Github'); ?>
                  </a>
                </li>
              </ul>
              <div>
                 <p class="mb-4 text-base font-medium text-center text-white">
                  <?php echo get_theme_mod('brands_title', 'Built with latest technology'); ?>
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
                        <img src="<?php echo esc_url($image); ?>" alt="brand-<?php echo $i; ?>" />
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
    <!-- Hero Section End -->

    

    <!-- ====== Features Section Start -->
<section class="pb-8 pt-20 dark:bg-dark lg:pb-[70px] lg:pt-[120px]">
  <div class="container px-4 mx-auto">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full px-4">
        <div class="mx-auto mb-12 max-w-[485px] text-center lg:mb-[70px]">
          <span class="block mb-2 text-lg font-semibold text-primary">
            <?php echo get_theme_mod('features_main_title', 'Features'); ?>
          </span>
          <h2 class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
            <?php echo get_theme_mod('features_main_subtitle', 'Main Features Of Play'); ?>
          </h2>
          <?php echo get_theme_mod('features_main_description', 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.'); ?>
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
             <?php echo esc_html(get_theme_mod('feature_title_' . $i, 'Feature ' . $i)); ?>
          </h4>
          <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
            <?php echo esc_html(get_theme_mod('feature_description_' . $i, 'Lorem Ipsum is simply dummy text of the printing and industry.')); ?>
          </p>
           <a href="<?php echo esc_url(get_theme_mod('feature_link_' . $i, '#')); ?>" class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary">
              Learn More
            </a>
        </div>
      </div>
      <?php endfor; ?>
      <!-- <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="mb-12 wow fadeInUp group" data-wow-delay=".15s">
              <div
                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary"
              >
                <span
                  class="absolute left-0 top-0 -z-1 mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"
                ></span>
                <svg
                  width="36"
                  height="36"
                  viewBox="0 0 36 36"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M30.5998 1.01245H5.39981C2.98105 1.01245 0.956055 2.9812 0.956055 5.4562V30.6562C0.956055 33.075 2.9248 35.0437 5.39981 35.0437H30.5998C33.0186 35.0437 34.9873 33.075 34.9873 30.6562V5.39995C34.9873 2.9812 33.0186 1.01245 30.5998 1.01245ZM5.39981 3.48745H30.5998C31.6123 3.48745 32.4561 4.3312 32.4561 5.39995V11.1937H3.4873V5.39995C3.4873 4.38745 4.38731 3.48745 5.39981 3.48745ZM3.4873 30.6V13.725H23.0623V32.5125H5.39981C4.38731 32.5125 3.4873 31.6125 3.4873 30.6ZM30.5998 32.5125H25.5373V13.725H32.4561V30.6C32.5123 31.6125 31.6123 32.5125 30.5998 32.5125Z"
                    fill="white"
                  />
                </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                Multipurpose Template
              </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>
              <a
                href="javascript:void(0)"
                class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary"
              >
                Learn More
              </a>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="mb-12 wow fadeInUp group" data-wow-delay=".2s">
              <div
                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary"
              >
                <span
                  class="absolute left-0 top-0 -z-1 mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"
                ></span>
                <svg
                  width="37"
                  height="37"
                  viewBox="0 0 37 37"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M33.5613 21.4677L31.3675 20.1177C30.805 19.7239 30.0175 19.9489 29.6238 20.5114C29.23 21.1302 29.455 21.8614 30.0175 22.2552L31.48 23.2114L18.1488 31.5927L4.76127 23.2114L6.22377 22.2552C6.84252 21.8614 7.01127 21.0739 6.61752 20.5114C6.22377 19.8927 5.43627 19.7239 4.87377 20.1177L2.68002 21.4677C2.11752 21.8614 1.72377 22.4802 1.72377 23.1552C1.72377 23.8302 2.06127 24.5052 2.68002 24.8427L17.08 33.8989C17.4175 34.1239 17.755 34.1802 18.1488 34.1802C18.5425 34.1802 18.88 34.0677 19.2175 33.8989L33.5613 24.8989C34.1238 24.5052 34.5175 23.8864 34.5175 23.2114C34.5175 22.5364 34.18 21.8614 33.5613 21.4677Z"
                    fill="white"
                  />
                  <path
                    d="M20.1175 20.4552L18.1488 21.6364L16.18 20.3989C15.5613 20.0052 14.83 20.2302 14.4363 20.7927C14.0425 21.4114 14.2675 22.1427 14.83 22.5364L17.4738 24.1677C17.6988 24.2802 17.9238 24.3364 18.1488 24.3364C18.3738 24.3364 18.5988 24.2802 18.8238 24.1677L21.4675 22.5364C22.0863 22.1427 22.255 21.3552 21.8613 20.7927C21.4675 20.2302 20.68 20.0614 20.1175 20.4552Z"
                    fill="white"
                  />
                  <path
                    d="M7.74252 18.0927L11.455 20.4552C11.68 20.5677 11.905 20.6239 12.13 20.6239C12.5238 20.6239 12.9738 20.3989 13.1988 20.0052C13.5925 19.3864 13.3675 18.6552 12.805 18.2614L9.09252 15.8989C8.47377 15.5052 7.74252 15.7302 7.34877 16.2927C6.95502 16.9677 7.12377 17.7552 7.74252 18.0927Z"
                    fill="white"
                  />
                  <path
                    d="M5.04252 16.1802C5.43627 16.1802 5.88627 15.9552 6.11127 15.5614C6.50502 14.9427 6.28002 14.2114 5.71752 13.8177L4.81752 13.2552L5.71752 12.6927C6.33627 12.2989 6.50502 11.5114 6.11127 10.9489C5.71752 10.3302 4.93002 10.1614 4.36752 10.5552L1.72377 12.1864C1.33002 12.4114 1.10502 12.8052 1.10502 13.2552C1.10502 13.7052 1.33002 14.0989 1.72377 14.3239L4.36752 15.9552C4.53627 16.1239 4.76127 16.1802 5.04252 16.1802Z"
                    fill="white"
                  />
                  <path
                    d="M8.41752 10.7239C8.64252 10.7239 8.86752 10.6677 9.09252 10.5552L12.805 8.1927C13.4238 7.79895 13.5925 7.01145 13.1988 6.44895C12.805 5.8302 12.0175 5.66145 11.455 6.0552L7.74252 8.4177C7.12377 8.81145 6.95502 9.59895 7.34877 10.1614C7.57377 10.4989 7.96752 10.7239 8.41752 10.7239Z"
                    fill="white"
                  />
                  <path
                    d="M16.18 6.05522L18.1488 4.81772L20.1175 6.05522C20.3425 6.16772 20.5675 6.22397 20.7925 6.22397C21.1863 6.22397 21.6363 5.99897 21.8613 5.60522C22.255 4.98647 22.03 4.25522 21.4675 3.86147L18.8238 2.23022C18.43 1.94897 17.8675 1.94897 17.4738 2.23022L14.83 3.86147C14.2113 4.25522 14.0425 5.04272 14.4363 5.60522C14.83 6.16772 15.6175 6.44897 16.18 6.05522Z"
                    fill="white"
                  />
                  <path
                    d="M23.4925 8.19267L27.205 10.5552C27.43 10.6677 27.655 10.7239 27.88 10.7239C28.2738 10.7239 28.7238 10.4989 28.9488 10.1052C29.3425 9.48642 29.1175 8.75517 28.555 8.36142L24.8425 5.99892C24.28 5.60517 23.4925 5.83017 23.0988 6.39267C22.705 7.01142 22.8738 7.79892 23.4925 8.19267Z"
                    fill="white"
                  />
                  <path
                    d="M34.5738 12.1864L31.93 10.5552C31.3675 10.1614 30.58 10.3864 30.1863 10.9489C29.7925 11.5677 30.0175 12.2989 30.58 12.6927L31.48 13.2552L30.58 13.8177C29.9613 14.2114 29.7925 14.9989 30.1863 15.5614C30.4113 15.9552 30.8613 16.1802 31.255 16.1802C31.48 16.1802 31.705 16.1239 31.93 16.0114L34.5738 14.3802C34.9675 14.1552 35.1925 13.7614 35.1925 13.3114C35.1925 12.8614 34.9675 12.4114 34.5738 12.1864Z"
                    fill="white"
                  />
                  <path
                    d="M24.1675 20.624C24.3925 20.624 24.6175 20.5677 24.8425 20.4552L28.555 18.0927C29.1738 17.699 29.3425 16.9115 28.9488 16.349C28.555 15.7302 27.7675 15.5615 27.205 15.9552L23.4925 18.3177C22.8738 18.7115 22.705 19.499 23.0988 20.0615C23.3238 20.4552 23.7175 20.624 24.1675 20.624Z"
                    fill="white"
                  />
                </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                High-quality Design
              </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>
              <a
                href="javascript:void(0)"
                class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary"
              >
                Learn More
              </a>
            </div>
          </div>
          <div class="w-full px-4 md:w-1/2 lg:w-1/4">
            <div class="mb-12 wow fadeInUp group" data-wow-delay=".25s">
              <div
                class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary"
              >
                <span
                  class="absolute left-0 top-0 -z-1 mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary/20 duration-300 group-hover:rotate-45"
                ></span>
                <svg
                  width="37"
                  height="37"
                  viewBox="0 0 37 37"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M12.355 2.0614H5.21129C3.29879 2.0614 1.72379 3.6364 1.72379 5.5489V12.6927C1.72379 14.6052 3.29879 16.1802 5.21129 16.1802H12.355C14.2675 16.1802 15.8425 14.6052 15.8425 12.6927V5.60515C15.8988 3.6364 14.3238 2.0614 12.355 2.0614ZM13.3675 12.7489C13.3675 13.3114 12.9175 13.7614 12.355 13.7614H5.21129C4.64879 13.7614 4.19879 13.3114 4.19879 12.7489V5.60515C4.19879 5.04265 4.64879 4.59265 5.21129 4.59265H12.355C12.9175 4.59265 13.3675 5.04265 13.3675 5.60515V12.7489Z"
                    fill="white"
                  />
                  <path
                    d="M31.0863 2.0614H23.9425C22.03 2.0614 20.455 3.6364 20.455 5.5489V12.6927C20.455 14.6052 22.03 16.1802 23.9425 16.1802H31.0863C32.9988 16.1802 34.5738 14.6052 34.5738 12.6927V5.60515C34.5738 3.6364 32.9988 2.0614 31.0863 2.0614ZM32.0988 12.7489C32.0988 13.3114 31.6488 13.7614 31.0863 13.7614H23.9425C23.38 13.7614 22.93 13.3114 22.93 12.7489V5.60515C22.93 5.04265 23.38 4.59265 23.9425 4.59265H31.0863C31.6488 4.59265 32.0988 5.04265 32.0988 5.60515V12.7489Z"
                    fill="white"
                  />
                  <path
                    d="M12.355 20.0051H5.21129C3.29879 20.0051 1.72379 21.5801 1.72379 23.4926V30.6364C1.72379 32.5489 3.29879 34.1239 5.21129 34.1239H12.355C14.2675 34.1239 15.8425 32.5489 15.8425 30.6364V23.5489C15.8988 21.5801 14.3238 20.0051 12.355 20.0051ZM13.3675 30.6926C13.3675 31.2551 12.9175 31.7051 12.355 31.7051H5.21129C4.64879 31.7051 4.19879 31.2551 4.19879 30.6926V23.5489C4.19879 22.9864 4.64879 22.5364 5.21129 22.5364H12.355C12.9175 22.5364 13.3675 22.9864 13.3675 23.5489V30.6926Z"
                    fill="white"
                  />
                  <path
                    d="M31.0863 20.0051H23.9425C22.03 20.0051 20.455 21.5801 20.455 23.4926V30.6364C20.455 32.5489 22.03 34.1239 23.9425 34.1239H31.0863C32.9988 34.1239 34.5738 32.5489 34.5738 30.6364V23.5489C34.5738 21.5801 32.9988 20.0051 31.0863 20.0051ZM32.0988 30.6926C32.0988 31.2551 31.6488 31.7051 31.0863 31.7051H23.9425C23.38 31.7051 22.93 31.2551 22.93 30.6926V23.5489C22.93 22.9864 23.38 22.5364 23.9425 22.5364H31.0863C31.6488 22.5364 32.0988 22.9864 32.0988 23.5489V30.6926Z"
                    fill="white"
                  />
                </svg>
              </div>
              <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                All Essential Elements
              </h4>
              <p class="mb-8 text-body-color dark:text-dark-6 lg:mb-9">
                Lorem Ipsum is simply dummy text of the printing and industry.
              </p>
              <a
                href="javascript:void(0)"
                class="text-base font-medium text-dark hover:text-primary dark:text-white dark:hover:text-primary"
              >
                Learn More
              </a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Add more feature items here as necessary -->
    </div>
  </div>
</section>
<!-- ====== Features Section End -->

 <!-- ====== About Section Start -->
    <section
      id="about"
      class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]"
    >
      <div class="container px-4 mx-auto">
        <div class="wow fadeInUp" data-wow-delay=".2s">
          <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4 lg:w-1/2">
              <div class="mb-12 max-w-[540px] lg:mb-0">
                <h2
                  class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]"
                >
                  <?php echo get_theme_mod('about_title', 'Brilliant Toolkit to Build Nextgen Website Faster.'); ?>
                </h2>
                <p
                  class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6"
                >
                <?php echo get_theme_mod('about_description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius eros eget sapien consectetur ultrices. Ut quis dapibus libero.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius eros eget sapien consectetur ultrices. Ut quis dapibus libero.'); ?>
                </p>

                <a
                  href="<?php echo esc_url(get_theme_mod('about_button_url', '#')); ?>"
                  class="inline-flex items-center justify-center py-3 text-base font-medium text-center text-white border rounded-md border-primary bg-primary px-7 hover:border-blue-dark hover:bg-blue-dark"
                >
                  <?php echo esc_html(get_theme_mod('about_button_text', 'Know More')); ?>
                </a>
              </div>
            </div>

            <div class="w-full px-4 lg:w-1/2">
              <div class="flex flex-wrap -mx-2 sm:-mx-4 lg:-mx-2 xl:-mx-4">
                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div
                    class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]"
                  >
                    <?php
                      $about_image_1 = get_theme_mod('about_image_1');
                      if (empty($about_image_1)) {
                        $about_image_1 = get_template_directory_uri() . '/assets/images/about/about-image-01.jpg';
                      }
                    ?>
                    <img
                      src="<?php echo esc_url($about_image_1); ?>"
                      alt="about image"
                      class="object-cover object-center w-full h-full"
                    />
                  </div>
                </div>

                <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                  <div
                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]"
                  >
                    <?php
                      $about_image_2 = get_theme_mod('about_image_2');
                      if (empty($about_image_2)) {
                        $about_image_2 = get_template_directory_uri() . '/assets/images/about/about-image-02.jpg';
                      }
                    ?>
                    <img
                      src="<?php echo esc_url($about_image_2); ?>"
                      alt="about image"
                      class="object-cover object-center w-full h-full"
                    />
                  </div>

                  <div
                    class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8"
                  >
                    <div>
                      <span class="block text-5xl font-extrabold text-white">
                        <?php echo get_theme_mod('about_experience_number', '09'); ?>
                      </span>
                      <span class="block text-base font-semibold text-white">
                        <?php echo get_theme_mod('about_experience_line_1', 'We have'); ?>
                      </span>
                      <span
                        class="block text-base font-medium text-white text-opacity-70"
                      >
                        <?php echo get_theme_mod('about_experience_line_2', 'Years of experience'); ?>
                      </span>
                    </div>
                    <div>
                      <span class="absolute top-0 left-0 -z-10">
                        <svg
                          width="106"
                          height="144"
                          viewBox="0 0 106 144"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            opacity="0.1"
                            x="-67"
                            y="47.127"
                            width="113.378"
                            height="131.304"
                            transform="rotate(-42.8643 -67 47.127)"
                            fill="url(#paint0_linear_1416_214)"
                          />
                          <defs>
                            <linearGradient
                              id="paint0_linear_1416_214"
                              x1="-10.3111"
                              y1="47.127"
                              x2="-10.3111"
                              y2="178.431"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop stop-color="white" />
                              <stop
                                offset="1"
                                stop-color="white"
                                stop-opacity="0"
                              />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute top-0 right-0 -z-10">
                        <svg
                          width="130"
                          height="97"
                          viewBox="0 0 130 97"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            opacity="0.1"
                            x="0.86792"
                            y="-6.67725"
                            width="155.563"
                            height="140.614"
                            transform="rotate(-42.8643 0.86792 -6.67725)"
                            fill="url(#paint0_linear_1416_215)"
                          />
                          <defs>
                            <linearGradient
                              id="paint0_linear_1416_215"
                              x1="78.6495"
                              y1="-6.67725"
                              x2="78.6495"
                              y2="133.937"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop stop-color="white" />
                              <stop
                                offset="1"
                                stop-color="white"
                                stop-opacity="0"
                              />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute bottom-0 right-0 -z-10">
                        <svg
                          width="175"
                          height="104"
                          viewBox="0 0 175 104"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <rect
                            opacity="0.1"
                            x="175.011"
                            y="108.611"
                            width="101.246"
                            height="148.179"
                            transform="rotate(137.136 175.011 108.611)"
                            fill="url(#paint0_linear_1416_216)"
                          />
                          <defs>
                            <linearGradient
                              id="paint0_linear_1416_216"
                              x1="225.634"
                              y1="108.611"
                              x2="225.634"
                              y2="256.79"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop stop-color="white" />
                              <stop
                                offset="1"
                                stop-color="white"
                                stop-opacity="0"
                              />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== About Section End -->

    <!-- ====== CTA Section Start -->
    <section
      class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]"
    >
      <div class="container px-4 mx-auto">
        <div class="relative overflow-hidden">
          <div class="flex flex-wrap items-stretch -mx-4">
            <div class="w-full px-4">
              <div class="mx-auto max-w-[570px] text-center">
                <h2
                  class="mb-2.5 text-3xl font-bold text-white md:text-[38px] md:leading-[1.44]"
                >
                  <span><?php echo get_theme_mod('cta_title', 'What Are You Looking For?'); ?></span>
                  <span class="text-3xl font-normal md:text-[40px]">
                    <?php echo get_theme_mod('cta_subtitle', 'Get Started Now'); ?>
                  </span>
                </h2>
                <p
                  class="mx-auto mb-6 max-w-[515px] text-base leading-[1.5] text-white"
                >
                  <?php echo get_theme_mod('cta_description', 'There are many variations of passages of Lorem Ipsum but the majority have suffered in some form.'); ?>
                </p>
                <a
                  href="<?php echo get_theme_mod('cta_button_url', 'javascript:void(0)'); ?>"
                  class="inline-block rounded-md border border-transparent bg-secondary px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489]"
                >
                  <?php echo get_theme_mod('cta_button_text', 'Start using Play'); ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <span class="absolute top-0 left-0">
          <svg
            width="495"
            height="470"
            viewBox="0 0 495 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="55"
              cy="442"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="446"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z"
              stroke="white"
              stroke-opacity="0.08"
              stroke-width="12"
            />
          </svg>
        </span>
        <span class="absolute bottom-0 right-0">
          <svg
            width="493"
            height="470"
            viewBox="0 0 493 470"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <circle
              cx="462"
              cy="5"
              r="138"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="50"
            />
            <circle
              cx="49"
              cy="470"
              r="39"
              stroke="white"
              stroke-opacity="0.04"
              stroke-width="20"
            />
            <path
              d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z"
              stroke="white"
              stroke-opacity="0.06"
              stroke-width="13"
            />
          </svg>
        </span>
      </div>
    </section>
    <!-- ====== CTA Section End -->


 <!-- ====== Portfolio Section Start -->
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
    <!-- ====== Portfolio Section End -->


     <!-- ====== Testimonial Section Start -->
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
                <?php echo wp_kses_post(get_theme_mod('testimonial_description', 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.')); ?>
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
    <!-- ====== Testimonial Section End -->

    <!-- ====== FAQ Section Start -->
<section
      class="relative z-20 overflow-hidden bg-white pb-8 pt-20 dark:bg-dark lg:pb-[50px] lg:pt-[120px]"
    >
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
            <div class="mx-auto mb-[60px] max-w-[520px] text-center">
              <span class="block mb-2 text-lg font-semibold text-primary">
                <?php echo get_theme_mod('faq_section_subtitle', 'FAQ'); ?>
              </span>
              <h2
                class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]"
              >
                <?php echo get_theme_mod('faq_section_title', 'Any Questions? Look Here'); ?>
              </h2>
              <p
                class="mx-auto max-w-[485px] text-base text-body-color dark:text-dark-6"
              >
                <?php echo get_theme_mod('faq_section_description', 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.'); ?>
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap -mx-4">
          <?php
            $faq_quantity = get_theme_mod('faq_quantity', 4);
            $args = array(
                'post_type' => 'faq',
                'posts_per_page' => $faq_quantity,
            );
            $faq_query = new WP_Query($args);
            if ($faq_query->have_posts()) :
                $all_faqs = $faq_query->get_posts();
                $post_count = count($all_faqs);
                $half_count = ceil($post_count / 2);
                $first_half = array_slice($all_faqs, 0, $half_count);
                $second_half = array_slice($all_faqs, $half_count);
                $default_svg = '<svg width="32" height="32" viewBox="0 0 34 34" class="fill-current"><path d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" /><path d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" /><path d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" /></svg>';
                $faq_svg = get_theme_mod('faq_section_svg', $default_svg);
          ?>
          <div class="w-full px-4 lg:w-1/2">
            <?php foreach ($first_half as $post) : setup_postdata($post); ?>
            <div class="mb-12 flex lg:mb-[70px]">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
              >
                    <?php echo $faq_svg; ?>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  <?php the_title(); ?>
                </h3>
                <div class="text-base text-body-color dark:text-dark-6">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <?php foreach ($second_half as $post) : setup_postdata($post); ?>
            <div class="mb-12 flex lg:mb-[70px]">
              <div
                class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-white sm:mr-6 sm:h-[60px] sm:max-w-[60px]"
              >
                <svg
                  width="32"
                  height="32"
                  viewBox="0 0 34 34"
                  class="fill-current"
                >
                  <path
                    d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z"
                  />
                  <path
                    d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z"
                  />
                  <path
                    d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z"
                  />
                </svg>
              </div>
              <div class="w-full">
                <h3
                  class="mb-6 text-xl font-semibold text-dark dark:text-white sm:text-2xl lg:text-xl xl:text-2xl"
                >
                  <?php the_title(); ?>
                </h3>
                <div class="text-base text-body-color dark:text-dark-6">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    <!-- ====== FAQ Section end -->

    <!-- ====== Blog Section Start -->
     <section class="bg-gray-1 pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]">
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
                <?php echo get_theme_mod('blog_description', 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.'); ?>
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

     <!-- ====== Blog Section end -->
    
    <!-- ====== Contact Start ====== -->
     <!-- ====== Contact Start ====== -->
    <section id="contact" class="relative py-20 md:py-[120px]">
      <div class="absolute top-0 left-0 w-full h-full -z-1 dark:bg-dark"></div>
      <div
        class="absolute left-0 top-0 -z-1 h-1/2 w-full bg-[#E9F9FF] dark:bg-dark-700 lg:h-[45%] xl:h-1/2"
      ></div>
      <div class="container px-4 mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
          <div class="w-full px-4 lg:w-7/12 xl:w-8/12">
            <div class="ud-contact-content-wrapper">
              <div class="ud-contact-title mb-12 lg:mb-[150px]">
                <span
                  class="block mb-6 text-base font-medium text-dark dark:text-white"
                >
                  <?php echo get_theme_mod('contact_subtitle', 'CONTACT US'); ?>
                </span>
                <h2
                  class="max-w-[260px] text-[35px] font-semibold leading-[1.14] text-dark dark:text-white"
                >
                  <?php echo get_theme_mod('contact_title', 'Let\'s talk about your problem.'); ?>
                </h2>
              </div>
              <div class="flex flex-wrap justify-between mb-12 lg:mb-0">
                <div class="mb-8 flex w-[330px] max-w-full">
                  <div class="mr-6 text-[32px] text-primary">
                    <svg
                      width="29"
                      height="35"
                      viewBox="0 0 29 35"
                      class="fill-current"
                    >
                      <path
                        d="M14.5 0.710938C6.89844 0.710938 0.664062 6.72656 0.664062 14.0547C0.664062 19.9062 9.03125 29.5859 12.6406 33.5234C13.1328 34.0703 13.7891 34.3437 14.5 34.3437C15.2109 34.3437 15.8672 34.0703 16.3594 33.5234C19.9688 29.6406 28.3359 19.9062 28.3359 14.0547C28.3359 6.67188 22.1016 0.710938 14.5 0.710938ZM14.9375 32.2109C14.6641 32.4844 14.2812 32.4844 14.0625 32.2109C11.3828 29.3125 2.57812 19.3594 2.57812 14.0547C2.57812 7.71094 7.9375 2.625 14.5 2.625C21.0625 2.625 26.4219 7.76562 26.4219 14.0547C26.4219 19.3594 17.6172 29.2578 14.9375 32.2109Z"
                      />
                      <path
                        d="M14.5 8.58594C11.2734 8.58594 8.59375 11.2109 8.59375 14.4922C8.59375 17.7188 11.2187 20.3984 14.5 20.3984C17.7812 20.3984 20.4062 17.7734 20.4062 14.4922C20.4062 11.2109 17.7266 8.58594 14.5 8.58594ZM14.5 18.4297C12.3125 18.4297 10.5078 16.625 10.5078 14.4375C10.5078 12.25 12.3125 10.4453 14.5 10.4453C16.6875 10.4453 18.4922 12.25 18.4922 14.4375C18.4922 16.625 16.6875 18.4297 14.5 18.4297Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5
                      class="mb-[18px] text-lg font-semibold text-dark dark:text-white"
                    >
                      Our Location
                    </h5>
                    <p class="text-base text-body-color dark:text-dark-6">
                      <?php echo get_theme_mod('contact_location', '401 Broadway, 24th Floor, Orchard Cloud View, London'); ?>
                    </p>
                  </div>
                </div>
                <div class="mb-8 flex w-[330px] max-w-full">
                  <div class="mr-6 text-[32px] text-primary">
                    <svg
                      width="34"
                      height="25"
                      viewBox="0 0 34 25"
                      class="fill-current"
                    >
                      <path
                        d="M30.5156 0.960938H3.17188C1.42188 0.960938 0 2.38281 0 4.13281V20.9219C0 22.6719 1.42188 24.0938 3.17188 24.0938H30.5156C32.2656 24.0938 33.6875 22.6719 33.6875 20.9219V4.13281C33.6875 2.38281 32.2656 0.960938 30.5156 0.960938ZM30.5156 2.875C30.7891 2.875 31.0078 2.92969 31.2266 3.09375L17.6094 11.3516C17.1172 11.625 16.5703 11.625 16.0781 11.3516L2.46094 3.09375C2.67969 2.98438 2.89844 2.875 3.17188 2.875H30.5156ZM30.5156 22.125H3.17188C2.51562 22.125 1.91406 21.5781 1.91406 20.8672V5.00781L15.0391 12.9922C15.5859 13.3203 16.1875 13.4844 16.7891 13.4844C17.3906 13.4844 17.9922 13.3203 18.5391 12.9922L31.6641 5.00781V20.8672C31.7734 21.5781 31.1719 22.125 30.5156 22.125Z"
                      />
                    </svg>
                  </div>
                  <div>
                    <h5
                      class="mb-[18px] text-lg font-semibold text-dark dark:text-white"
                    >
                      How Can We Help?
                    </h5>
                    <p class="text-base text-body-color dark:text-dark-6">
                      <?php echo get_theme_mod('contact_email_1', 'info@yourdomain.com'); ?>
                    </p>
                    <p class="mt-1 text-base text-body-color dark:text-dark-6">
                      <?php echo get_theme_mod('contact_email_2', 'contact@yourdomain.com'); ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full px-4 lg:w-5/12 xl:w-4/12">
            <div
              class="wow fadeInUp rounded-lg bg-white px-8 py-10 shadow-testimonial dark:bg-dark-2 dark:shadow-none sm:px-10 sm:py-12 md:p-[60px] lg:p-10 lg:px-10 lg:py-12 2xl:p-[60px]"
              data-wow-delay=".2s
              "
            >
               <?php
                $contact_form_shortcode = get_theme_mod('contact_form_shortcode');
                $contact_form_css = get_theme_mod('contact_form_css');

                if (!empty($contact_form_css)) {
                    echo '<style>' . $contact_form_css . '</style>';
                }

                if (!empty($contact_form_shortcode)) :
                    echo do_shortcode($contact_form_shortcode);
                else :
              ?>
              <h3
                class="mb-8 text-2xl font-semibold text-dark dark:text-white md:text-[28px] md:leading-[1.42]"
              >
                Send us a Message
              </h3>
              <form>
                <div class="mb-[22px]">
                  <label
                    for="fullName"
                    class="block mb-4 text-sm text-body-color dark:text-dark-6"
                    >Full Name*</label
                  >
                  <input
                    type="text"
                    name="fullName"
                    placeholder="Adam Gelius"
                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                  />
                </div>
                <div class="mb-[22px]">
                  <label
                    for="email"
                    class="block mb-4 text-sm text-body-color dark:text-dark-6"
                    >Email*</label
                  >
                  <input
                    type="email"
                    name="email"
                    placeholder="example@yourmail.com"
                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                  />
                </div>
                <div class="mb-[22px]">
                  <label
                    for="phone"
                    class="block mb-4 text-sm text-body-color dark:text-dark-6"
                    >Phone*</label
                  >
                  <input
                    type="text"
                    name="phone"
                    placeholder="+885 1254 5211 552"
                    class="w-full border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                  />
                </div>
                <div class="mb-[30px]">
                  <label
                    for="message"
                    class="block mb-4 text-sm text-body-color dark:text-dark-6"
                    >Message*</label
                  >
                  <textarea
                    name="message"
                    rows="4"
                    placeholder="type your message here"
                    class="w-full resize-none border-0 border-b border-[#f1f1f1] bg-transparent pb-3 text-body-color placeholder:text-body-color/60 focus:border-primary focus:outline-none dark:border-dark-3 dark:text-dark-6"
                  ></textarea>
                </div>
                <div class="mb-0">
                  <button
                    type="submit"
                    class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white duration-300 ease-in-out rounded-md bg-primary hover:bg-blue-dark"
                  >
                    Send Message
                  </button>
                </div>
              </form>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Contact end ====== -->

    <!-- ====== Brands footer Section Start -->
    <?php if (get_theme_mod('footer_brands_section_show', 1)) : ?>
    <section class="pb-20 bg-white dark:bg-dark">
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
    <!-- ====== Brands footer Section End -->
    <?php get_footer(); ?>

<!-- ====== Back To Top Start -->
<a
  href="javascript:void(0)"
  class="fixed left-auto items-center justify-center hidden w-10 h-10 text-white transition duration-300 ease-in-out rounded-md shadow-md back-to-top bottom-8 right-8 z-999 bg-primary hover:bg-dark"
>
  <span
    class="mt-[6px] h-3 w-3 rotate-45 border-l border-t border-white"
  ></span>
</a>
<!-- ====== Back To Top End -->


    <!-- ====== All Scripts -->

    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);

      // Testimonial
      const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>


  </body>
</html>