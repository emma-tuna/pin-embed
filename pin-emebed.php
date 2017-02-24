<?php

/**
 * @link              http://tunatraffic.com
 * @since             1.1.0
 * @package           Pin_Embed
 *
 * @wordpress-plugin
 * Plugin Name:       Pin Embed
 * Plugin URI:        http://example.com/pin-embed-uri/
 * Description:       Embed pins on your site with a shortcode
 * Version:           1.0.0
 * Author:            Tuna Traffic
 * Author URI:        http://tunatraffic.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pin-embed
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Define url and path constants
 */
define( 'PINEMBED__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PINEMBED__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


/**
 * Register scripts and styles to be enqueued later
 */
function pe_register_scripts(){
	wp_register_script( 'pin-embed-js', '//assets.pinterest.com/js/pinit.js' );
    wp_register_style( 'pin-embed-styles', PINEMBED__PLUGIN_URL . '/styles/styles.css');
}
add_action( 'wp_enqueue_scripts', 'pe_register_scripts' );


/**
 * Require shortcode file
 */
require_once( PINEMBED__PLUGIN_DIR . 'pe-shortcode.php' );
require_once( PINEMBED__PLUGIN_DIR . 'pe-wysiwyg-button.php' );
