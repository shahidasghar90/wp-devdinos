
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

    <!-- ====== Hero Section Start -->
    <?php
    get_template_part('template-parts/hero-section');
    ?>
    <!-- Hero Section end -->

    

    <!-- ====== Features Section Start -->
    <?php
    get_template_part('template-parts/features-section');
    ?>
    <!-- ====== Features Section End -->

     <!-- ====== About Section Start -->
    <?php
    get_template_part('template-parts/about-section');
    ?>
    <!-- ====== About Section End -->

    <!-- ====== CTA Section Start -->
    <?php 
    get_template_part('template-parts/cta-section');
    ?>
    <!-- ====== CTA Section End -->


    <!-- ====== Portfolio Section Start -->
    <?php
    get_template_part('template-parts/portfolio-section');
    ?>
    <!-- ====== Portfolio Section End -->


    <!-- ====== Testimonial Section Start -->
    <?php
    get_template_part('template-parts/testimonials-section');
    ?>
    <!-- ====== Testimonial Section End -->

    <!-- ====== FAQ Section Start -->
    <?php
    get_template_part('template-parts/faq-section');
    ?>
    <!-- ====== FAQ Section End -->

    <!-- ====== Blog Section Start -->
    <?php
    get_template_part('template-parts/blog-section');
    ?>
    <!-- ====== Blog Section end -->

    <!-- ====== Contact Start ====== -->
    <?php
    get_template_part('template-parts/contact-section');
    ?>
    <!-- ====== Contact end ====== -->

    <!-- ====== Brands footer Section Start -->
    <?php
    get_template_part('template-parts/footer-brand-section');
    ?>
    <!-- ====== Brands footer Section End -->
     
    <?php get_footer(); ?>



  </body>
</html>