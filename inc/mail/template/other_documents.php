<?php

if(!function_exists('template')) {
  function emailTemplate() {

    // load all variables which fetch post data
    require_once dirname(__FILE__)."/../data/".basename(__FILE__);

    // include all parts of template
    include_once dirname(__FILE__)."/styles.php";

    $selectedProductsRow = '';
    $document_info = '';

    for($i = 0; $i < count($selected_product); $i++) {
      $selected_value = explode(',', $selected_product[$i]);

      $selectedProductsRow .= <<<SELECTED
        <tr>
            <td class="col1">Product Name and Amount: </td>
            <td class="col2"><strong class="blue_dark">{$selected_value[1]} - {$selected_value[0]}</strong></td>
        </tr>\r\n
SELECTED;
    }

    for($j = 0; $j < count($wd_cond_title_field); $j++) {
      $document_info .= <<<BILL_INFO
      <tr>
          <td class="col1">Other Document Name: </td>
          <td class="col2"><strong class="blue_dark">{$title2[$j]} {$name2[$j]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Other Document title: </td>
          <td class="col2"><strong class="blue_dark">{$wd_cond_title_field[$j]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Address as it appears on Document: </td>
          <td class="col2"><strong class="blue_dark">{$address2[$j]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Tax Year Ending: </td>
          <td class="col2"><strong class="blue_dark">{$taxyear[$j]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Which figures are you providing below: </td>
          <td class="col2"><strong class="blue_dark">{$figures[$j]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Gross or Net Pay: </td>
          <td class="col2"><strong class="blue_dark">{$netpay[$j]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Employer Name: </td>
          <td class="col2"><strong class="blue_dark">{$employername[$j]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">NI Number: </td>
          <td class="col2"><strong class="blue_dark">{$ninumber[$j]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Date: </td>
          <td class="col2"><strong class="blue_dark">{$tax_code_date[$j]}</strong></td>
      </tr>\r\n
BILL_INFO;
    }


    $emailTemplate = <<<TEMPLATE
        <html>
            <head>
              {$styles}
            </head>
            <body>

                <div class="template_header">
                    <h2 style='text-align: center;'>Order details</h2>\r\n
                </div>\r\n

                <div class="template_body">
                    <div class="single_info">
                        <h4 style="margin-bottom: 30px;">Contact Details</h4>\r\n
                        <table class="main_table">
                            <thead>
                                <tr>
                                    <th class="col1"><strong style="text-decoration: underline">Name</strong></th>
                                    <th class="col2"><strong style="text-decoration: underline">Value</strong></th>
                                </tr>\r\n
                                <tr><th><br/></th><th></th></tr>\r\n
                            </thead>
                            <tbody>

                                <tr>
                                    <td class="col1"><h5>Product Information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Item Amount: </td>
                                    <td class="col2"><strong class="blue_dark">{$item_amount}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Item Name: </td>
                                    <td class="col2"><strong class="blue_dark">{$item_name}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Item Price: </td>
                                    <td class="col2"><strong class="blue_dark">{$item_price}</strong></td>
                                </tr>\r\n
                                {$selectedProductsRow}

                                <tr>
                                    <td class="col1"><h5>Personal Information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Email Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$email}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Delivery Name and Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$del_name_address}</strong></td>
                                </tr>\r\n

                                <tr>
                                    <td class="col1"><h5>Other Document information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                {$document_info}


                                <tr>
                                    <td class="col1"><h5>Other</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Would like to receive emails with future discounts from us: </td>
                                    <td class="col2"><strong class="blue_dark">{$hearus}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Extra information: </td>
                                    <td class="col2"><strong class="blue_dark">{$extrainfo}</strong></td>
                                </tr>\r\n

                            </tbody>
                        </table>
                    </div>\r\n
                </div>
            </body>
        </html>

TEMPLATE;

    return $emailTemplate;
  }
}
