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

                          <label for="delNameAddr">Delivery Name and Address</label>
                          <textarea name="del_name_address" id="delNameAddr" class="form-control" rows="4"></textarea>

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
                  <h2><?= $sequence; ?> <span class="wd_cond_title"></span></h2>
                  <input type="hidden" value="<?= $sequence; ?> " name="wd_cond_title_field[]" class="wd_cond_title_field" />
                </div>
                <div class="row">
                  <div class="col-xl-7 col-lg-10 col-md-10 col-sm-12 offset-md-1">
                    <div class="statement_form">

                      <div class="row">
                        <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                          <label for="utility_bill_date">Utility Bill Date</label>
                          <input type="text" size="32" name="utility_bill_date[]" id="utility_bill_date" class="showcalend datepicker form-control" />
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                          <label for="title">Title</label>
                          <select name="utility_bill_name_title[]" id="title" class="form-control">
                            <option value="Mr">Mr</option>
                            <option value="Ms">Ms</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            <option value="Dr">Dr</option>
                          </select>
                        </div>
                      </div>

                      <label for="name">Name as it appears on Utility Bill</label>
                      <input size="32" name="utility_bill_name[]" id="name" class="form-control" type="text">

                      <label for="billDelAddress">Delivery address as it appears on Utility Bill</label>
                      <textarea name="bill_del_address[]" id="billDelAddress" class="form-control" rows="4"></textarea>

                      <label for="numberReference"> Customer Number/Reference <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="If you leave this blank we will use a random number." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                      <input id="numberReference" class="form-control" size="32" name="number_reference[]" type="text">


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
