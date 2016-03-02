<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Honest Dog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="secondary widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<iframe height="395" src="http://www.askavetquestion.com/tools/chocolatecalculator.php" scrolling="no" frameborder="0"></iframe>
<p>Calculator provided by <a href="http://www.askavetquestion.com/">www.AskAVetQuestion.com</a>.</p>
</div><!-- .secondary -->
