<?php defined('ABSPATH') or die("Prevent direct access!"); ?>
<!-------------------Second Step------------------->
<div id="secondStep">
  <div class="first_box_wrapper">
    <div class="container">
      <div class="first_box_arch_top"></div>
      <div class="big_box_arch_bottom_blue"></div>
      <div class="big_box_arch_bottom"></div>
      <div class="white_box_wrapper">
        <div class="style_box padding_bottom">
          <div class="step_text">
            <div class="step_heading">STEP 2 (of 4)</div>
            <ul class="step_blt">
              <li class="active">-</li>
              <li class="active">-</li>
              <li>-</li>
              <li>-</li>
            </ul>
            <h2 class="firstStep_tittle"><span class="black_inner_capi"><?= $step_title_2; ?></span></h2>
            <div class="clearfix m-5"></div>
            <div class="row">
                 <div class="col-lg-7 col-md-8 col-sm-12 offset-md-2">
                <div class="row">
                  <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
                    <div class="statement_list statement_list_pro radio_btn_required type_list">
                      <ul>
                        <?php
                            foreach($type_fields as $type_field) {
                              $kebabLabel = str_replace(' ', '-', $type_field['label']);
                        ?>
                        <li>
                          <input type="radio" id="<?= $kebabLabel;?>" name="item_type" value="<?= $type_field['label'];?>" data-product-ref="<?= $type_field['id'];?>">
                          <label for="<?= $kebabLabel;?>" ><?= $type_field['label'];?> <div class="product-no">(<?= $type_field['amount'];?> Products)</div></label>
                          <div class="check check_part2"></div>
                        </li>
                        <?php } ?>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="text-left">
                      <a href="#" class="btn btn-black text-uppercase btn-lg goBack_Payslips" id="backStep1Btn">Go Back</a>
                      <a href="#" class="btn btn-danger text-uppercase btn-lg Payslips_part2" id="nextStep3Btn">Next Step</a>
                </div>
              </div>
              <div class="col-sm-4">&nbsp;</div>
            </div>
          </div>
        </div>
      </div>
      <div class="statement_step3_arrow"></div>
    </div>
  </div>
</div>
