<?php
/**
 * This class will be used for as base class of this plugin.
 * 
 * @since 1.0.0.
 * @return void
 */
namespace HSOFT;

// Prevent directly access.
defined('ABSPATH') || exit;

/**
 * This class will generate all essential functions for this plugin.
 */
class HSoftReview {
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
     * This method will be used to initialize this plugin.
     * 
     * @since 1.0.0.
     * @return void
     */
    public function init() {
        if( is_admin() ) {
            PostType::instance()->init();
        }
        Assets::instance()->init();
    }
}