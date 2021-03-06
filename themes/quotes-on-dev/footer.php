<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
				</nav><!-- #site-navigation -->
				<div class="site-info">
					<p><?php printf( esc_html( 'Brought to you by %s' ), '' ); ?></p>
					<a href="<?php echo esc_url( 'https://github.com/DCCA' ); ?>">DCCA</a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
