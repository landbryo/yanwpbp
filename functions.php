<?php
/////////////////////
// CUSTOMIZER LOGO //
/////////////////////
add_theme_support( 'custom-logo' );

///////////////////////////
// CUSTOMIZER BACKGROUND //
///////////////////////////
$bg_defaults = array(
	'default-color'          => '',
	'default-image'          => get_stylesheet_directory_uri() . '/img/background.png',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $bg_defaults );

/////////////////////
// ENQUEUE SCRIPTS //
/////////////////////
add_action('wp_enqueue_scripts', 'custom_scripts');
function custom_scripts() {
    wp_enqueue_style( 'landbryo', get_stylesheet_uri() );
    
    wp_enqueue_script( 'landbryo_script', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.7', true );
}

//////////
// MENU //
//////////
function landbryo_menu() {
  register_nav_menu('the-menu',__( 'The Menu' ));
}
add_action( 'init', 'landbryo_menu' );