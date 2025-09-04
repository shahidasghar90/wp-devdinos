<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package devdinos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Navbar Section Start -->
<div class="absolute top-0 left-0 z-40 flex items-center w-full bg-transparent ud-header">
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
</div>
<!-- Navbar Section End -->