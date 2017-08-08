<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<section id="projects">	   		
	<h3 class="section-title border"><?php the_field( 'gallery_heading' ); ?></h3>
	<p class="section-tagline"><?php the_field( 'gallery_tagline' ); ?></p>
	<nav class="navigation" id="navbar"></nav>
	<ul id="gallery">
		<?php

		if( have_rows('projects') ):

			while ( have_rows('projects') ) : the_row();
		
				$image = get_sub_field( 'gallery_image' );
				?>
				
				<li data-tags="<?php the_sub_field( 'gallery_filter' ); ?>">
					<a href="<?php echo $image["url"]; ?>" data-featherlight="image"><img class="gallery-img" src="<?php echo $image["sizes"]["gallery"]; ?>"/></a>
				</li>

			<?php endwhile;

		else :

		endif;

		?>
	</ul>
</section>