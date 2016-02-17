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

	<header id="masthead" class="site-header">

		<div class="top-bar">
			<div class="wrap">
				<ul class="top-nav">
					<li>
						<svg class="icon icon-facebook">
				    		<use xlink:href="#icon-facebook"></use>
						</svg>
					</li>
					<li>
						<svg class="icon icon-twitter">
	    					<use xlink:href="#icon-twitter"></use>
						</svg>
					</li>
					<li>Contact</li>
				</ul> <!-- .top-nav -->
			</div> <!-- .wrap -->
		</div> <!-- .top-bar -->

		<div class="main-nav">
			
			<div class="wrap">

			    <?php if ( is_front_page() ) : ?>
			    	<h1 class="site-title">
			    		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			    			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/HonestDog.Logo.png" alt="Logo Image">
						</a>
					</h1>
				<?php else : ?>
					<p class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/HonestDog.Logo.png" alt="Logo Image">
						</a>
					</p>
				<?php endif; ?>


				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu"><?php thehonestdog_do_svg( array( 'icon' => 'bars', 'title' => 'Display Menu' ) ); ?><span class="menu-toggle-text"><?php esc_html_e( 'Menu', 'thehonestdog' ); ?></span></button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'menu dropdown'
						) );
					?>
				</nav><!-- #site-navigation -->

			</div><!-- .wrap -->
		</div><!-- .main-nav -->
	</header><!-- #masthead -->

	<?php wds_page_builder_area( 'before_content' ); ?>

	<div id="content" class="site-content">
