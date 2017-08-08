<section id="contact">
	<h3 class="section-title border"><?php the_field( 'contact_heading' ); ?></h3>
	<p class="section-tagline"><?php the_field( 'contact_tagline' ); ?></p>
	<?php 
	$form = get_field( 'contact_form' );
	echo do_shortcode( '[gravityform id="' . $form . '" title="false" description="false"]' );
	?>
	<div class="contact-widgets">
		<div id="address">
			<h4 class="section-subtitle border"><?php echo __( 'Address', 'workpower' ); ?></h4>
			<?php the_field( 'contact_address' ); ?>
		</div>
		<div id="hours">
			<h4 class="section-subtitle border"><?php echo __( 'Trading Hours', 'workpower' ); ?></h4>
			<?php the_field( 'contact_hours' ); ?>
		</div>
		<div id="phone">
			<h4 class="section-subtitle border"><?php echo __( 'Contact Info', 'workpower' ); ?></h4>
			<?php the_field( 'contact_info' ); ?>
		</div>
	</div>
</section>	