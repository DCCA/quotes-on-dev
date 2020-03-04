<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			$args = array(
				'orderby' => 'rand',
				'posts_per_page' => 1,
				'post_type' => 'post',
			 ); 
			 $rands_posts = get_posts( $args );
		
			foreach ( $rands_posts as $post ) : setup_postdata( $post ); ?>
		
			<?php get_template_part( 'template-parts/content', 'quote' ); ?>
		
		<?php endforeach; wp_reset_postdata(); ?>
		
			<button id="get-new-quote">Show me Another</button>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
