<?php
/**
 * Plugin Name: HSoft Review
 * Plugin URI: https://hsoft.cloud/products/hsoft-review
 * Description: Get better feedback. Increase your conversion rate using HSoft Review plugin.
 * Version: 1.0.0.
 * Author: HSoft
 * Author URI: https://hsoft.cloud
 * Text Domain: hsoft-review
 * Domain Path: /languages/
 * Requires at least: 1.0.0
 * Requires PHP: 7.4
 *
 * @package HSoft
 */

// Prevent directly access.
defined( 'ABSPATH' ) || exit;

if ( ! defined( 'HSOFT_PLUGIN_FILE' ) ) {
	define( 'HSOFT_PLUGIN_FILE', __FILE__ );
}

require __DIR__ . '/vendor/autoload.php';

HSOFT\HSoftReview::instance()->init();