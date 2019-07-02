<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Just_Food
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id="footer-section-1">
			<?php
				if(is_active_sidebar('footer-1')){
				dynamic_sidebar('footer-1');
				}
			?>
		</div>
		<div id="footer-section-2">
			<?php
				if(is_active_sidebar('footer-2')){
				dynamic_sidebar('footer-2');
				}
			?>
		</div>
		<div id="footer-section-3">
			<?php
				if(is_active_sidebar('footer-3')){
				dynamic_sidebar('footer-3');
				}
			?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
