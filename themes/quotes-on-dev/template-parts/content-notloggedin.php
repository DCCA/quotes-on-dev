<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
        <p>Sorry you must be logged in to submit a quote!</p>
        <a href="<?php echo wp_login_url() ?>">Click here to log in</a>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
