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
		<?php if ( is_active_sidebar( 'footer' ) ) :
			$footer_widget_col_num = get_theme_mod( 'op-footer-col-number' );
			?>
		<div class="p-footer-widget-area">
			<div class="p-footer-widget-area__inner p-footer-widget-area__inner_col<?php echo $footer_widget_col_num; ?> c-container">
				<?php dynamic_sidebar( 'footer' ); ?>
			</div>
		</div>
		<?php endif; ?>

		<div class="p-copyright">
			<p class="c-container">
				<?php echo get_theme_mod( 'op-copyright' ); ?>
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
