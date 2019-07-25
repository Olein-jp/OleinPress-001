<?php
$previous_post = get_adjacent_post( false, '', true );
$next_post     = get_adjacent_post( false, '', false );
if ( $previous_post || $next_post ) :
	?>
<div class="p-posts-navigation">
	<?php if ( $previous_post ) : ?>
	<p class="p-posts-navigation__title p-posts-navigation__title_previous">
		<a href="<?php the_permalink( $previous_post->ID ); ?>" title="<?php echo get_the_title( $previous_post->ID ); ?>">
		<?php echo get_the_title( $previous_post->ID ); ?>
		</a>
	</p>
	<?php endif;
	if ( $next_post ) : ?>
	<p class="p-posts-navigation__title p-posts-navigation__title_next">
		<a href="<?php the_permalink( $next_post->ID ); ?>" title="<?php echo get_the_title( $previous_post->ID ); ?>">
			<?php echo get_the_title( $next_post->ID ); ?>
		</a>
	</p>
	<?php endif; ?>
</div>
<?php endif;