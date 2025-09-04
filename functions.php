<?php
function devdinos_theme_enqueue_scripts() {
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/src/css/tailwind.css');
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);

      $logo_urls = array(
        'default' => get_template_directory_uri() . '/assets/images/logo/logo-devdinos-dark.png',
        'default_dark' => get_template_directory_uri() . '/assets/images/logo-devdinos-dark.png',
        'sticky' => get_template_directory_uri() . '/assets/images/logo/logo-devdinos-dark.png',
        'sticky_dark' => get_template_directory_uri() . '/assets/images/logo/logo-devdinos-dark.png'
    );
    wp_localize_script('main-js', 'devdinosLogos', $logo_urls);
}
add_action('wp_enqueue_scripts', 'devdinos_theme_enqueue_scripts');

function register_my_menu() {
  register_nav_menu('primary', __('Primary Menu'));
  register_nav_menu('footer_about', __('Footer About Us Menu'));
  register_nav_menu('footer_products', __('Footer Products Menu'));
  register_nav_menu('footer_features', __('Footer Features Menu')); 
  register_nav_menu('footer_blog_post', __('Footer Blog Post Menu'));
  register_nav_menu('footer_bottom_bar', __('Footer Bottom Bar Menu'));

}
add_action('init', 'register_my_menu');

function add_menu_link_classes($atts, $item, $args) {
  if (isset($args->theme_location) && $args->theme_location === 'primary') {
    $atts['class'] = 'flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70';
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_classes', 10, 3);

class Footer_Menu_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= "<li>";
        $output .= '<a href="' . esc_url($item->url) . '" class="inline-block mb-3 text-base text-gray-7 hover:text-primary">';
        $output .= esc_html($item->title);
        $output .= '</a>';
        $output .= "</li>";
    }
}

class Footer_Bottom_Bar_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $output .= '<a href="' . esc_url($item->url) . '" class="px-3 text-base text-gray-7 hover:text-white hover:underline">';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        // This walker does not need to output a closing </li> tag
    }
}

function add_menu_li_classes($classes, $item, $args) {
  if (isset($args->theme_location) && $args->theme_location === 'primary') {
    $classes[] = 'relative';
    $classes[] = 'group';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_li_classes', 10, 3);

function devdinos_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
}
add_action('after_setup_theme', 'devdinos_theme_support');


function devdinos_customize_register($wp_customize) {
  // Hero Section
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'devdinos'),
    'priority' => 30,
  ));

  // Hero Title
  $wp_customize->add_setting('hero_title', array(
    'default' => 'Open-Source Web Template for SaaS, Startup, Apps, and More',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('hero_title', array(
    'label' => __('Hero Title', 'devdinos'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  // Hero Subtitle
  $wp_customize->add_setting('hero_subtitle', array(
    'default' => 'Multidisciplinary Web Template Built with Your Favourite Technology - HTML Bootstrap, Tailwind and React NextJS.',
    'sanitize_callback' => 'wp_kses_post',
  ));
  $wp_customize->add_control('hero_subtitle', array(
    'label' => __('Hero Subtitle', 'devdinos'),
    'section' => 'hero_section',
    'type' => 'textarea',
  ));

  // Button 1 Text
  $wp_customize->add_setting('hero_button_one_text', array(
    'default' => 'Download Now',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('hero_button_one_text', array(
    'label' => __('Button 1 Text', 'devdinos'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  // Button 1 URL
  $wp_customize->add_setting('hero_button_one_url', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('hero_button_one_url', array(
    'label' => __('Button 1 URL', 'devdinos'),
    'section' => 'hero_section',
    'type' => 'url',
  ));

  // Button 2 Text
  $wp_customize->add_setting('hero_button_two_text', array(
    'default' => 'Star on Github',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('hero_button_two_text', array(
    'label' => __('Button 2 Text', 'devdinos'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  // Button 2 URL
  $wp_customize->add_setting('hero_button_two_url', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('hero_button_two_url', array(
    'label' => __('Button 2 URL', 'devdinos'),
    'section' => 'hero_section',
    'type' => 'url',
  ));

  // Hero Image
  $wp_customize->add_setting('hero_image');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
    'label' => __('Hero Image', 'devdinos'),
    'section' => 'hero_section',
    'settings' => 'hero_image',
  )));

   // Brands Section
  $wp_customize->add_section('brands_section', array(
    'title' => __('Brands Section', 'devdinos'),
    'priority' => 31,
  ));

  // Brands Title
  $wp_customize->add_setting('brands_title', array(
    'default' => 'Built with latest technology',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('brands_title', array(
    'label' => __('Brands Section Title', 'devdinos'),
    'section' => 'brands_section',
    'type' => 'text',
  ));

  // Loop for 5 brands
  for ($i = 1; $i <= 5; $i++) {
    // Brand Image
    $wp_customize->add_setting("brand_image_$i");
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "brand_image_$i", array(
      'label' => __("Brand Image $i", 'devdinos'),
      'section' => 'brands_section',
      'settings' => "brand_image_$i",
    )));

    // Brand URL
    $wp_customize->add_setting("brand_url_$i", array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control("brand_url_$i", array(
      'label' => __("Brand URL $i", 'devdinos'),
      'section' => 'brands_section',
      'type' => 'url',
    ));
  }

  // Features Section
  $wp_customize->add_section('features_section', array(
    'title' => __('Features Section', 'devdinos'),
    'priority' => 32,
  ));

  // Features Main Title
  $wp_customize->add_setting('features_main_title', array(
    'default' => 'Features',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('features_main_title', array(
    'label' => __('Main Title', 'devdinos'),
    'section' => 'features_section',
    'type' => 'text',
  ));

  // Features Main Subtitle
  $wp_customize->add_setting('features_main_subtitle', array(
    'default' => 'Main Features Of Play',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('features_main_subtitle', array(
    'label' => __('Main Subtitle', 'devdinos'),
    'section' => 'features_section',
    'type' => 'text',
  ));

  // Features Main Description
  $wp_customize->add_setting('features_main_description', array(
    'default' => 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.',
    'sanitize_callback' => 'wp_kses_post',
  ));
  $wp_customize->add_control('features_main_description', array(
    'label' => __('Main Description', 'devdinos'),
    'section' => 'features_section',
    'type' => 'textarea',
  ));

  // Loop for 4 features
  for ($i = 1; $i <= 4; $i++) {
    // Feature Icon (SVG)
    $wp_customize->add_setting("feature_icon_$i", array(
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control("feature_icon_$i", array(
        'label' => __("Feature Icon (SVG) $i", 'devdinos'),
        'section' => 'features_section',
        'type' => 'textarea',
    ));

    // Feature Title
    $wp_customize->add_setting("feature_title_$i", array(
        'default' => 'Free and Open-Source',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control("feature_title_$i", array(
        'label' => __("Feature Title $i", 'devdinos'),
        'section' => 'features_section',
        'type' => 'text',
    ));

    // Feature Description
    $wp_customize->add_setting("feature_description_$i", array(
        'default' => 'Lorem Ipsum is simply dummy text of the printing and industry.',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control("feature_description_$i", array(
        'label' => __("Feature Description $i", 'devdinos'),
        'section' => 'features_section',
        'type' => 'textarea',
    ));

    // Feature URL
    $wp_customize->add_setting("feature_url_$i", array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control("feature_url_$i", array(
        'label' => __("Feature URL $i", 'devdinos'),
        'section' => 'features_section',
        'type' => 'url',
    ));

    // Feature Learn More Text
    $wp_customize->add_setting("feature_learn_more_text_$i", array(
        'default' => 'Learn More',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control("feature_learn_more_text_$i", array(
        'label' => __("Learn More Text $i", 'devdinos'),
        'section' => 'features_section',
        'type' => 'text',
    ));
  }

  // About Section
  $wp_customize->add_section('about_section', array(
    'title' => __('About Section', 'devdinos'),
    'priority' => 33,
  ));

  // About Title
  $wp_customize->add_setting('about_title', array(
    'default' => 'We are a passionate creative team',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('about_title', array(
    'label' => __('About Title', 'devdinos'),
    'section' => 'about_section',
    'type' => 'text',
  ));

  // About Subtitle
  $wp_customize->add_setting('about_subtitle', array(
    'default' => 'About Us',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('about_subtitle', array(
    'label' => __('About Subtitle', 'devdinos'),
    'section' => 'about_section',
    'type' => 'text',
  ));

  // About Description
  $wp_customize->add_setting('about_description', array(
    'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius eros eget sapien consectetur ultrices. Ut quis dapibus libero.<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In varius eros eget sapien consectetur ultrices. Ut quis dapibus libero.',
    'sanitize_callback' => 'wp_kses_post',
  ));
  $wp_customize->add_control('about_description', array(
    'label' => __('About Description', 'devdinos'),
    'section' => 'about_section',
    'type' => 'textarea',
  ));

  // About Image 1
  $wp_customize->add_setting('about_image_1');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image_1', array(
    'label' => __('About Image 1', 'devdinos'),
    'section' => 'about_section',
    'settings' => 'about_image_1',
  )));

  // About Image 2
  $wp_customize->add_setting('about_image_2');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image_2', array(
    'label' => __('About Image 2', 'devdinos'),
    'section' => 'about_section',
    'settings' => 'about_image_2',
  )));

  // About Button Text
  $wp_customize->add_setting('about_button_text', array(
    'default' => 'Know More',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('about_button_text', array(
    'label' => __('Button Text', 'devdinos'),
    'section' => 'about_section',
    'type' => 'text',
  ));

  // About Button URL
  $wp_customize->add_setting('about_button_url', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('about_button_url', array(
    'label' => __('Button URL', 'devdinos'),
    'section' => 'about_section',
    'type' => 'url',
  ));

  // Experience Number
  $wp_customize->add_setting('about_experience_number', array(
    'default' => '09',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('about_experience_number', array(
    'label' => __('Experience Years', 'devdinos'),
    'section' => 'about_section',
    'type' => 'text',
  ));

  // Experience Line 1
  $wp_customize->add_setting('about_experience_line_1', array(
    'default' => 'We have',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('about_experience_line_1', array(
    'label' => __('Experience First Line', 'devdinos'),
    'section' => 'about_section',
    'type' => 'text',
  ));

  // Experience Line 2
  $wp_customize->add_setting('about_experience_line_2', array(
    'default' => 'Years of experience',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('about_experience_line_2', array(
    'label' => __('Experience Second Line', 'devdinos'),
    'section' => 'about_section',
    'type' => 'text',
  ));

  // CTA Section
  $wp_customize->add_section('cta_section', array(
    'title' => __('Call to Action', 'devdinos'),
    'priority' => 34,
  ));

  // CTA Title
  $wp_customize->add_setting('cta_title', array(
    'default' => 'What Are You Looking For?',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('cta_title', array(
    'label' => __('Title', 'devdinos'),
    'section' => 'cta_section',
    'type' => 'text',
  ));

  // CTA Subtitle
  $wp_customize->add_setting('cta_subtitle', array(
    'default' => 'Get Started Now',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('cta_subtitle', array(
    'label' => __('Subtitle', 'devdinos'),
    'section' => 'cta_section',
    'type' => 'text',
  ));

  // CTA Description
  $wp_customize->add_setting('cta_description', array(
    'default' => 'There are many variations of passages of Lorem Ipsum but the majority have suffered in some form.',
    'sanitize_callback' => 'wp_kses_post',
  ));
  $wp_customize->add_control('cta_description', array(
    'label' => __('Description', 'devdinos'),
    'section' => 'cta_section',
    'type' => 'textarea',
  ));

  // CTA Button Text
  $wp_customize->add_setting('cta_button_text', array(
    'default' => 'Start using Play',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('cta_button_text', array(
    'label' => __('Button Text', 'devdinos'),
    'section' => 'cta_section',
    'type' => 'text',
  ));

  // CTA Button URL
  $wp_customize->add_setting('cta_button_url', array(
    'default' => '#',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control('cta_button_url', array(
    'label' => __('Button URL', 'devdinos'),
    'section' => 'cta_section',
    'type' => 'url',
  ));

  // Portfolio Section
  $wp_customize->add_section('portfolio_section', array(
    'title' => __('Portfolio Section', 'devdinos'),
    'priority' => 35,
  ));

  // Portfolio Subtitle
  $wp_customize->add_setting('portfolio_subtitle', array(
    'default' => 'Our Portfolio',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('portfolio_subtitle', array(
    'label' => __('Subtitle', 'devdinos'),
    'section' => 'portfolio_section',
    'type' => 'text',
  ));

  // Portfolio Title
  $wp_customize->add_setting('portfolio_title', array(
    'default' => 'Our Recent Projects',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('portfolio_title', array(
    'label' => __('Title', 'devdinos'),
    'section' => 'portfolio_section',
    'type' => 'text',
  ));

  // Portfolio Description
  $wp_customize->add_setting('portfolio_description', array(
    'default' => 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.',
    'sanitize_callback' => 'wp_kses_post',
  ));
  $wp_customize->add_control('portfolio_description', array(
    'label' => __('Description', 'devdinos'),
    'section' => 'portfolio_section',
    'type' => 'textarea',
  ));

   // Add setting for max posts
    $wp_customize->add_setting('portfolio_max_posts', array(
        'default'           => -1,
        'sanitize_callback' => 'absint', // Ensures the value is a non-negative integer
    ));

    // Add control for max posts
    $wp_customize->add_control('portfolio_max_posts', array(
        'label'       => __('Max Projects to Display', 'devdinos'),
        'section'     => 'portfolio_section',
        'type'        => 'number',
        'description' => __('Enter the maximum number of projects to show. Use -1 to show all projects.', 'devdinos'),
        'input_attrs' => array(
            'min'  => -1,
            'step' => 1,
        ),
    ));

    // Testimonials Section
    $wp_customize->add_section('testimonial_section', array(
        'title'    => __('Testimonials Section', 'devdinos'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('testimonial_subtitle', array(
        'default'   => 'Testimonials',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('testimonial_subtitle', array(
        'label'    => __('Subtitle', 'devdinos'),
        'section'  => 'testimonial_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('testimonial_title', array(
        'default'   => 'What our Clients Say',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('testimonial_title', array(
        'label'    => __('Title', 'devdinos'),
        'section'  => 'testimonial_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('testimonial_description', array(
        'default'   => 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('testimonial_description', array(
        'label'    => __('Description', 'devdinos'),
        'section'  => 'testimonial_section',
        'type'     => 'textarea',
    ));
     // Testimonial Star Icon
    $wp_customize->add_setting('testimonial_star_icon');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial_star_icon', array(
        'label' => __('Star Icon', 'devdinos'),
        'section' => 'testimonial_section',
        'settings' => 'testimonial_star_icon',
        'description' => __('Upload a custom icon for the rating stars.', 'devdinos'),
    )));

    // Number of testimonials to display
    $wp_customize->add_setting('testimonial_posts_per_page', array(
        'default'           => 4,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('testimonial_posts_per_page', array(
        'label'       => __('Number of Testimonials to Show', 'devdinos'),
        'section'     => 'testimonial_section',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 1,
            'step' => 1,
        ),
    ));

    // Enable/disable slider
    $wp_customize->add_setting('testimonial_slider_enable', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    $wp_customize->add_control('testimonial_slider_enable', array(
        'label'       => __('Enable Slider', 'devdinos'),
        'section'     => 'testimonial_section',
        'type'        => 'checkbox',
    ));

 // FAQ Section
    $wp_customize->add_section('faq_section', array(
        'title'      => __('FAQ Section', 'devdinos'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('faq_section_title', array(
        'default'   => 'Any Questions? Look Here',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('faq_section_title_control', array(
        'label'      => __('Title', 'devdinos'),
        'section'    => 'faq_section',
        'settings'   => 'faq_section_title',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('faq_section_subtitle', array(
        'default'   => 'FAQ',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('faq_section_subtitle_control', array(
        'label'      => __('Subtitle', 'devdinos'),
        'section'    => 'faq_section',
        'settings'   => 'faq_section_subtitle',
        'type'       => 'text',
    ));

    $wp_customize->add_setting('faq_section_description', array(
        'default'   => 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('faq_section_description_control', array(
        'label'      => __('Description', 'devdinos'),
        'section'    => 'faq_section',
        'settings'   => 'faq_section_description',
        'type'       => 'textarea',
    ));

    $wp_customize->add_setting('faq_quantity', array(
        'default'   => 4,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('faq_quantity_control', array(
        'label'      => __('Number of FAQs to show', 'devdinos'),
        'section'    => 'faq_section',
        'settings'   => 'faq_quantity',
        'type'       => 'number',
    ));

    $default_svg = '<svg width="32" height="32" viewBox="0 0 34 34" class="fill-current"><path d="M17.0008 0.690674C7.96953 0.690674 0.691406 7.9688 0.691406 17C0.691406 26.0313 7.96953 33.3625 17.0008 33.3625C26.032 33.3625 33.3633 26.0313 33.3633 17C33.3633 7.9688 26.032 0.690674 17.0008 0.690674ZM17.0008 31.5032C9.03203 31.5032 2.55078 24.9688 2.55078 17C2.55078 9.0313 9.03203 2.55005 17.0008 2.55005C24.9695 2.55005 31.5039 9.0313 31.5039 17C31.5039 24.9688 24.9695 31.5032 17.0008 31.5032Z" /><path d="M17.9039 6.32194C16.3633 6.05631 14.8227 6.48131 13.707 7.43756C12.5383 8.39381 11.8477 9.82819 11.8477 11.3688C11.8477 11.9532 11.9539 12.5376 12.1664 13.0688C12.3258 13.5469 12.857 13.8126 13.3352 13.6532C13.8133 13.4938 14.0789 12.9626 13.9195 12.4844C13.8133 12.1126 13.707 11.7938 13.707 11.3688C13.707 10.4126 14.132 9.50944 14.8758 8.87194C15.6195 8.23444 16.5758 7.96881 17.5852 8.18131C18.9133 8.39381 19.9758 9.50944 20.1883 10.7844C20.4539 12.3251 19.657 13.8126 18.2227 14.3969C16.8945 14.9282 16.0445 16.2563 16.0445 17.7969V21.1969C16.0445 21.7282 16.4695 22.1532 17.0008 22.1532C17.532 22.1532 17.957 21.7282 17.957 21.1969V17.7969C17.957 17.0532 18.382 16.3626 18.9664 16.1501C21.1977 15.2469 22.4727 12.9094 22.0477 10.4657C21.6758 8.39381 19.9758 6.69381 17.9039 6.32194Z" /><path d="M17.0531 24.8625H16.8937C16.3625 24.8625 15.9375 25.2875 15.9375 25.8188C15.9375 26.35 16.3625 26.7751 16.8937 26.7751H17.0531C17.5844 26.7751 18.0094 26.35 18.0094 25.8188C18.0094 25.2875 17.5844 24.8625 17.0531 24.8625Z" /></svg>';

    $wp_customize->add_setting('faq_section_svg', array(
        'default'   => $default_svg,
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('faq_section_svg_control', array(
        'label'      => __('FAQ Icon SVG', 'devdinos'),
        'section'    => 'faq_section',
        'settings'   => 'faq_section_svg',
        'type'       => 'textarea',
    ));

    // Blog Section
  $wp_customize->add_section('blog_section', array(
    'title' => __('Blog Section', 'devdinos'),
    'priority' => 36,
  ));

  // Blog Subtitle
  $wp_customize->add_setting('blog_subtitle', array(
    'default' => 'Our Blogs',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('blog_subtitle', array(
    'label' => __('Subtitle', 'devdinos'),
    'section' => 'blog_section',
    'type' => 'text',
  ));

  // Blog Title
  $wp_customize->add_setting('blog_title', array(
    'default' => 'Our Recent News',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('blog_title', array(
    'label' => __('Title', 'devdinos'),
    'section' => 'blog_section',
    'type' => 'text',
  ));

  // Blog Description
  $wp_customize->add_setting('blog_description', array(
    'default' => 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.',
    'sanitize_callback' => 'wp_kses_post',
  ));
  $wp_customize->add_control('blog_description', array(
    'label' => __('Description', 'devdinos'),
    'section' => 'blog_section',
    'type' => 'textarea',
  ));

  // Number of posts to display
  $wp_customize->add_setting('blog_posts_per_page', array(
      'default'           => 3,
      'sanitize_callback' => 'absint',
  ));
  $wp_customize->add_control('blog_posts_per_page', array(
      'label'       => __('Number of Posts to Show', 'devdinos'),
      'section'     => 'blog_section',
      'type'        => 'number',
      'input_attrs' => array(
          'min'  => 1,
          'step' => 1,
      ),
  ));

  // Contact Section
  $wp_customize->add_section('contact_section', array(
    'title' => __('Contact Section', 'devdinos'),
    'priority' => 37,
  ));

  // Contact Subtitle
  $wp_customize->add_setting('contact_subtitle', array(
    'default' => 'CONTACT US',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_subtitle', array(
    'label' => __('Subtitle', 'devdinos'),
    'section' => 'contact_section',
    'type' => 'text',
  ));

  // Contact Title
  $wp_customize->add_setting('contact_title', array(
    'default' => 'Let\'s talk about your problem.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_title', array(
    'label' => __('Title', 'devdinos'),
    'section' => 'contact_section',
    'type' => 'text',
  ));

  // Location Title
  $wp_customize->add_setting('contact_location_title', array(
    'default' => 'Our Location',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_location_title', array(
    'label' => __('Location Title', 'devdinos'),
    'section' => 'contact_section',
    'type' => 'text',
  ));

  // Location Address
  $wp_customize->add_setting('contact_location_address', array(
    'default' => '401 Broadway, 24th Floor, Orchard Cloud View, London',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_location_address', array(
    'label' => __('Location Address', 'devdinos'),
    'section' => 'contact_section',
    'type' => 'text',
  ));

  // Help Title
  $wp_customize->add_setting('contact_help_title', array(
    'default' => 'How Can We Help?',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_help_title', array(
    'label' => __('Help Title', 'devdinos'),
    'section' => 'contact_section',
    'type' => 'text',
  ));

  // Help Email 1
  $wp_customize->add_setting('contact_help_email_1', array(
    'default' => 'info@yourdomain.com',
    'sanitize_callback' => 'sanitize_email',
  ));
  $wp_customize->add_control('contact_help_email_1', array(
    'label' => __('Help Email 1', 'devdinos'),
    'section' => 'contact_section',
    'type' => 'email',
  ));

  // Help Email 2
  $wp_customize->add_setting('contact_help_email_2', array(
    'default' => 'contact@yourdomain.com',
    'sanitize_callback' => 'sanitize_email',
  ));
  $wp_customize->add_control('contact_help_email_2', array(
    'label' => __('Help Email 2', 'devdinos'),
    'section' => 'contact_section',
    'type' => 'email',
  ));

  // Form Title
  $wp_customize->add_setting('contact_form_title', array(
    'default' => 'Send us a Message',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_form_title', array(
    'label' => __('Form Title', 'devdinos'),
    'section' => 'contact_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('contact_form_shortcode', array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('contact_form_shortcode', array(
      'label' => __('Contact Form 7 Shortcode', 'devdinos'),
      'section' => 'contact_section',
      'description' => __('If you leave this empty, the default form will be shown.', 'devdinos'),
      'type' => 'text',
  ));

     $default_cf7_css = '
.wpcf7-form .wpcf7-form-control-wrap {
  display: block;
  margin-bottom: 22px;
}

.wpcf7-form label {
  display: block;
  margin-bottom: 1rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: #637381;
}

.wpcf7-form input[type="text"],
.wpcf7-form input[type="email"],
.wpcf7-form input[type="tel"],
.wpcf7-form textarea {
  width: 100%;
  border: 0;
  border-bottom: 1px solid #f1f1f1;
  background-color: transparent;
  padding-bottom: 0.75rem;
  color: #637381;
}

.wpcf7-form input[type="text"]::placeholder,
.wpcf7-form input[type="email"]::placeholder,
.wpcf7-form input[type="tel"]::placeholder,
.wpcf7-form textarea::placeholder {
  color: rgba(99, 115, 129, 0.6);
}

.wpcf7-form input[type="text"]:focus,
.wpcf7-form input[type="email"]:focus,
.wpcf7-form input[type="tel"]:focus,
.wpcf7-form textarea:focus {
  border-bottom-color: #366BFF;
  outline: none;
}

.wpcf7-form textarea {
  resize: none;
}

.wpcf7-form .wpcf7-submit {
  display: inline-block;
  padding: 14px 40px;
  border: 1px solid #366BFF;
  border-radius: 5px;
  background-color: #366BFF;
  color: #ffffff;
  font-size: 16px;
  font-weight: 600;
  text-align: center;
  cursor: pointer;
  transition: all .3s ease-in-out;
}

.wpcf7-form .wpcf7-submit:hover {
  background-color: #ffffff;
  color: #366BFF;
}
';

  // Contact Form Custom CSS

  $wp_customize->add_setting('contact_form_css', array(
      'default' => $default_cf7_css,
      'sanitize_callback' => 'wp_strip_all_tags'
  ));

  $wp_customize->add_control('contact_form_css', array(
      'label' => __('Contact Form 7 Custom CSS', 'devdinos'),
      'section' => 'contact_section',
      'description' => __('Add custom CSS to style your Contact Form 7. The styles will be applied to the form on the contact page.', 'devdinos'),
      'type' => 'textarea',
  ));

  // Footer Brands Section
  $wp_customize->add_section('footer_brands_section', array(
    'title' => __('Footer Brands', 'devdinos'),
    'priority' => 150, // Adjusted priority to appear after other sections
  ));

  // Show/Hide Footer Brands Section
  $wp_customize->add_setting('footer_brands_section_show', array(
    'default' => 1,
    'sanitize_callback' => 'absint'
  ));
  $wp_customize->add_control('footer_brands_section_show', array(
    'label' => __('Show Footer Brands Section', 'devdinos'),
    'section' => 'footer_brands_section',
    'type' => 'checkbox',
  ));

  // Footer Brands Title
  $wp_customize->add_setting('footer_brands_title', array(
    'default' => 'Built with latest technology',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('footer_brands_title', array(
    'label' => __('Footer Brands Section Title', 'devdinos'),
    'section' => 'footer_brands_section',
    'type' => 'text',
  ));

  // Loop for 5 brands
for ($i = 1; $i <= 5; $i++) {
    // Brand Image
    $wp_customize->add_setting("footer_brand_image_$i", array(
      'default' => get_template_directory_uri() . "/assets/images/brands/brand-0{$i}.svg",
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "footer_brand_image_$i", array(
      'label' => __("Brand Image $i (Light)", 'devdinos'),
      'section' => 'footer_brands_section',
      'settings' => "footer_brand_image_$i",
    )));

    // Brand Image Dark
    $wp_customize->add_setting("footer_brand_image_dark_$i", array(
      'default' => get_template_directory_uri() . "/assets/images/brands/brand-dark-0{$i}.svg",
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "footer_brand_image_dark_$i", array(
      'label' => __("Brand Image $i (Dark)", 'devdinos'),
      'section' => 'footer_brands_section',
      'settings' => "footer_brand_image_dark_$i",
    )));

    // Brand URL
    $wp_customize->add_setting("footer_brand_url_$i", array(
      'default' => '#',
      'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control("footer_brand_url_$i", array(
      'label' => __("Brand URL $i", 'devdinos'),
      'section' => 'footer_brands_section',
      'type' => 'url',
    ));

     // Footer Section
  $wp_customize->add_section('footer_section', array(
    'title' => __('Footer', 'devdinos'),
    'priority' => 200,
  ));

  // Footer Logo
  $wp_customize->add_setting('footer_logo');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
    'label' => __('Footer Logo', 'devdinos'),
    'section' => 'footer_section',
    'settings' => 'footer_logo',
  )));

  // Footer Description
  $wp_customize->add_setting('footer_description', array(
    'default' => 'We create digital experiences for brands and companies by using technology.',
    'sanitize_callback' => 'wp_kses_post',
  ));
  $wp_customize->add_control('footer_description', array(
    'label' => __('Footer Description', 'devdinos'),
    'section' => 'footer_section',
    'type' => 'textarea',
  ));

  // Social Links
    $socials = array('facebook', 'twitter', 'instagram', 'linkedin');
    foreach ($socials as $social) {
        $wp_customize->add_setting("footer_social_{$social}_url", array(
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("footer_social_{$social}_url", array(
            'label' => __(ucfirst($social) . ' URL', 'devdinos'),
            'section' => 'footer_section',
            'type' => 'url',
        ));
    }

  }

    // Copyright Text
    $wp_customize->add_setting('footer_copyright_text', array(
        'default' => 'Designed and Developed by',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_copyright_text', array(
        'label' => __('Copyright Text', 'devdinos'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Copyright Link Text
    $wp_customize->add_setting('footer_copyright_link_text', array(
        'default' => 'TailGrids and UIdeck',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_copyright_link_text', array(
        'label' => __('Copyright Link Text', 'devdinos'),
        'section' => 'footer_section',
        'type' => 'text',
    ));

    // Copyright Link URL
    $wp_customize->add_setting('footer_copyright_link_url', array(
        'default' => 'https://tailgrids.com',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('footer_copyright_link_url', array(
        'label' => __('Copyright Link URL', 'devdinos'),
        'section' => 'footer_section',
        'type' => 'url',
    ));
}
add_action('customize_register', 'devdinos_customize_register');

// Custom Post Type for Testimonials
function create_testimonial_post_type() {
    register_post_type('testimonial',
        array(
            'labels'      => array(
                'name'          => __('Testimonials'),
                'singular_name' => __('Testimonial'),
            ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => 'testimonials'),
            'show_in_rest' => true,
            'supports'    => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon'   => 'dashicons-format-quote',
        )
    );
}
add_action('init', 'create_testimonial_post_type');

// Add meta box for testimonial rating
function testimonial_add_meta_box() {
    add_meta_box(
        'testimonial_rating',
        __('Testimonial Rating', 'devdinos'),
        'testimonial_rating_callback',
        'testimonial',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'testimonial_add_meta_box');

// Callback function to display the rating input field
function testimonial_rating_callback($post) {
    wp_nonce_field('testimonial_save_meta_box_data', 'testimonial_meta_box_nonce');
    $value = get_post_meta($post->ID, '_testimonial_rating', true);
    echo '<label for="testimonial_rating_field">';
    _e('Rating (1-5):', 'devdinos');
    echo '</label> ';
    echo '<input type="number" id="testimonial_rating_field" name="testimonial_rating_field" value="' . esc_attr($value) . '" size="25" min="1" max="5" />';
}

// Save meta box data
function testimonial_save_meta_box_data($post_id) {
    if (!isset($_POST['testimonial_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['testimonial_meta_box_nonce'], 'testimonial_save_meta_box_data')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (isset($_POST['post_type']) && 'testimonial' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }
    if (!isset($_POST['testimonial_rating_field'])) {
        return;
    }
    $rating = intval($_POST['testimonial_rating_field']);
    if ($rating >= 1 && $rating <= 5) {
        update_post_meta($post_id, '_testimonial_rating', $rating);
    } else {
        delete_post_meta($post_id, '_testimonial_rating');
    }
}
add_action('save_post', 'testimonial_save_meta_box_data');



// Custom Post Type for Projects
function create_project_post_type() {
  register_post_type('project',
    array(
      'labels' => array(
        'name' => __('Projects'),
        'singular_name' => __('Project')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projects'),
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'menu_icon'   => 'dashicons-portfolio',
    )
  );
}
add_action('init', 'create_project_post_type');

function create_project_taxonomy() {
  register_taxonomy(
    'project_category',
    'project',
    array(
      'label' => __('Project Categories'),
      'rewrite' => array('slug' => 'project-category'),
      'hierarchical' => true,
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'create_project_taxonomy');

// Register Custom Post Type for FAQ
function custom_post_type_faq() {
    $labels = array(
        'name'                  => _x( 'FAQs', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'FAQs', 'text_domain' ),
        'name_admin_bar'        => __( 'FAQ', 'text_domain' ),
        'archives'              => __( 'FAQ Archives', 'text_domain' ),
        'attributes'            => __( 'FAQ Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent FAQ:', 'text_domain' ),
        'all_items'             => __( 'All FAQs', 'text_domain' ),
        'add_new_item'          => __( 'Add New FAQ', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New FAQ', 'text_domain' ),
        'edit_item'             => __( 'Edit FAQ', 'text_domain' ),
        'update_item'           => __( 'Update FAQ', 'text_domain' ),
        'view_item'             => __( 'View FAQ', 'text_domain' ),
        'view_items'            => __( 'View FAQs', 'text_domain' ),
        'search_items'          => __( 'Search FAQ', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into FAQ', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'text_domain' ),
        'items_list'            => __( 'FAQs list', 'text_domain' ),
        'items_list_navigation' => __( 'FAQs list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter FAQs list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'FAQ', 'text_domain' ),
        'description'           => __( 'FAQ Post Type', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-chat',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'faq', $args );
}
add_action( 'init', 'custom_post_type_faq', 0 );
?>