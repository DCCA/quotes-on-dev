<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<div class="entry-header">
		<?php the_title( '<h2 class="entry-title">— ', '</h2>' ); ?>
	</div><!-- .entry-header -->
</article><!-- #post-## -->
