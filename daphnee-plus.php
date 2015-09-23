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

function daphnee_plus_init() {
    /**
     * Add the main plugin class
     */
    if ( ! class_exists( 'Daphnee_Plus' ) ) {
        require DAPHNEE_PLUS_PATH . 'includes/class-daphnee-plus.php';
    }
    /**
     * Add the helper class.
     */
    if ( ! class_exists( 'Daphnee_Plus_Helper' ) ) {
        require DAPHNEE_PLUS_PATH . 'includes/class-daphnee-plus-helper.php';
    }
    /**
     * Add customizer mods
     */
    require DAPHNEE_PLUS_PATH . 'includes/customizer.php';

    $daphnee_plus = new Daphnee_Plus();
}
add_action( 'after_setup_theme', 'daphnee_plus_init' );
