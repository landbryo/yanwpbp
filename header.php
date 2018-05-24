<!doctype html>

<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name=viewport content="width=device-width, initial-scale=1">

  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  <title><?php bloginfo('name'); ?></title>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$siteLogo = wp_get_attachment_image( $custom_logo_id, 'full', false, array('class' => 'logo'));
?>

<header>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo $siteLogo ?></a>
    <button class="hamburger">&#9776;</button>
    <button class="cross">X</button>    
    <?php wp_nav_menu( array( 'theme_location' => 'the-menu', 'container_class' => 'landbryo-menu' ) ); ?>
</header>

<body <?php body_class(); ?>>
