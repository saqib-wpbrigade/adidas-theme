<?php
/**
 * The header for our theme.
 *
 * @package Botega_Scratch_Theme
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

<link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Oswald:wght@400;500;600&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="notification-bar">
      <div class="container">
        <div class="notification-text">
          <?php
          // Get the header text setting
          $header_text = get_option('header_text');

          // Check if the header text is not empty before displaying it
          if (!empty($header_text)) {
              echo '<p class="header-text">' . $header_text . '</p>';
          }
          ?>
        </div>
      </div>
    </div>
    <div class="top-nav">
      <div class="container">
        <div class="logo">
          <!-- get logo from customizer -->
          <?php
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }else{
              echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
          ?>
        </div>
        <div class="header-button">
        <?php wp_nav_menu( array( 'theme_location' => 'secondary_menu', 'menu_class' => 'header-buttons-menu') ); ?>
        </div>
      </div>
    </div>
    <div class="main-menu">
      <div class="container">
        <?php wp_nav_menu( array( 'theme_location' => 'primary_menu', 'menu_class' => 'main-menu-list' , 	'container'  => 'nav', 'container_class'   => 'menu-items',) ); ?>
        <div class="search">
        <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </header>

  <main class="content">