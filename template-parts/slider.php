<?php if ( is_home() ) : ?>
	<?php
	$slider_image_01 = get_theme_mod( 'slider-image-01' );
	$slider_image_02 = get_theme_mod( 'slider-image-02' );
	$slider_image_03 = get_theme_mod( 'slider-image-03' );
	if ( $slider_image_01 || $slider_image_02 || $slider_image_03 ) {
	?>
		<div class="p-slider">
			<?php if ( $slider_image_01 ) : ?>
			<div class="p-slider__item">
				<img src="<?php echo $slider_image_01; ?>" alt="" class="p-slider__image">
			</div>
			<?php endif; ?>
			<?php if ( $slider_image_02 ) : ?>
			<div class="p-slider__item">
				<img src="<?php echo $slider_image_02; ?>" alt="" class="p-slider__image">
			</div>
			<?php endif; ?>
			<?php if ( $slider_image_03 ) : ?>
			<div class="p-slider__item">
				<img src="<?php echo $slider_image_03; ?>" alt="" class="p-slider__image">
			</div>
			<?php endif; ?>
		</div>
	<?php } ?>
<?php endif; ?>