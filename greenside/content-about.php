<?php

// No direct access, please
if ( ! defined( 'ABSPATH' ) ) exit;

?>

<section id="about">
	<div class="left">  		
		<h3 class="section-title border"><?php the_field( 'what_we_do_title' ); ?></h3>
		<p><?php the_field( 'what_we_do_main_content' ); ?></p>
		<div class="btn-wrapper">
			<a class="button" href="<?php the_field( 'what_we_do_url' ); ?>"><?php the_field( 'what_we_do_btn' ); ?></a>
		</div>
	</div>
	<img src="<?php the_field( 'what_we_do_img' ); ?>" />
	<div class="right">
		<h4 class="section-subtitle border"><?php the_field( 'what_we_do_subtitle_one' ); ?></h4>
		<p><?php the_field( 'what_we_do_one_content' ); ?></p>
		<h4 class="section-subtitle border"><?php the_field( 'what_we_do_subtitle_two' ); ?></h4>
		<p><?php the_field( 'what_we_do_two_content' ); ?></p>
	</div>
</section>