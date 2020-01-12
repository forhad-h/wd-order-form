<?php

if(!function_exists('template')) {
  function emailTemplate() {

    // load all variables which fetch post data
    require_once dirname(__FILE__)."/../data/".basename(__FILE__);

    // include all parts of template
    include_once dirname(__FILE__)."/styles.php";

    $payslip_info = '';


    for($i = 0; $i < count($wd_cond_title_field); $i++) {
      $payslip_info .= <<<PAYSLIP_INFO
      <tr>
          <td class="col1">Payslip title: </td>
          <td class="col2"><strong class="blue_dark">{$wd_cond_title_field[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Payslip Date: </td>
          <td class="col2"><strong class="blue_dark">{$payslip_date[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Gross or Net pay: </td>
          <td class="col2"><strong class="blue_dark">{$gross_pay[$i]}</strong></td>
      </tr>\r\n
PAYSLIP_INFO;
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
                                <tr>
                                    <td class="col1">Item Type: </td>
                                    <td class="col2"><strong class="blue_dark">{$item_type}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Product Image: </td>
                                    <td class="col2"><strong class="blue_dark">
                                    <img src="{$product_image_url}" alt="Product Image Preview"/></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Product Name: </td>
                                    <td class="col2"><strong class="blue_dark">{$product_name} - {$product_type}</strong></td>
                                </tr>\r\n


                                <tr>
                                    <td class="col1"><h5>Personal Information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Email Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$email}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Name: </td>
                                    <td class="col2"><strong class="blue_dark">{$name_title} {$name}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Company on Payslip: </td>
                                    <td class="col2"><strong class="blue_dark">{$company}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">NI Number: </td>
                                    <td class="col2"><strong class="blue_dark">{$ni_no}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Payment Period: </td>
                                    <td class="col2"><strong class="blue_dark">{$paymentperiod}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Delivery Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$payslip_address}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Which figures are you providing: </td>
                                    <td class="col2"><strong class="blue_dark">{$figures}</strong></td>
                                </tr>\r\n

                                <tr>
                                    <td class="col1"><h5>Payslip information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                {$payslip_info}


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
