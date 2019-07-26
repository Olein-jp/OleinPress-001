<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
		<article id="post-<?php the_ID(); ?>" <?php post_class('p-page'); ?>>
			<header class="p-page-header">
				<?php the_title( '<h1 class="p-page-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
			<?php op001_thumbnail_output(); ?>

			<div class="p-page-content">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'op001' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<footer class="p-page-footer">
				<ul class="p-page-meta">
					<?php op001_posted_on(); ?>
				</ul>
			</footer>
		</article><!-- #post-<?php the_ID(); ?> -->
		<?php
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
