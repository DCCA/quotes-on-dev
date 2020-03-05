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
		<span class="source">
		    <a href="<?php echo get_post_field('_qod_quote_source_url'); ?>">
			<?php echo get_post_field('_qod_quote_source'); ?>
		    </a>    
		<span>
	</div><!-- .entry-header -->
</article><!-- #post-## -->
