<?php

// POST THUMBNAILS
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'post-thumb', 1600, 900, true );
  set_post_thumbnail_size( 1600, 900, true );

  // HIDE ADMIN BAR
  add_filter('show_admin_bar', '__return_false');

/**
 * inArchives functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package inArchives
 * @since 0.1.0
 */
 
 // Useful global constants
define( 'WPTHEME_VERSION', '0.1.0' );
 
 /**
  * Set up theme defaults and register supported WordPress features.
  *
  * @uses load_theme_textdomain() For translation/localization support.
  *
  * @since 0.1.0
  */
 function wptheme_setup() {
	/**
	 * Makes inArchives available for translation.
	 *
	 * Translations can be added to the /lang directory.
	 * If you're building a theme based on inArchives, use a find and replace
	 * to change 'wptheme' to the name of your theme in all template files.
	 */
	load_theme_textdomain( 'wptheme', get_template_directory() . '/languages' );

 }
 
 /**
  * Enqueue scripts and styles for front-end.
  *
  * @since 0.1.0
  */
 function wptheme_scripts_styles() {
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';
		
	wp_enqueue_style( 'wptheme', get_template_directory_uri() . "/assets/css/twpol{$postfix}.css", array(), WPTHEME_VERSION );
 }
 add_action( 'wp_enqueue_scripts', 'wptheme_scripts_styles' );
 
 /**
  * Add humans.txt to the <head> element.
  */
 function wptheme_header_meta() {
	$humans = '<link type="text/plain" rel="author" href="' . get_template_directory_uri() . '/humans.txt" />';
	
	echo apply_filters( 'wptheme_humans', $humans );
 }
 add_action( 'wp_head', 'wptheme_header_meta' );