<?php
/**
 * The template for displaying all single posts.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <?php if(is_user_logged_in()) : ?>
            <p>Is looged in</p>    
                <?php else : ?>
            <p>Is not looged in</p>
        <?php endif;  ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
