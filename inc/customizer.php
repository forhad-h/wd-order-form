<?php
/**
* Option to put reciver email in customizer
*/

function wd_form_customizer_settings($wp_customize) {
  // add setting
  $wp_customize->add_setting('wd_reciever_email_field');
  $wp_customize->add_setting('wd_thank_you_page_url_field');
  $wp_customize->add_setting('wd_contact_us_page_url_field');
  $wp_customize->add_setting('wd_category_page_url_field');

  // add section
  $wp_customize->add_section('wd_order_form_section_id', array(
      'title' => __('Order Form', 'wd-order-form'),
      'priority' => 150,
  ));

  // add control
  $wp_customize->add_control( new WP_Customize_Control ( $wp_customize, 'wd_reciever_email_control_id', array(
      'label' => __('Reciver Email Address', 'wd-order-form'),
      'section' => 'wd_order_form_section_id',
      'settings' => 'wd_reciever_email_field',
      'type' => 'text'
  )));
  $wp_customize->add_control( new WP_Customize_Control ( $wp_customize, 'wd_thank_you_page_url_control_id', array(
      'label' => __('Thank you page URL', 'wd-order-form'),
      'section' => 'wd_order_form_section_id',
      'settings' => 'wd_thank_you_page_url_field',
      'type' => 'text'
  )));
  $wp_customize->add_control( new WP_Customize_Control ( $wp_customize, 'wd_contact_us_page_url_control_id', array(
      'label' => __('Contact us page URL', 'wd-order-form'),
      'section' => 'wd_order_form_section_id',
      'settings' => 'wd_contact_us_page_url_field',
      'type' => 'text'
  )));
  $wp_customize->add_control( new WP_Customize_Control ( $wp_customize, 'wd_category_page_url_control_id', array(
      'label' => __('Category page URL', 'wd-order-form'),
      'section' => 'wd_order_form_section_id',
      'settings' => 'wd_category_page_url_field',
      'type' => 'text'
  )));

}
add_action('customize_register', 'wd_form_customizer_settings');
