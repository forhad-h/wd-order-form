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
                <div class="step_heading">STEP 4 (of 4)</div>
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

                          <label for="text">E-mail</label>
                          <input name="email" id="email" class="form-control" type="text">


                          <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                              <label for="nameTitle">Title</label>
                              <select name="name_title" id="nameTitle" class="form-control">
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Dr">Dr</option>
                              </select>
                            </div>
                          </div>


                          <label for="name">Name on Payslip</label>
                          <input size="32" name="name" id="name" class="form-control" type="text">

                          <label for="company">Company on Payslip</label>
                          <input size="32" name="company" id="company" class="form-control" type="text">

                          <label for="ni_no">NI Number <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="This is made up of 9 digits consisting of numbers and letters. Usually starting with 2 letters." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                          <input type="text" name="ni_no" id="ni_no" class="form-control">

                          <label for="paymentperiod">Payment Period</label>
                          <select name="paymentperiod" id="paymentperiod" class="form-control">
                              <option value="" selected=""></option>
                              <option value="Weekly">Weekly</option>
                              <option value="Monthly">Monthly</option>
                              <option value="Yearly">Yearly</option>
                              <option value="Fortnightly">Fortnightly</option>
                          </select>

                          <label for="textarea">Delivery Address</label>
                          <textarea name="payslip_address" id="payslip_address" class="form-control" rows="5" spellcheck="false"></textarea>

                          <label for="figures">Which figures are you providing below <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="Check this carefully as we can not change it once completed." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                          <select name="figures" id="figures" class="form-control">
                            <option value="" selected=""></option>
                            <option value="Gross Pay (Before Tax)">Gross Pay (Before Tax)</option>
                            <option value="Net Pay(After Tax)">Net Pay (After Tax)</option>
                          </select>

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
        ?>
        <div class="big_box_wrapper wd_conditional_single_field wd_conditional_field_<?= $i; ?>">
          <div class="container">
            <div class="big_box_arch_top"></div>
            <div class="big_box_arch_bottom_blue"></div>
            <div class="big_box_arch_bottom"></div>
            <div class="white_box_wrapper minus_padding_top">
              <div class="style_box">
                <div class="main_hedding sky_blue_bg">
                  <h2><span class="wd_cond_title">Payslip <?= $i; ?></span></h2>
                  <input type="hidden" value="Payslip <?= $i; ?> " name="wd_cond_title_field[]" class="wd_cond_title_field" />
                </div>
                <div class="row">
                  <div class="col-xl-7 col-lg-10 col-md-10 col-sm-12 offset-md-1">
                    <div class="statement_form">

                      <div class="row">
                        <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                          <label for="BAddress">Payslip Date</label>
                          <input type="text" size="32" name="payslip_date[]" id="BAddress" class="showcalend datepicker form-control" />
                        </div>
                      </div>

                      <label>Gross or Net pay <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="This cannot be changed once the order has been completed." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                      <input type="text" name="gross_pay[]" class="form-control">

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
