<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package oleinpress-001
 */

if ( ! function_exists( 'op001_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function op001_posted_on() {
		$time_string = '<li class="c-entry__meta-item"><time class="entry-date published" datetime="%1$s">%2$s</time></li>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<li class="c-entry__meta-item"><time class="entry-date published" datetime="%1$s">%2$s</time></li><li class="c-entry__meta-item"><time class="updated" datetime="%3$s">%4$s</time></li>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		echo $time_string; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'op001_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function op001_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'op001' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

/**
 * switch for container css classes
 */
if ( ! function_exists( 'op001_container_switch' ) ) :

	function op001_container_switch() {
		$container_switch = '';

		if ( is_single() || is_page() || is_home() ) {
			$container_switch = 'c-container ';
		}

		if ( is_single() || is_page() ) {
			$container_switch .= 'l-site-content_right-sidebar ';
		}

		echo $container_switch;

	}
endif;

if ( ! function_exists( 'op001_thumbnail_output') ) :

	function op001_thumbnail_output() {
		if ( is_singular() ) :
			?>
				<div class="p-post-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php else: ?>
				<figure class="c-entry__thumbnail">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail(); ?>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri() . '/assets/images/sample-image-01.jpg'; ?>" alt="" class="c-entry-thumbnail__image">
					<?php endif; ?>
					<span class="c-entry__thumbnail-label">カテゴリー名</span>
				</figure>
		<?php
		endif;
	}
endif;