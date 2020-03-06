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

    <div class="submit-form-wrapper">
        <form class="submit-quote-form" action="submit" method="post">
            <label for="author">Author of the Quote</label>
            <input type="text" name="author" id="" value="">
            <label for="quote">Quote</label>
            <textarea type="text" name="quote" id="" value=""></textarea>
            <label for="where">Where did you find this quote?(eg. book name)</label>
            <input type="text" name="where" id="" value="">
            <label for="url">Provice the URL of the quote source, if available.</label>
            <input type="text" name="url" id="" value="">
	    <input type="submit" name="submit" id="new-quote-submit" value="Send Quote">
	    <div class="feedback-wrap"></div>
	</form>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
