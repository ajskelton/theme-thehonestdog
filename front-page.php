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

			<div class="primary content-area hero-wrap">
				<div class="hero" style="background-image: url('<?php echo $hero_image['url'] ?>')"></div>
				<p class="hero-text"><?php the_field('hero_text'); ?></p>
			</div>

			<?php get_sidebar( 'frontpage' ); ?>

		</div><!-- .wrap -->

		<div class="wrap">
			<ul class="bxslider">
			  <li>
					<p class="quote">
						"Not only do I support shopping local, I also support honest and sincere business owners like Pam."
					</p>
					<p class="cite">
						&mdash; Edith
					</p>
				</li>
			  <li>
			  	<p class="quote">
						"Great quality foods and treats sold at a fair price! Not to mention great service!"
					</p>
					<p class="cite">
						&mdash; Bettina
					</p>
			  </li>
			  <li>
			  	<p class="quote">
						"My dog and I love the place. They do a great job bathing and grooming, we wouldn't go anywhere else."
					</p>
					<p class="cite">
						&mdash; Anne
					</p>
			  </li>
			</ul>
		</div>
						
		<div class="wrap">
				
			<div class="card">
				<a href="<?php the_field('card_1_link'); ?>" title="">
					<h3><?php the_field('card_1_heading'); ?></h3>
					<div class="card-image" style="background-image: url('<?php echo $card_1_image['url'] ?>')"></div>
				</a>
			</div>

			<div class="card">
				<a href="<?php the_field('card_2_link'); ?>" title="">
					<h3><?php the_field('card_2_heading'); ?></h3>
					<div class="card-image" style="background-image: url('<?php echo $card_2_image['url'] ?>')"></div>
				</a>
			</div>

			<div class="card">
				<a href="<?php the_field('card_3_link'); ?>" title="">
					<h3><?php the_field('card_3_heading'); ?></h3>
					<div class="card-image" style="background-image: url('<?php echo $card_3_image['url'] ?>')"></div>
				</a>
			</div>

		</div><!-- .wrap -->

	</div><!-- #content -->

<?php get_footer(); ?>
