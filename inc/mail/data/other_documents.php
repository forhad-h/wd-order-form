<?php
  // First step
  $item = explode(',', $_POST['item']);
  $item_amount = $item[0];
  $item_name = $item[1];
  $item_price = $item[2];

  // Third step
  $selected_product = $_POST['selected_product'];

  /*
    Last step
  */

  // Personal Information
  $email = $_POST['email'];
  $del_name_address = $_POST['del_name_address'];


  // Other documents information
  $wd_cond_title_field = $_POST['wd_cond_title_field'];
  $title2 = $_POST['title2'];
  $name2 = $_POST['name2'];
  $address2 = $_POST['address2'];
  $taxyear = $_POST['taxyear'];
  $figures = $_POST['figures'];
  $netpay = $_POST['netpay'];
  $employername = $_POST['employername'];
  $ninumber = $_POST['ninumber'];
  $tax_code_date = $_POST['tax_code_date'];


  // Others
  $hearus = $_POST['hearus'];
  $extrainfo = $_POST['extrainfo'];
  $terms_and_conditions = isset($_POST['terms_and_conditions']) ? $_POST['terms_and_conditions'] : '';
