<?php
defined('ABSPATH') or die("Prevent direct access!");

if(!function_exists('wd_order_form_register_scripts')) :

  // Register scripts stylesheets and scripts
  function wd_order_form_register_scripts() {

    // Bootstrap css
    wp_register_style(
      'wd-order-form-bootstrap-css',
      WDF_PLUGIN_URL.'assets/css/css-bootstrap_4.css',
      [],
      '4.0.0'
    );
    // Bootstrap css
    wp_register_style(
      'wd-order-form-fontawesome-css',
      WDF_PLUGIN_URL.'assets/css/font-awesome.min.css',
      [],
      '4.0.0'
    );

   // Style css
   wp_register_style(
     'wd-order-form-style-css',
     WDF_PLUGIN_URL.'assets/css/style.css'
   );

    // Pickadate classic css
    wp_register_style(
      'wd-order-form-pickadate-classic-css',
      WDF_PLUGIN_URL.'assets/css/pickadate-classic.css'
    );
    // Pickadate classic date css
    wp_register_style(
      'wd-order-form-pickadate-classic-date-css',
      WDF_PLUGIN_URL.'assets/css/pickadate-classic.date.css'
    );


    // Custom css
    wp_register_style(
      'wd-order-form-custom-css',
      WDF_PLUGIN_URL.'assets/css/custom.css'
    );

    // Responsive css
    wp_register_style(
      'wd-order-form-responsive-css',
      WDF_PLUGIN_URL.'assets/css/responsive.css'
    );



    // Popper js
    wp_register_script(
      'wd-order-form-popper-js',
      WDF_PLUGIN_URL.'assets/js/popper.min.js',
      ['jquery'],
      '1.12.9',
      true
    );

   // Bootstrap js
   wp_register_script(
     'wd-order-form-bootstrap-js',
     WDF_PLUGIN_URL.'assets/js/bootstrap.min.js',
     ['jquery'],
     '4.0.0',
     true
   );

    // Pickadate  default js
    wp_register_script(
      'wd-order-form-picker-js',
      WDF_PLUGIN_URL.'assets/js/picker.js',
      ['jquery'],
      '4.0.0',
      true
    );
    // Pickadate date js
    wp_register_script(
      'wd-order-form-picker-date-js',
      WDF_PLUGIN_URL.'assets/js/picker.date.js',
      ['jquery'],
      '4.0.0',
      true
    );

   // Main js
   wp_register_script(
     'wd-order-form-main-js',
     WDF_PLUGIN_URL.'assets/js/main.js',
     ['jquery'],
     '',
     true
   );


  }

  add_action('wp_enqueue_scripts', 'wd_order_form_register_scripts');
endif;
