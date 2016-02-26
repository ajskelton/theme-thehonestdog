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
$card_1_image = get_field('card_1_image');
$card_2_image = get_field('card_2_image');
$card_3_image = get_field('card_3_image');
?>

		<div class="wrap">

			<div class="primary content-area">
				<div class="hero" style="background-image: url('<?php echo $hero_image['url'] ?>')"></div>
			</div>

			<div class="secondary">

				<div class="box">
					<h3>Contact</h3>
					<div class="contact-details">
						<?php the_field('contact_editor') ?>
					</div>
				</div>

				<div class="box">
					<h3>Location</h3>
					<div id="map_canvas"></div>
				</div>

			</div>

		</div><!-- .wrap -->

		<div class="wrap">
			<p class="hero-text"><?php the_field('hero_text'); ?></p>
		</div><!-- .wrap -->
						
		<div class="wrap">
				
			<div class="card">
				<a href="<?php the_field('card_1_link'); ?>" title="">
					<h3><?php the_field('card_1_heading'); ?></h3>
					<img src="<?php echo $card_1_image['url'] ?>">
				</a>
			</div>

			<div class="card">
				<a href="<?php the_field('card_2_link'); ?>" title="">
					<h3><?php the_field('card_2_heading'); ?></h3>
					<img src="<?php echo $card_2_image['url'] ?>">
				</a>
			</div>

			<div class="card">
				<a href="<?php the_field('card_3_link'); ?>" title="">
					<h3><?php the_field('card_3_heading'); ?></h3>
					<img src="<?php echo $card_3_image['url'] ?>">
				</a>
			</div>

		</div><!-- .wrap -->

	</div><!-- #content -->

<?php get_footer(); ?>
