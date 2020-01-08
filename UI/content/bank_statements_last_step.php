<?php defined('ABSPATH') or die("Prevent direct access!"); ?>

<div id="lastStep">
<div class="innner_wrapper small_arh-wrapper_single">

    <div class="outer_sticky">

        <div class="sticky_panel sticky_panel_third" style="margin: 0px; left: 0px; top: 70px; position: fixed; width: 649.027px;">

          <div class="main_hedding red_bg margin_left_20px">
            <h2>Order Summary</h2>
          </div>
          <div id="redboxwrapper">
              <div class="step1_right_bg_after"></div>
              <div class="step1_right_bg">
                  <div class="style_thumb style_thumb_new">
                    <img src="" id="displayProductImage" >
                    <h3>
                      <span id="displayItemLabel"></span><br>
                      <span id="displayProductName"></span><br>
                      <span id="displayProductType"></span><br>
                      <span class="text-danger">Total: £ <span id="totalPrice"></span></span>
                    </h3>
                </div>
              </div>
          </div>

          <div class="show_hide">
            <a href="#"><i class="fa fa-angle-up">
            </i></a>
          </div>

        </div>

      </div>

      <!-------------------------------------3rd Step----------------------------------------->
      <div style="">
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
                <h2 class="firstStep_tittle"><span class="black_inner_capi">Fill out the details needed</span></h2>
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
                              <label for="select">Title</label>
                              <select name="title" id="title" class="form-control">
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                                <option value="Dr">Dr</option>
                              </select>
                            </div>
                          </div>
                          <label for="text">Name as it appears on Bank Statement</label>
                          <input size="32" name="name" id="name" class="form-control" type="text">
                          <label for="address">Address as it appears on bank statement</label>
                          <textarea name="address" id="address" class="form-control" rows="4"></textarea>
                          <label>Delivery Address</label>
                          <div class="statement_list2">
                            <input
                            type="checkbox"
                            name="is_same_address"
                            value="yes"
                            id="isSameAddress"
                            checked>
                            <label for="isSameAddress" style="color:#000;">Same As Above</label>
                            <div class="check"></div>
                          </div>
                          <div class="deliveryAdress" id="deliveryAdress">
                            <textarea name="delivery_address" class="form-control" rows="5"></textarea>
                          </div>
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
        <div class="big_box_wrapper">
          <div class="container">
            <div class="big_box_arch_top"></div>
            <div class="big_box_arch_bottom_blue"></div>
            <div class="big_box_arch_bottom"></div>
            <div class="white_box_wrapper minus_padding_top">
              <div class="style_box">
                <div class="main_hedding sky_blue_bg">
                  <h2>Bank Information</h2>
                </div>
                <div class="row">
                  <div class="col-xl-7 col-lg-10 col-md-10 col-sm-12 offset-md-1">
                    <div class="statement_form">
                      <div class="row">
                        <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                          <label for="BAddress">Branch Address
                          <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="If your statements do not show an address, you can leave this blank." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                          <textarea name="BAddress" id="BAddress" class="form-control" cols="26" rows="5"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                          <label for="text">Bank Account Number</label>
                          <input size="32" name="AccountNumber" id="AccountNumber" class="form-control" type="text">
                        </div>
                      </div>
                      <label for="text">Bank Account Sort Code</label>
                      <div class="row">
                        <div class="col-sm-4 col-md-2 col-lg-2 col-xl-2">
                          <input type="text" class="form-control form-control-sm" name="AccountSortCode" id="AccountSortCode">
                        </div>
                        <div class="col-sm-4 col-md-2 col-lg-2 col-xl-2">
                          <input type="text" class="form-control form-control-sm" name="AccountSortCode2" id="AccountSortCode2">
                        </div>
                        <div class="col-sm-4 col-md-2 col-lg-2 col-xl-2">
                          <input type="text" class="form-control form-control-sm" name="AccountSortCode3" id="AccountSortCode3">
                        </div>
                      </div>
                      <label for="text">IBAN <a href="javascript:void(0);" class="qustion" data-container="body" data-toggle="popover" data-placement="top" data-content="This number starts with GB and can be found on your online or paper statements. It is 22 characters long." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>

                      <div class="iban_onefield">
                          <div class="row">
                            <div class="col-xs-12">
                              <input name="IBAN_mobile" id="IBAN_mobile" class="form-control" size="22" maxlength="22" type="text">
                            </div>
                          </div>
                      </div>
                      <div class="iban_allfields">
                          <div class="row">
                            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                              <input size="4" maxlength="4" name="IBAN" id="IBAN" class="form-control" type="text">
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                              <input size="4" maxlength="4" name="IBAN2" id="IBAN2" class="form-control" type="text">
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                              <input size="4" maxlength="4" name="IBAN3" id="IBAN3" class="form-control" type="text">
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                              <input size="4" maxlength="4" name="IBAN4" id="IBAN4" class="form-control" type="text">
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                              <input size="4" maxlength="4" name="IBAN5" id="IBAN5" class="form-control" type="text">
                            </div>
                            <div class="col-sm-1 col-md-1 col-lg-1 col-xl-1">
                              <input size="2" maxlength="2" name="IBAN6" id="IBAN6" class="form-control" type="text">
                            </div>
                          </div>
                      </div>

                      <label for="text">BIC/SWIFT <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="This number is usually next to your IBAN. It is around 8 characters long and usually starts with the name of your bank" data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                      <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                          <input id="BIC_SWIFT" class="form-control" size="32" name="BIC_SWIFT" type="text">
                        </div>
                      </div>
                      <label for="text">Starting Statement Number/Page Number <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="Depending on your bank this could be a page number or the number at the top of your statement. A higher number means you have had a higher amount of previous statements." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                      <div class="row">
                        <div class="col-sm-12 col-md-2 col-lg-2 col-xl-2">
                          <input id="StatementNumber" class="form-control" size="32" name="StatementNumber" type="text">
                        </div>
                      </div>

                      <div id="startEndDate"></div>

                      <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                          <label for="text"> Overdraft Limit <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="If you do not have an overdraft, you can leave this blank." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                          <input id="Overdraft" class="form-control" size="32" name="Overdraft" type="text">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                          <label for="text"> Starting Balance <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="If you leave this blank we will use a random figure." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                          <input id="StartingBalance" class="form-control" size="32" name="StartingBalance" type="text">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                          <label for="text"> End Balance <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="If you leave this blank we will use a random figure." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                          <input id="EndBalance" class="form-control" size="32" name="EndBalance" type="text">
                        </div>
                      </div>
                      <div id="Summary_Sheet_option">
                          <p>Would you like us to add random transactions? <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="We will add transactions such as clothes shopping, fuel, restaurants and supermarkets." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></p>
                          <div class="statement_bullet">
                            <div class="row">
                              <div class="col-sm-5 col-xs-6 col-6" style="position:relative;">
                                <input id="RandomTransactions" name="RandomTransactions" value="yes" type="radio">
                                <label for="RandomTransactions">Yes</label>
                                <div class="check"></div>
                              </div>
                              <div class="col-sm-5 col-xs-6 col-6" style="position:relative;">
                                <input id="RandomTransactions2" name="RandomTransactions" value="no" type="radio">
                                <label for="RandomTransactions2">No</label>
                                <div class="check"></div>
                              </div>
                            </div>
                          </div>
                          <p>Would you like to add your own transactions? <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="Write the transactions as accurately as possible and how you would want them to appear on the statement." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></p>
                          <div class="statement_bullet">
                            <div class="row">
                              <div class="col-sm-5 col-xs-6 col-6" style="position:relative;">
                                <input id="OwnTransactions" name="OwnTransactions" value="yes" type="radio">
                                <label for="OwnTransactions">Yes</label>
                                <div class="check"></div>
                              </div>
                              <div class="col-sm-5 col-xs-6 col-6" style="position:relative;">
                                <input id="OwnTransactions2" name="OwnTransactions" value="no" type="radio">
                                <label for="OwnTransactions2">No</label>
                                <div class="check"></div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>


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
                <div class="main_hedding sky_blue_bg">
                  <h2>Other</h2>
                </div>
                <div class="row">
                  <div class="col-xl-9 col-lg-10 col-md-10 col-sm-12 offset-md-1">
                    <div class="statement_form">
                      <label for="textarea">Add Attachment <a class="qustion" href="javascript:void(0);" data-container="body" data-toggle="popover" data-placement="top" data-content="You may send a list of transactions or images of your statement which will help us create yours more accurately." data-original-title="" title=""><i class="fa fa-question-circle"></i></a></label>
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="allattachments">
                          <div class="box box22">
                            <input type="file" name="attachment" id="attachment" class="firstAttachment inputfile inputfile-6">
                            <label for="attachment"><span></span> <strong>Choose file…</strong></label>
                           <a href="#" class="plus_generator add_attachment"><i class="fa fa-plus"></i></a> </div>
                        </div>
                      </div>
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
