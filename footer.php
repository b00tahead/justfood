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
					<div id="footer-section-1" class="col-12 col-md-6 col-xl-5 footer-section">
						<?php dynamic_sidebar('footer-1'); ?>
					</div>
				<?php endif; ?>
				<?php if(is_active_sidebar('footer-2') || is_active_sidebar('footer-3') ): ?>
					<div class="footer-section-container container-fluid col-12 col-md-6 col-xl-7">
						<div class="row">
							<?php if(is_active_sidebar('footer-2')): ?>
								<div id="footer-section-2" class="col-12 col-xl-6 footer-section">
									<?php dynamic_sidebar('footer-2'); ?>
								</div>
							<?php endif; ?>
							<?php if(is_active_sidebar('footer-3')): ?>
								<div id="footer-section-3" class="col-12 col-xl-6 footer-section">
									<?php dynamic_sidebar('footer-3'); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
