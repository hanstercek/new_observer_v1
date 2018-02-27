<?php
/*
 * Displays all of the <head> section and everything up until <div id="content">
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title( '| Tufts Observer', true, 'right' ); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- observer favicon & links -->
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-57x57.png"   sizes="57x57">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-114x114.png" sizes="114x114">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-72x72.png"   sizes="72x72">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-144x144.png" sizes="144x144">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-60x60.png"   sizes="60x60">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-120x120.png" sizes="120x120">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-76x76.png"   sizes="76x76">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-152x152.png" sizes="152x152">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/apple-touch-icon-180x180.png" sizes="180x180">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-160x160.png" sizes="160x160">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-96x96.png"   sizes="96x96">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-16x16.png"   sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/favicon-32x32.png"   sizes="32x32">
  <meta name="msapplication-TileColor" content="#61c0e1">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/mstile-144x144.png">
  <meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri() ?>/assets/icons/browserconfig.xml">

  <!-- Observer fonts -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700'>
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700'>
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i'>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,,400,400i,700" rel="stylesheet">


  <link rel="stylesheet" type='text/css' href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'new' ); ?></a>

    <div class="site-content-contain">

      <!-- site content starts -->
      <div id="content" class="site-content">

        <!-- entire page wrapper  -->
        <div class="wrapper">

          <!-- header section, has logo & stuff -->
      		<header class="head-main" role="banner">

            <div class="head-main__content">

              <!-- logo, links to homepage -->
        			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="head-main__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-anton.png" alt="<?php bloginfo('name'); ?>">
              </a>
              <!-- <hr> -->

              <script>
              function fnc(){
                var icon = document.getElementById("hamburger-icon");
                if (icon.classList.contains("fa-bars")) {
                  icon.classList.add('fa-times');
                  icon.classList.remove('fa-bars');
                  document.getElementById("menu-bg").style.display="block";
                  document.getElementsByClassName('menu')[0].classList.add('mobile-visible');
                  document.getElementsByClassName('menu')[1].classList.add('mobile-visible');

                } else {
                  icon.classList.remove('fa-times');
                  icon.classList.add('fa-bars');
                  document.getElementById("menu-bg").style.display="none";
                  document.getElementsByClassName('menu')[0].classList.remove('mobile-visible');
                  document.getElementsByClassName('menu')[1].classList.remove('mobile-visible');
                }
              }
              </script>

              <div id="hamburger" onclick="fnc();">
                <i class="fa fa-bars" id="hamburger-icon" aria-hidden="true"></i>
              </div>

              <div id="menu-bg">
              </div>



              <!-- navigation menu -->
              <?php wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container' => 'nav',
                  'container_class' => 'menu menu--primary',
                  'menu_class' => 'nav-menu-primary',
              ) ); ?>

              <?php wp_nav_menu( array(
                  'theme_location' => 'admin',
                  'container' => 'nav',
                  'container_class' => 'menu menu--primary',
                  'menu_class' => 'nav-menu-primary',
              ) ); ?>

            </div>



      		</header>

          <!-- entire page wrapper  -->
          <div class="content-wrapper">
