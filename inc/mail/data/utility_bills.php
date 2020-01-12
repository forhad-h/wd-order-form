<?php
  // First step
  $item = explode(',', $_POST['item']);
  $item_amount = $item[0];
  $item_name = $item[1];
  $item_price = $item[2];


  // Second step
  $item_type = $_POST['item_type'];

  // Third step
  $selected_product = $_POST['selected_product'];

  /*
    Last step
  */

  // Personal Information
  $email = $_POST['email'];
  $del_name_address = $_POST['del_name_address'];


  // Bill information
  $wd_cond_title_field = $_POST['wd_cond_title_field'];
  $utility_bill_date = $_POST['utility_bill_date'];
  $utility_bill_name_title = $_POST['utility_bill_name_title'];
  $utility_bill_name = $_POST['utility_bill_name'];
  $bill_del_address = $_POST['bill_del_address'];
  $number_reference = $_POST['number_reference'];


  // Others
  $hearus = $_POST['hearus'];
  $extrainfo = $_POST['extrainfo'];
  $terms_and_conditions = isset($_POST['terms_and_conditions']) ? $_POST['terms_and_conditions'] : '';
