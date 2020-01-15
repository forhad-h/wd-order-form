<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div id="lastStep">
<div class="innner_wrapper small_arh-wrapper_single">

      <?php include_once WDF_PLUGIN_PATH.'UI/content/order_summary.php'; ?>

      <div>
        <div class="first_box_wrapper">
          <div class="container">
            <div class="first_box_arch_top"></div>
            <div class="first_box_arch_bottom"></div>
            <div class="white_box_wrapper">
              <div class="step_text">
                <div class="step_heading">STEP 3 (of 3)</div>
                <ul class="step_blt">
                  <li class="active">-</li>
                  <li class="active">-</li>
                  <li class="active">-</li>
                  <li class="active">-</li>
                </ul>
                <h2 class="firstStep_tittle"><span class="black_inner_capi"><?= $step_title_4; ?></span></h2>
                <div class="step3_top_icon"><i class="fa fa-question-circle"></i></div>
                <p>If you are unsure what information to type, please click the question mark icon next to the field</p>
                <div class="clearfix m-5"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="big_box_wrapper">
          <div class="container">
            <div class="big_box_arch_top"></div>
            <div class="big_box_arch_bottom_blue"></div>
            <div class="big_box_arch_bottom"></div>
            <div class="white_box_wrapper minus_padding_top">
              <div class="style_box">
                <div class="row">
                  <div class="col-xl-7 col-lg-10 col-md-10 col-sm-12 offset-md-1">
                    <div class="main_hedding sky_blue_bg">
                      <h2>Personal Information</h2>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">

                        <div class="statement_form">

                              <label for="email">E-mail</label>
                              <input type="text" maxlength="32" size="32" name="email" id="email" class="form-control">
                              <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                  <label for="title">Title</label>
                                  <select name="title" id="title" class="form-control">
                                    <option value="Mr">Mr</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Miss">Miss</option>
                                    <option value="Dr">Dr</option>
                                  </select>
                                </div>
                              </div>
                              <label for="name">Name as it appears on Document</label>
                              <input type="text" name="name" id="name" class="form-control">
                              <label for="UTR">UTR (Tax Ref Number) <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="A 10 digit number found on the document" data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                              <input type="text" name="UTR" id="UTR" class="form-control">
                              <label for="delivery_address">Delivery Name and Address</label>
                              <textarea name="delivery_address" id="delivery_address" class="form-control" rows="4"></textarea>

                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="statement_step3_arrow"></div>
          </div>
        </div>

        <?php
            for($i=1; $i <= $max_options; $i++) {
              $sequence = '';
              switch($i) {
                case 1:
                   $sequence = $i.'st';
                   break;
                case 2:
                   $sequence = $i.'nd';
                   break;
                case 3:
                   $sequence = $i.'rd';
                   break;
                default:
                   $sequence = $i.'th';
              }

        ?>
        <div class="big_box_wrapper wd_conditional_single_field wd_conditional_field_<?= $i; ?>">
          <div class="container">
            <div class="big_box_arch_top"></div>
            <div class="big_box_arch_bottom_blue"></div>
            <div class="big_box_arch_bottom"></div>
            <div class="white_box_wrapper minus_padding_top">
              <div class="style_box">
                <div class="main_hedding sky_blue_bg">
                  <h2><?= $sequence; ?> <span class="wd_cond_title">SA302 Details</span></h2>
                  <input type="hidden" value="<?= $sequence; ?> P60 Document" name="wd_cond_title_field[]" class="wd_cond_title_field" />
                </div>
                <div class="row">
                  <div class="col-xl-7 col-lg-10 col-md-10 col-sm-12 offset-md-1">
                    <div class="statement_form">
                      <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                          <label>Year of SA302</label>
                          <select class="form-control" name="sa302year[]">
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                          </select>
                        </div>
                      </div>
                      <label>Where is the Income From</label>
                      <select class="form-control" name="incomeFrom[]">
                        <option value="Self Employment">Self Employment</option>
                        <option value="Working for someone">Working for someone</option>
                      </select>
                      <label>Which figures are you providing below <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="Which figures are you providing." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                      <select name="figures[]" class="form-control">
                        <option value="Gross Pay (Before Tax)">Gross Pay (Before Tax)</option>
                        <option value="Net Pay (After Tax)">Net Pay (After Tax)</option>
                      </select>
                      <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                          <label style="white-space:nowrap;">Employment Income <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="Breakdown the various sources of income using the fields below. If you require more detail, please use the comments section at the end of the order form or contact us directly." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                          <input type="text" name="grossIncome[]" class="form-control">
                          <label>Rental Income</label>
                          <input type="text" name="rentalIncome[]" class="form-control">
                          <label style="white-space:nowrap;">Self Employment Income</label>
                          <input type="text" name="selfEmploymentIncome[]" class="form-control">
                          <label style="white-space:nowrap;">Other Investment Income</label>
                          <input type="text" name="otherInvestmentIncome[]" class="form-control">
                          <label>Dividend Income</label>
                          <input type="text" name="dividendIncome[]" class="form-control">
                          <label>Interest Income</label>
                          <input type="text" name="interestIncome[]" class="form-control">
                          <label style="white-space:nowrap;">Pension Contributions <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="Have you made any private contributions towards a pension during the year?" data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                          <input type="text" name="pensionContributions[]" class="form-control">
                          <label style="white-space:nowrap">SA302 Printing Date</label>
                          <input type="text" size="32" name="printingDate[]" class="showcalend datepicker form-control" />
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>





        <div class="big_box_wrapper">
          <div class="container">
            <div class="big_box_arch_top"></div>
            <div class="big_box_arch_bottom_blue"></div>
            <div class="big_box_arch_bottom"></div>
            <div class="white_box_wrapper minus_padding_top">
              <div class="style_box">
                <div class="main_hedding sky_blue_bg">
                  <h2>Other</h2>
                </div>
                <div class="row">
                  <div class="col-xl-9 col-lg-10 col-md-10 col-sm-12 offset-md-1">
                    <div class="statement_form">

                      <div class="row">
                        <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                          <div class="clear10px"></div>
                          <label for="text">Would you like to receive emails with future discounts from us? <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="We will email you in the future with updates." data-original-title="" title=""></i></a></label>
                          <input id="hearus" class="form-control" name="hearus" type="text">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                          <label for="textarea">Extra information <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="State any important information here which we may need to know before starting." data-original-title="" title=""></i> </a> </label>
                          <textarea id="extrainfo" class="form-control" cols="26" rows="5" name="extrainfo"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                          <p>Terms and conditions</p>
                          <div class="alert_form"><p>Providing incorrect or inaccurate information for the purpose of misleading others is committing fraud. You must be the original owner of the original documents to place an order. We are not affiliated or connected with any of the official companies. You should contact your original provider for the official documents.</p>
                          <p><a href="#">See here</a> for the full terms and conditions</p></div>
                        </div>
                      </div>
                      <div class="statement_list2">
                        <input name="terms_and_conditions" id="terms_and_conditions" value="yes" onclick="FillAddress(this.form)" type="checkbox">
                        <label for="terms_and_conditions">I understand and accept the Terms and Conditions above</label>
                        <div class="check"></div>
                      </div>

                      <div class="m-4 clearfix"></div>
                      <div class="m-4 clearfix"></div>
                      <div class="row">
                        <div class="col-sm-3"><a class="btn btn-black text-uppercase btn-lg btn-block" id="backStep3Btn" href="C:\Users\MITHU\Desktop\F\third_step.html">Go Back</a></div>
                        <div class="col-sm-6"><button type="submit" class="btn btn-danger text-uppercase btn-lg btn-block" id="bankStatement3" href="#">Submit</button></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="statement_step7_arrow"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
