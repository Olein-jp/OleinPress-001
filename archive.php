<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oleinpress-001
 */

get_header();
?>
	<div id="primary" class=p-content-area">
		<main id="main" class="p-site-main">
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<div class="p-entry-wrap">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-entry' ); ?>>
					<a class="c-entry__wrap" href="<?php the_permalink(); ?>" rel="bookmark">
						<header class="c-entry__header">
							<?php the_title( '<h2 class="c-entry__title c-gf">', '</h2>' ); ?>
						</header><!-- .entry-header -->

						<?php op001_thumbnail_output() ?>

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
				<?php

				endwhile;

//				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>

		</main><!-- #main -->
		<?php the_posts_pagination(
				array(
//						'prev_next' => false,
					'prev_text'          => '<i class="fas fa-chevron-left"></i>',
					'next_text'          => '<i class="fas fa-chevron-right"></i>',
					'type'               => 'list',
				)
		); ?>
	</div><!-- #primary -->
<?php
get_footer();
