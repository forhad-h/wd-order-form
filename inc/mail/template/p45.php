<?php

if(!function_exists('template')) {
  function emailTemplate() {

    // load all variables which fetch post data
    require_once dirname(__FILE__)."/../data/".basename(__FILE__);

    // include all parts of template
    include_once dirname(__FILE__)."/styles.php";

    $p45_product_names = '';

    for($i = 0; $i < count($product_name); $i++) {
      $p45_product_names .= <<<P45_PRODUCT
        <tr>
            <td class="col1">Product Name: </td>
            <td class="col2"><strong class="blue_dark">{$product_name[$i]}</strong></td>
        </tr>\r\n
P45_PRODUCT;
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
                                    <td class="col1"><h5>P45 Parts</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                {$p45_product_names}


                                <tr>
                                    <td class="col1"><h5>Personal Information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Email Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$email}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Delivery Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$delAddress}</strong></td>
                                </tr>\r\n


                                <tr>
                                    <td class="col1"><h5>P60 information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Old Employer Reference Number: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_employer_reference}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">NI Number: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_ni_number}</strong></td>
                                </tr>\r\n

                                <tr>
                                    <td class="col1">Leaving Date: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_leavingdate}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Tax Code at Leaving Date: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_taxcodeleavingdate}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Total Pay in this Employment: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_todaypay}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Works/Payroll Number: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_works_payrool}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Date of Birth: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_datebirth}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Old Employer's Full Name: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_fullname}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Old Employer's Full Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_address}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Date of P45: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_dateofp45}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Name as it appears on P45: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_title} {$old_name}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Address as it appears on P45: </td>
                                    <td class="col2"><strong class="blue_dark">{$old_fulladdress}</strong></td>
                                </tr>\r\n


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
