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
		<div class="container-fluid">
			<div class="row">
				<?php if(is_active_sidebar('footer-1')): ?>
					<div id="footer-section-1" class="col-12">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
				<?php endif ?>
				<?php if(is_active_sidebar('footer-2')): ?>
					<div id="footer-section-2" class="col-12">
						<?php dynamic_sidebar('footer-2'); ?>
					</div>
				<?php endif ?>
				<?php if(is_active_sidebar('footer-3')): ?>
					<div id="footer-section-3" class="col-12">
						<?php dynamic_sidebar('footer-3'); ?>
					</div>
				<?php endif ?>
			</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
