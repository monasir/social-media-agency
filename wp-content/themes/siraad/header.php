<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Siraadnewtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="nav-container">
        <div class="wrapper">
            <nav class="">
                <div class="logo">
                    <?php the_custom_logo();?>
                   <!-- <img src="<?php get_template_directory_uri() ?>/social-agency/wp-content/themes/siraad/img/logo2.jpg" alt="">-->
                </div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'my_main_menu',
                    'depth' => 2,
                    'container' => 'ul',
                    'container_class' => ''
                ));?>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <!--<ul class="nav-items">
                    <li><a href="#" class="nav-links">About us</a></li>
                    <li><a href="#" class="nav-links">services</a></li>
                    <li><a href="#" class="nav-links">Reviews</a></li>
                    <li><a href="#" class="nav-links">Blog</a></li>
                    <li><a href="#" class="nav-links">Contact</a></li>
                </ul>-->
            </nav>
        </div>
    </div>
