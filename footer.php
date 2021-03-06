<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Honest Dog
 */

?>

</div><!-- .site-content -->

	<div class="footer-area">
		<?php wds_page_builder_area( 'after_content' ); ?>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			The Honest Dog &copy; <?php echo date('Y'); ?> | Design by <a href="http://www.redcartstudios.com" title="Red Cart Studios">Red Cart Studios</a>.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php include_once("inc/analyticstracking.php") ?>
<?php include_once("inc/googlemap.php") ?>
</body>
</html>
