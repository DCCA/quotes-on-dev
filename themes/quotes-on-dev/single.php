<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'quote' ); ?>

			<?php //the_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

		<button id="get-new-quote">Show me Another</button>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
