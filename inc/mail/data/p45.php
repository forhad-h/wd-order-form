<?php
  // First step
  $item = explode(',', $_POST['item']);
  $item_amount = $item[0];
  $item_name = $item[1];
  $item_price = $item[2];


  // Third step
  $product_name = $_POST['selected_product'];

  /*
    Last step
  */

  // Personal Information
  $email = $_POST['email'];
  $delAddress = $_POST['delAddress'];



  // p45 information
  $old_employer_reference = $_POST['old_employer_reference'];
  $old_ni_number = $_POST['old_ni_number'];
  $old_leavingdate = $_POST['old_leavingdate'];
  $old_taxcodeleavingdate = $_POST['old_taxcodeleavingdate'];
  $old_todaypay = $_POST['old_todaypay'];
  $old_works_payrool = $_POST['old_works_payrool'];
  $old_datebirth = $_POST['old_datebirth'];
  $old_fullname = $_POST['old_fullname'];
  $old_address = $_POST['old_address'];
  $old_dateofp45 = $_POST['old_dateofp45'];
  $old_title = $_POST['old_title'];
  $old_name = $_POST['old_name'];
  $old_fulladdress = $_POST['old_fulladdress'];


  // Others
  $hearus = $_POST['hearus'];
  $extrainfo = $_POST['extrainfo'];
  $terms_and_conditions = isset($_POST['terms_and_conditions']) ? $_POST['terms_and_conditions'] : '';
