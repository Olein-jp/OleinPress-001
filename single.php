<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package oleinpress-001
 */

get_header();
?>

	<div id="primary" class="l-content-area">
		<main id="main" class="p-site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('p-single'); ?>>
				<header class="p-single-header">
					<?php the_title( '<h1 class="p-single-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				<?php op001_thumbnail_output(); ?>

				<div class="p-single-content">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'op001' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->

				<footer class="p-single-footer">
					<ul class="p-single-meta">
						<?php op001_posted_on(); ?>
					</ul>
				</footer>
			</article><!-- #post-<?php the_ID(); ?> -->
		<?php

			get_template_part( 'template-parts/posts-navigation' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
