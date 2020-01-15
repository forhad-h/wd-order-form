<?php
  // First step
  $item = explode(',', $_POST['item']);
  $item_amount = $item[0];
  $item_name = $item[1];
  $item_price = $item[2];


  // Second step
  $item_type = $_POST['item_type'];

  // Third step
  $product_name = $_POST['product_name'];
  $product_image_url = $_POST['product_image_url'];
  $product_type = $_POST['product_type'];

  /*
    Last step
  */

  // Personal Information
  $email = $_POST['email'];
  $del_name_address = $_POST['del_name_address'];



  // p60 information
  $wd_cond_title_field = $_POST['wd_cond_title_field'];
  $p60y = $_POST['p60y'];
  $works_payroll = $_POST['works_payroll'];
  $ni_no = $_POST['ni_no'];
  $prev_pay = $_POST['prev_pay'];
  $figures = $_POST['figures'];
  $gross_pay = $_POST['gross_pay'];
  $taxcode = $_POST['taxcode'];
  $name_title = $_POST['title'];
  $name_p60 = $_POST['name_p60'];
  $address_p60 = $_POST['address_p60'];
  $emp_name_add = $_POST['emp_name_add'];


  // Others
  $hearus = $_POST['hearus'];
  $extrainfo = $_POST['extrainfo'];
  $terms_and_conditions = isset($_POST['terms_and_conditions']) ? $_POST['terms_and_conditions'] : '';
