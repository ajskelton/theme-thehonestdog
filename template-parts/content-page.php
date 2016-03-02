<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package The Honest Dog
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="featured-image">
		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		} 
		?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'thehonestdog' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'thehonestdog' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
