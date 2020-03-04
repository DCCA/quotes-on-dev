<?php
/**
 * Template part for displaying custom archive page.
 *
 * @package QOD_Starter_Theme
 */

?>

<li>
	<a href="<?php echo get_post_permalink()?>" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title(); ?>
	</a>
</li><!-- #post-## -->