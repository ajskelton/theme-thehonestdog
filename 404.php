<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package The Honest Dog
 */

get_header(); ?>

	<div class="wrap content-area">

		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="page-content">
				<a href="<?php echo get_home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/404_error.jpg" alt="404 Error Dog">
				</a>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

	</div><!-- .wrap -->

<?php get_footer(); ?>
