<?php
/**
 * This file will help to create all required Assets.
 * 
 * @since 1.0.0.
 */
namespace HSOFT;
// prevent directly access.
defined( 'ABSPATH' ) || exit;

class Assets {

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
     * Main initial file of plugin.
     * 
     * @since 1.0.0.
     * @return void
     */
    public function init() {
        // register scripts.
        add_action( 'admin_enqueue_scripts', array( $this, 'register_scripts' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );
        
        // enqueue scripts.
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
        
        // Register and enqueue styles.
        add_action( 'admin_enqueue_scripts', array( $this, 'register_styles' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_styles' ) );
    }

    /**
     * Store admin related js files.
     * 
     * @since 1.0.0.
     * @function get_admin_scripts()
     * @return array
     */
    public function get_admin_scripts() {
        return array(
            'hsoft-admin' => array(
                'url' => plugin_dir_url( __FILE__ ). 'admin-panel/dist/index.js',
                'dependency' => array('wp-components', 'wp-element', 'wp-i18n', 'wp-hooks'),
                'version' => '1.0.0',
                'in_footer' => true
            )
        );
    }
    /**
     * Store admin related css files.
     * 
     * @since 1.0.0.
     * @function get_admin_styles()
     * @return array
     */
    public function get_admin_styles() {
        return array(
            'hsoft-admin' => array(
                'url' => plugin_dir_url( __FILE__ ). 'admin-panel/dist/style.css',
                'dependency' => null,
                'version' => '1.0.0'
            )
        );
    }

    /**
     * Register styles.
     * 
     * @since 1.0.0.
     * @return array
     */
    public function register_styles() {
        $admin_styles = $this->get_admin_styles();

        foreach( $admin_styles as $handle => $style ) {
            wp_register_style( $handle , $style['url'], $style['dependency'], $style['version'] );
        }
    }

    /**
     * Register admin and frontend scripts.
     * 
     * @since 1.0.0.
     * @return void
     */
    public function register_scripts() {
        $admin_scripts = $this->get_admin_scripts();

        foreach( $admin_scripts as $handle => $script ) {
            wp_register_script( $handle, $script['url'], $script['dependency'], $script['version'], $script['in_footer'] );
        }
    }

    /**
     * Admin enqueue.
     * 
     * @since 1.0.0.
     * @return void
     */
    public function admin_enqueue_scripts() {
        wp_enqueue_script( 'hsoft-admin' );
    }

    /**
     * Admin styles.
     * 
     * @since 1.0.0.
     * @return void
     */
    public function admin_enqueue_styles() {
        wp_enqueue_style('wp-components');
        wp_enqueue_style('hsoft-admin');
    }
}