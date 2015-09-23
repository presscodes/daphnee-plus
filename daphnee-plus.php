<?php
/**
 * Plugin Name:   Daphnee Plus
 * Plugin URI:    http://press.codes
 * Description:   Premium plugin, adding extra features to the Daphnee theme
 * Author:        the PressCodes team
 * Author URI:    http://press.codes
 * Version:       0.1
 * Text Domain:   daphnee-plus
 */

if ( ! defined( 'DAPHNEE_PLUS_PATH' ) ) {
    define( 'DAPHNEE_PLUS_PATH', plugin_dir_path( __FILE__ ) );
}

if ( ! class_exists( 'Daphnee_Plus' ) ) {
    require DAPHNEE_PLUS_PATH . 'includes/class-daphnee-plus.php';
}

$daphnee_plus = new Daphnee_Plus();
