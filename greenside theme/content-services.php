<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<section id="services">	   		
	<h3 class="section-title border"><?php the_field( 'service_heading' ); ?></h3>
	<p class="section-tagline"><?php the_field( 'service_tagline' ); ?></p>
	<div class="services">
		<?php

		if( have_rows('service') ):

			while ( have_rows('service') ) : the_row(); ?>
				
				<div class="service">
					<img src="<?php the_sub_field( 'service_image' ); ?>" />
					<h4 class="section-subtitle border"><?php the_sub_field( 'service_title' ); ?></h4>
					<p><?php the_sub_field( 'service_content' ); ?></p>
				</div>

			<?php endwhile;

		else :

		endif;

		?>
	</div>
</section>