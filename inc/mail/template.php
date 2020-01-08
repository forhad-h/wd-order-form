<?php

if(!function_exists('template')) {
  function emailTemplate() {

    // load all variables which fetch post data
    require_once dirname(__FILE__)."/data.php";

    // include all parts of template
    include_once dirname(__FILE__)."/styles.php";

    $startEndDateRow = '';
    $delivery_address = $is_same_address == 'yes' ?  'Same as Above' : $delivery_address;

    for($i = 0; $i < count($startDate); $i++) {
      $startEndDateRow .= <<<START_END
        <tr>
            <td class="col1">Statement {$i} Starting Date: </td>
            <td class="col2"><strong class="blue_dark">{$startDate[$i]}</strong></td>
        </tr>\r\n
        <tr>
            <td class="col1">Statement {$i} Closing Date: </td>
            <td class="col2"><strong class="blue_dark">{$endDate[$i]}</strong></td>
        </tr>\r\n
START_END;
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
                                    <td class="col2"><strong class="blue_dark">{$title} {$name}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$address}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Delivery Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$delivery_address}</strong></td>
                                </tr>\r\n

                                <tr>
                                    <td class="col1"><h5>Bank Information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Branch Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$BAddress}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Bank Account Number: </td>
                                    <td class="col2"><strong class="blue_dark">{$AccountNumber}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Bank Account Sort Code: </td>
                                    <td class="col2"><strong class="blue_dark">{$AccountSortCode} {$AccountSortCode2} {$AccountSortCode3}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">IBAN: </td>
                                    <td class="col2"><strong class="blue_dark">{$IBAN} {$IBAN2} {$IBAN3} {$IBAN4} {$IBAN5} {$IBAN6}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">BIC/SWIFT: </td>
                                    <td class="col2"><strong class="blue_dark">{$BIC_SWIFT}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Starting Statement Number/Page Number: </td>
                                    <td class="col2"><strong class="blue_dark">{$StatementNumber}</strong></td>
                                </tr>\r\n
                                {$startEndDateRow}


                                <tr>
                                    <td class="col1">Overdraft Limit: </td>
                                    <td class="col2"><strong class="blue_dark">{$Overdraft}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Starting Balance: </td>
                                    <td class="col2"><strong class="blue_dark">{$StartingBalance}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">End Balance: </td>
                                    <td class="col2"><strong class="blue_dark">{$EndBalance}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Random Transactions: </td>
                                    <td class="col2"><strong class="blue_dark">{$RandomTransactions}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Own Transactions: </td>
                                    <td class="col2"><strong class="blue_dark">{$OwnTransactions}</strong></td>
                                </tr>\r\n

                                <tr>
                                    <td class="col1"><h5>Other</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Hear Us: </td>
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
