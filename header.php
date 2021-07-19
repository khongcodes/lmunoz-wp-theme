<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="site-header">
	<div class="banner-container">
		<?php if ( get_header_image() ) : ?>
			<a href="<?php echo esc_url( home_url("/") ); ?>" rel="home">
				<img 
					src="<?php header_image(); ?>" 
					width="<?php echo absint( get_custom_header()->width ); ?>" 
					height="<?php echo absint( get_custom_header()->height ); ?>" 
					alt="<?php echo esc_attr( get_bloginfo( "name", "display" ) ); ?>" 
				/>
			</a>
		<?php else : ?>
			<h1><?php bloginfo("title") ?></h1>
		<?php endif; ?>
	</div>
	

	<?php get_template_part("template-parts/nav/nav", "frame"); ?>
	
</div>

<div id="site-content">