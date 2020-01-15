<?php

if(!function_exists('template')) {
  function emailTemplate() {

    // load all variables which fetch post data
    require_once dirname(__FILE__)."/../data/".basename(__FILE__);

    // include all parts of template
    include_once dirname(__FILE__)."/styles.php";

    $sa302_info = '';


    for($i = 0; $i < count($wd_cond_title_field); $i++) {
      $sa302_info .= <<<SA302_INFO
      <tr>
          <td class="col1">Year of SA302: </td>
          <td class="col2"><strong class="blue_dark">{$sa302year[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Where is the Income From: </td>
          <td class="col2"><strong class="blue_dark">{$incomeFrom[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Which figures are you providing below: </td>
          <td class="col2"><strong class="blue_dark">{$figures[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Employment Income: </td>
          <td class="col2"><strong class="blue_dark">{$grossIncome[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Rental Income: </td>
          <td class="col2"><strong class="blue_dark">{$rentalIncome[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Self Employment Income: </td>
          <td class="col2"><strong class="blue_dark">{$selfEmploymentIncome[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Other Investment Income: </td>
          <td class="col2"><strong class="blue_dark">{$otherInvestmentIncome[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Dividend Income: </td>
          <td class="col2"><strong class="blue_dark">{$dividendIncome[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Interest Income: </td>
          <td class="col2"><strong class="blue_dark">{$interestIncome[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">Pension Contributions: </td>
          <td class="col2"><strong class="blue_dark">{$pensionContributions[$i]}</strong></td>
      </tr>\r\n
      <tr>
          <td class="col1">SA302 Printing Date: </td>
          <td class="col2"><strong class="blue_dark">{$printingDate[$i]}</strong></td>
      </tr>\r\n
SA302_INFO;
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
                                    <td class="col1">Item2 Amount: </td>
                                    <td class="col2"><strong class="blue_dark">{$item2_amount}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Item2 Name: </td>
                                    <td class="col2"><strong class="blue_dark">{$item2_name}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Item2 Price: </td>
                                    <td class="col2"><strong class="blue_dark">{$item2_price}</strong></td>
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
                                    <td class="col1">Title: </td>
                                    <td class="col2"><strong class="blue_dark">{$title}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Name as it appears on Document: </td>
                                    <td class="col2"><strong class="blue_dark">{$name}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">UTR (Tax Ref Number): </td>
                                    <td class="col2"><strong class="blue_dark">{$UTR}</strong></td>
                                </tr>\r\n
                                <tr>
                                    <td class="col1">Delivery Name and Address: </td>
                                    <td class="col2"><strong class="blue_dark">{$delivery_address}</strong></td>
                                </tr>\r\n


                                <tr>
                                    <td class="col1"><h5>SA302 information</h5></td>
                                    <td class="col2"></td>
                                </tr>\r\n
                                {$sa302_info}


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
