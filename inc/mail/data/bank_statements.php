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
  $title = $_POST['title'];
  $name = $_POST['name'];
  $address = $_POST['address'];

  $is_same_address = $_POST['is_same_address']; // yes or no

  // if $sameAdd is no
  $delivery_address = $_POST['delivery_address'];

  // Bank information
  $BAddress = $_POST['BAddress'];
  $AccountNumber = $_POST['AccountNumber'];

  $AccountSortCode = $_POST['AccountSortCode'];
  $AccountSortCode2 = $_POST['AccountSortCode2'];
  $AccountSortCode3 = $_POST['AccountSortCode3'];

  $IBAN = $_POST['IBAN'];
  $IBAN2 = $_POST['IBAN2'];
  $IBAN3 = $_POST['IBAN3'];
  $IBAN4 = $_POST['IBAN4'];
  $IBAN5 = $_POST['IBAN5'];
  $IBAN6 = $_POST['IBAN6'];

  $BIC_SWIFT = $_POST['BIC_SWIFT'];
  $StatementNumber = $_POST['StatementNumber'];

  $startDate = $_POST['startDate'];
  $endDate = $_POST['endDate'];

  $Overdraft = $_POST['Overdraft'];
  $StartingBalance = $_POST['StartingBalance'];
  $EndBalance = $_POST['EndBalance'];
  $RandomTransactions = isset($_POST['RandomTransactions']) ? $_POST['RandomTransactions'] : '';
  $OwnTransactions = isset($_POST['OwnTransactions']) ? $_POST['OwnTransactions'] : '';

  // Others
  $hearus = $_POST['hearus'];
  $extrainfo = $_POST['extrainfo'];
  $terms_and_conditions = isset($_POST['terms_and_conditions']) ? $_POST['terms_and_conditions'] : '';
