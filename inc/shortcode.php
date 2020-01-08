<?php
defined('ABSPATH') or die("Prevent direct access!");

if(!function_exists('wd_order_form_shortcode')) :

  // shortcode function
  function wd_order_form_shortcode() {

    // add bootstrap css
    wp_enqueue_style('wd-order-form-bootstrap-css');
    // add fontawesome css
    wp_enqueue_style('wd-order-form-fontawesome-css');
    // add style css
    wp_enqueue_style('wd-order-form-style-css');
    // add Pickadate classic css
    wp_enqueue_style('wd-order-form-pickadate-classic-css');
    // add Pickadate classic date css
    wp_enqueue_style('wd-order-form-pickadate-classic-date-css');
    // add custom css
    wp_enqueue_style('wd-order-form-custom-css');
    // add responsive css
    wp_enqueue_style('wd-order-form-responsive-css');
    // add jquery from wordpress resource
    wp_enqueue_script('jquery');
    // add popper js
    wp_enqueue_script('wd-order-form-popper-js');
    // add bootstrap js
    wp_enqueue_script('wd-order-form-bootstrap-js');
    // add Pickadate  default js
    wp_enqueue_script('wd-order-form-picker-js');
    // add Pickadate date js
    wp_enqueue_script('wd-order-form-picker-date-js');
    // main js
    wp_enqueue_script('wd-order-form-main-js');


    /*
     * if ajax will be used in front-end
     * then 'ajaxurl' variable need to initialized and send to frontend
     * with wp_localize_script
     */

    wp_localize_script('wd-order-form-main-js', 'wdForm', array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'contactUsPageUrl' => get_theme_mod('wd_contact_us_page_url_field'),
    ));


    // output buffering start
    ob_start();

    // include markup of form
    require_once WDF_PLUGIN_PATH."UI/form.php";

    // return output buffering
    return ob_get_clean();
  }
endif;

// add shortcode
add_shortcode('wd_order_form', 'wd_order_form_shortcode');
