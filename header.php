<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Honest Dog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php global $is_IE; if ( $is_IE ) : ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<?php endif; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php thehonestdog_include_svg_definitions(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'thehonestdog' ); ?></a>

	<?php wds_page_builder_area( 'hero' ); ?>

	<header id="masthead" class="site-header centered-navigation">
			
	  <div class="centered-navigation-wrapper">
	    <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
	    <?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'js-centered-navigation-menu',
				'menu_class'     => 'centered-navigation-menu show',
				'container' 	 => 'nav',
			) );
		?>
		<a href="<?php echo get_home_url(); ?>"><img class="menu-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/HonestDogLogo.png" alt="The Honest Dog Logo"></a>
	  </div>
	</header>

	<?php wds_page_builder_area( 'before_content' ); ?>

	<div id="content" class="site-content">
