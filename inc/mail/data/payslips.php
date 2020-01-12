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
  $name_title = $_POST['name_title'];
  $name = $_POST['name'];
  $company = $_POST['company'];
  $ni_no = $_POST['ni_no'];
  $paymentperiod = $_POST['paymentperiod'];
  $payslip_address = $_POST['payslip_address'];
  $figures = $_POST['figures'];



  // Payslip information
  $wd_cond_title_field = $_POST['wd_cond_title_field'];
  $payslip_date = $_POST['payslip_date'];
  $gross_pay = $_POST['gross_pay'];


  // Others
  $hearus = $_POST['hearus'];
  $extrainfo = $_POST['extrainfo'];
  $terms_and_conditions = isset($_POST['terms_and_conditions']) ? $_POST['terms_and_conditions'] : '';
