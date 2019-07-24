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
			<header class="c-page-header">
				<p class="c-page-header__title">New Posts</p>
			</header>
			<div class="p-entry-wrap">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-normal' );

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
