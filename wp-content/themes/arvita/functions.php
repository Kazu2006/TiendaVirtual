<?php
/**
 * Theme functions and definitions
 *
 * @package Arvita
 */

/**
 * After setup theme hook
 */
function arvita_theme_setup(){
    /*
     * Make child theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    load_child_theme_textdomain( 'arvita' );	
}
add_action( 'after_setup_theme', 'arvita_theme_setup' );

/**
 * Load assets.
 */

function arvita_theme_css() {
	wp_enqueue_style( 'arvita-parent-theme-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('arvita-child-theme-style', get_stylesheet_directory_uri() . '/style.css');	
}
add_action( 'wp_enqueue_scripts', 'arvita_theme_css', 99);

require get_stylesheet_directory() . '/theme-functions/controls/class-customize.php';

/**
 * Import Options From Parent Theme
 *
 */
function arvita_parent_theme_options() {
	$cosmobit_mods = get_option( 'theme_mods_cosmobit' );
	if ( ! empty( $cosmobit_mods ) ) {
		foreach ( $cosmobit_mods as $cosmobit_mod_k => $cosmobit_mod_v ) {
			set_theme_mod( $cosmobit_mod_k, $cosmobit_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'arvita_parent_theme_options' );