<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<!-- List posts -->
			<?php
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'post',
			 ); 
			 $rands_posts = get_posts( $args ); ?>

			<h2>Quotes Authors</h2>
			<ul>
				<?php foreach ( $rands_posts as $post ) : setup_postdata( $post ); ?>
					<?php get_template_part( 'template-parts/content', 'archive' ); ?>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
			<!-- List Categories -->
			<?php
			$categories = get_categories();?>
			<h2>Categories</h2>
			<ul>
				<?php foreach ( $categories as $category): ?>
					<li>
						<a href="<?php echo get_category_link($category) ?>"><?php echo $category->name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
			<!-- List Tags -->
			<?php
			$tags = get_tags(); ?>
			<h2>Tags</h2>
			<ul>
				<?php foreach ( $tags as $tag): ?>
					<li>
						<a href="<?php echo get_tag_link($tag)?>"><?php echo $tag->name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
