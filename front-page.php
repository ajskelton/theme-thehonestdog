<?php
/**
 * The template the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Honest Dog
 */

get_header(); 
$hero_image = get_field('hero_image');
?>

	<div class="wrap">

		<div class="primary content-area">
			<div class="hero" style="background: url('<?php echo $hero_image['url'] ?>') no-repeat center center auto 100%;"></div>
		</div>

		<div class="secondary">

			<div class="box">
				<h3>Contact</h3>
				<div class="contact-details">
					<p>Phone: 916-979-9274</p>
					<p>Email: info@thehonestdog.com</p>
					<h4>Store Hours</h4>
					<p>Mon - Fri : 10:00 am - 7:00 pm</p>
					<p>Sat - Sun : 10:00 am - 5:00 pm</p>
					<p>Grooming available by appointment</p>
				</div>
			</div>

			<div class="box">
				<h3>Location</h3>
				
			</div>

		</div>
	</div>

	<div class="wrap">
		<p class="hero-text">The Honest Dog is Sacramento's longest-running self-service dog wash, grooming shop, and quality dog &amp; cat product store.</p>
	</div>
					
	<div class="wrap">
			
		<div class="card">
			<h3>DIY Dog Wash</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rePlanet_card.jpg">
		</div>

		<div class="card">
			<h3>Grooming</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rePlanet_card.jpg">
		</div>

		<div class="card">
			<h3>rePlanet Pets</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rePlanet_card.jpg">
		</div>

	</div>

				<?php // while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php // endwhile; // End of the loop. ?>



			</main><!-- #main -->
		</div><!-- .primary -->

	</div><!-- .wrap -->

	<!-- <div id="map_canvas"></div> -->

<?php get_footer(); ?>
