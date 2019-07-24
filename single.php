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

			get_template_part( 'template-parts/content' );

			the_post_navigation();

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
