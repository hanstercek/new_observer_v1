<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<!-- favicon & links -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileColor" content="#61c0e1">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/mstile-144x144.png">
	<meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/browserconfig.xml">
	<!-- end favicon & links -->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

			<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>

		</header><!-- #masthead -->

		<?php

		/*
		 * If a regular post or page, and not the front page, show the featured image.
		 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
		 */
		if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
			echo '<div class="single-featured-image-header">';
			echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
			echo '</div><!-- .single-featured-image-header -->';
		endif;
		?>

		<div class="site-content-contain">
			<div id="content" class="site-content">
