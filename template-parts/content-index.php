<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oleinpress-001
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-entry' ); ?>>
	<a class="c-entry__wrap" href="<?php the_permalink(); ?>" rel="bookmark">
		<header class="c-entry__header">
			<?php the_title( '<h2 class="c-entry__title c-gf">', '</h2>' ); ?>
		</header><!-- .entry-header -->

		<figure class="c-entry__thumbnail">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail(); ?>
			<?php else: ?>
			<img src="<?php echo get_template_directory_uri() . '/assets/images/sample-image-01.jpg'; ?>" alt="" class="c-entry-thumbnail__image">
			<?php endif; ?>
			<span class="c-entry__thumbnail-label">カテゴリー名</span>
		</figure>

		<div class="c-entry__excerpt">
			<?php the_excerpt(); ?>
		</div>

		<footer class="c-entry__footer">
			<ul class="c-entry__meta">
				<?php op001_posted_on(); ?>
			</ul>
		</footer>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
