<?php
/*
 * Plugin Name: WD Order Form
 * Description: Multistep custom order form. Shortcode: <strong>[wd_order_form]</strong>
 * Author: Md. Forhad Hosain
 * Text Domain: wd-order-form
*/
defined('ABSPATH') or die("Prevent direct access!");

// plugin url
if(!defined('WDF_PLUGIN_PATH'))
  define('WDF_PLUGIN_PATH', plugin_dir_path( __FILE__ ));
if(!defined('WDF_PLUGIN_URL'))
  define('WDF_PLUGIN_URL', plugin_dir_url( __FILE__ ));
// register scripts and stylesheets
require_once WDF_PLUGIN_PATH.'inc/register-scripts.php';

// Customizer
require_once WDF_PLUGIN_PATH.'inc/customizer.php';


/*
 register ajax action
 */

// for admin
add_action('wp_ajax_get_product_list', 'load_product_list');

// for guest
add_action('wp_ajax_nopriv_get_product_list', 'load_product_list');


if(!function_exists('load_product_list')) {

	function load_product_list() {

		/*
 		 * include.php contains php code with 'echo'
		 * or run any php code with 'echo'
		 */
		include WDF_PLUGIN_PATH.'inc/product-list.php';

		wp_die();
	}
}


// include shortcode
require_once WDF_PLUGIN_PATH.'inc/shortcode.php';
