<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oleinpress-001
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="l-site-footer">
		<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<div class="p-footer-widget-area">
			<div class="p-footer-widget-area__inner p-footer-widget-area__inner_col2 c-container">
				<?php dynamic_sidebar( 'footer' ); ?>
			</div>
		</div>
		<?php endif; ?>

		<div class="p-copyright">
			<p class="c-container">
				<?php
				$blog_name = get_bloginfo( 'name' );
				$blog_url  = get_bloginfo( 'url' );
				printf( esc_html__( '%s Allrights reserved.', 'op001' ), '<a href="' . $blog_url . '">' . $blog_name . '</a>' );
				?>
				<span class="separator"> | </span>
				<?php printf( esc_html__( 'Proudly powered by %s', 'op001' ), '<a href="https://wordpress.org/">WordPress</a>' ); ?>
				<span class="separator"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'op001' ), 'OleinPress - Just Blog', '<a href="https://olein-design.com">Olein Design</a>' ); ?>
			</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
    jQuery(function($){
        $('.p-slider').slick({
            arrows: false,
            autoplay: true,
            fade: true,
            slidesToShow: 1,
        });
    });
</script>

</body>
</html>
