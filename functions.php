<?php
function my_custom_theme_enqueue_scripts() {
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/src/css/tailwind.css');
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_scripts');

function register_my_menu() {
  register_nav_menu('primary', __('Primary Menu'));
}
add_action('init', 'register_my_menu');

function add_menu_link_classes($atts, $item, $args) {
  if (isset($args->theme_location) && $args->theme_location === 'primary') {
    $atts['class'] = 'flex py-2 mx-8 text-base font-medium ud-menu-scroll text-dark group-hover:text-primary dark:text-white lg:mr-0 lg:inline-flex lg:px-0 lg:py-6 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70';
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_classes', 10, 3);

function add_menu_li_classes($classes, $item, $args) {
  if (isset($args->theme_location) && $args->theme_location === 'primary') {
    $classes[] = 'relative';
    $classes[] = 'group';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_li_classes', 10, 3);

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
}
add_action('customize_register', 'devdinos_customize_register');

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

// Custom Post Type for Testimonials
function create_testimonial_post_type() {
  register_post_type('testimonial',
    array(
      'labels' => array(
        'name' => __('Testimonials'),
        'singular_name' => __('Testimonial')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'testimonials'),
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'), // Title = Author, Editor = Quote, Thumbnail = Author Image
      'menu_icon'   => 'dashicons-testimonial',
    )
  );
}
add_action('init', 'create_testimonial_post_type');

?>