<!doctype html>

<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
   <div class="loader"></div>
   
	<div class="site">

		<header class="masthead" style="background-image: url('<?php the_field( 'header_bg' ); ?>');">
			
			<style>
				.masthead:before {
					background-color: <?php the_field( 'header_overlay' ); ?>;
				}
			</style>
		
			<?php do_action( 'before_logo' ); ?>
			
			<?php 
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			if ( $custom_logo_id ) {
				the_custom_logo();
			} else { ?>
				<a class="logo" href="<?php bloginfo( 'url' ); ?>">
					<h1><?php bloginfo( 'name' ); ?></h1>
				</a>
			<?php } ?>
			
			<?php do_action( 'after_logo' ); ?>
			
			<nav class="navigation desktop">
				<ul class="menu">
					<li class="menu-item"><a href="#about"><?php echo __('About', 'workpower'); ?></a></li>
					<li class="menu-item"><a href="#services"><?php echo __('Services', 'workpower'); ?></a></li>
					<li class="menu-item"><a href="#gallery"><?php echo __('Gallery', 'workpower'); ?></a></li>
					<li class="menu-item"><a href="#testimonials"><?php echo __('Testimonials', 'workpower'); ?></a></li>
					<li class="menu-item"><a href="#contact"><?php echo __('Contact', 'workpower'); ?></a></li>
				</ul>
			</nav>
			<nav class="navigation mobile">
				<ul class="menu">
					<li class="menu-item button"><a href="#about"><i class="fa fa-info" aria-hidden="true"></i><span class="tooltip"><?php echo __('About', 'workpower'); ?></span></a></li>
					<li class="menu-item button"><a href="#services"><i class="fa fa-cogs" aria-hidden="true"></i><span class="tooltip"><?php echo __('Services', 'workpower'); ?></span></a></li>
					<li class="menu-item button"><a href="#gallery"><i class="fa fa-picture-o" aria-hidden="true"></i><span class="tooltip"><?php echo __('Gallery', 'workpower'); ?></span></a></li>
					<li class="menu-item button"><a href="#testimonials"><i class="fa fa-quote-left" aria-hidden="true"></i><span class="tooltip"><?php echo __('Testimonials', 'workpower'); ?></span></a></li>
					<li class="menu-item button"><a href="#contact"><i class="fa fa-envelope" aria-hidden="true"></i><span class="tooltip"><?php echo __('Contact', 'workpower'); ?></span></a></li>
				</ul>
			</nav>
			
			<?php do_action( 'after_menu' ); ?>
			
			<h2 class="tagline"><?php the_field( 'header_title' ); ?></h2>
			<p class="hero-content"><?php the_field( 'header_tagline' ); ?></p>
			<div class="btn-wrapper">
				<a class="button" href="<?php the_field( 'header_url' ); ?>"><?php the_field( 'header_btn' ); ?></a>
			</div>
	   </header>