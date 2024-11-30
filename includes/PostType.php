<?php
/**
 * This file is used for create all required PostType for this plugin.
 * 
 * @since 1.0.0.
 */
namespace HSOFT;

// prevent directly access.
defined('ABSPATH') || exit;

class PostType {
    public static $_instance = null;

    /**
     * Main instance of this class.
     */
    public static function instance() {
        if( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Initialize all main functions.
     */
    public function init() {
        add_action( 'admin_menu', array( $this, 'register_post_type' ) );
    }

    /**
     * Register post type for this plugin.
     * 
     * @since 1.0.0.
     * @function register_post_type
     */
    public function register_post_type() {
        add_menu_page( __( 'HSoft', 'hsoft-review' ), __( 'HSoft', 'hsoft-review' ), 'manage_options', 'hsoft', array( $this, 'render' ), 'dashicons-admin-comments');
    }

    /**
     * Render main page.
     * 
     * @since 1.0.0.
     */
    public function render() {
        echo '<div id="hsoft-root">'.__( 'Loading', 'rainbow-store' ).'</div>';
    }
}