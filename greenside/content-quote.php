<style>
#quote:before {
	background-color: <?php the_field( 'cta_overlay' ); ?>;
}
</style>
<section id="quote" style="background-image:url('<?php the_field( 'cta_background' ); ?>');">
	<?php the_field( 'cta_content' ); ?>
</section>