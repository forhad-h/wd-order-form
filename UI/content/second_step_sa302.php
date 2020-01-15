<?php defined('ABSPATH') or die("Prevent direct access!"); ?>
<!----------- first step---------->
<div id="secondStep" class="ts_<?= $form_type; ?>">
  <div class="first_box_wrapper">
    <div class="container">
        <div class="first_box_arch_top"></div>
        <div class="big_box_arch_bottom_blue"></div>
        <div class="big_box_arch_bottom"></div>
        <div class="white_box_wrapper">
          <div class="style_box">
            <div class="step_text">
              <div class="step_heading">STEP 1 (of 4)</div>
              <ul class="step_blt">
                <li class="active">-</li>
                <li>-</li>
                <li>-</li>
                <li>-</li>
              </ul>
              <h2 class="firstStep_tittle"><span class="black_inner_capi"><?= $step_title_1;?></span></h2>
              <div class="clearfix"></div>

              <?php if($help_info1 || $help_info2) : ?>
              	<div class="order2_step">
                	<ul class="order_details_list2">
                    	<li><?= $help_info1; ?></li>
                      <li><?= $help_info2; ?></li>
                    </ul>
                </div>
              <?php endif;?>

              <div class="clearfix clear40px visible-lg visible-md visible-sm"></div>
              <div class="row">
                <div class="col-lg-7 col-md-8 col-sm-12 offset-md-2">
                  <div class="statement_list summarysheet_order radio_btn_required item_list2">
                        <?php if(isset($list_title2) && !empty($list_title2)) {?>
                            <h3 class="text-left" style="margin:0; padding:0; margin-bottom:20px;"><?= $list_title2;?></h3>
                        <?php } ?>
                        <ul>
                          <?php
                             foreach($item_fields_2 as $index => $field) {
                               $kebabLabel = $field['amount'].'-'.$field['label'];
                               $kebabLabel = str_replace(' ', '-', $kebabLabel);

                               $amount = $field['showAmount'] !== false ? $field['amount'] : '';

                               $label = $amount.' '.$field['label'];
                          ?>
                            <li class="<?= $index === 0 ? 'summery-sheet' : ''; ?>">
                              <input type="radio" id="<?= $kebabLabel;?>" name="item2" value="<?= $field['amount'].','.$field['label'].','.$field['price']; ?>">
                              <label for="<?= $kebabLabel;?>" price="<?= $field['price']?>" style="text-align:left;"><?= $label; ?><br></label>
                              <div class="check"></div>
                              <span class="sheet_right"><?= $index !== count($item_fields) - 1 ? '£'.$field['price'] : $field['price'];?></span>
                            </li>
                          <?php  } ?>

                        </ul>
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
