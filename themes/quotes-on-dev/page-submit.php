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
            <?php get_template_part('template-parts/content', 'loggedin')  ?> 
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'notloggedin') ?>
        <?php endif;  ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
