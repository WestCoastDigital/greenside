	   	<section id="testimonials">	   		
	   		<h3 class="section-title border"><?php echo __( 'Testimonials', 'workpower' ); ?></h3>
	   		<i class="fa fa-quote-left"></i>
	   		<ul class="testimonials">
				<?php

				// check if the repeater field has rows of data
				if( have_rows( 'testimonials' ) ):

					// loop through the rows of data
					while ( have_rows( 'testimonials' ) ) : the_row(); ?>
						
						<li class="testimonial">
							<p class="quote">"<?php the_sub_field( 'testimonial' ); ?>"</p>
							<p class="author">- <?php the_sub_field( 'testimonial_author' ); ?></p>
						</li>

					<?php endwhile;

				else :

					// no rows found

				endif;

				?>
	   		</ul>
	   	</section>