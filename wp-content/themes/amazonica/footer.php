<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if (!is_page_template('blank-page.php') && !is_page_template('blank-page-with-container.php')) : ?>

	<footer class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<?php get_template_part('footer-widget'); ?>
		<div class="container pt-3 pb-3">
			<div class="site-info">
				<span> Operado por Catango SAS <br> Diseñado por CILAB</span>
			</div><!-- close .site-info -->
			<div class="social-media">
				<ul>
					<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
					<li><a href=""><i class="fab fa-youtube"></i></a></li>
					<li><a href=""><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>