<?php
  // First step
  $item = explode(',', $_POST['item']);
  $item_amount = $item[0];
  $item_name = $item[1];
  $item_price = $item[2];



  // Second step
  $item2 = explode(',', $_POST['item2']);
  $item2_amount = $item2[0];
  $item2_name = $item2[1];
  $item2_price = $item2[2];

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
  $UTR = $_POST['UTR'];
  $delivery_address = $_POST['delivery_address'];




  // SA302 information
  $wd_cond_title_field = $_POST['wd_cond_title_field'];
  $sa302year = $_POST['sa302year'];
  $incomeFrom = $_POST['incomeFrom'];
  $figures = $_POST['figures'];
  $grossIncome = $_POST['grossIncome'];
  $rentalIncome = $_POST['rentalIncome'];
  $selfEmploymentIncome = $_POST['selfEmploymentIncome'];
  $otherInvestmentIncome = $_POST['otherInvestmentIncome'];
  $dividendIncome = $_POST['dividendIncome'];
  $interestIncome = $_POST['interestIncome'];
  $pensionContributions = $_POST['pensionContributions'];
  $printingDate = $_POST['printingDate'];


  // Others
  $hearus = $_POST['hearus'];
  $extrainfo = $_POST['extrainfo'];
  $terms_and_conditions = isset($_POST['terms_and_conditions']) ? $_POST['terms_and_conditions'] : '';
