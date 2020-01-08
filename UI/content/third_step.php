<?php defined('ABSPATH') or die("Prevent direct access!"); ?>
<!-- second Step  -->
<div id="thirdStep">
   <div class="first_box_wrapper">
      <div class="container">
         <div class="first_box_arch_top"></div>
         <div class="big_box_arch_bottom_blue"></div>
         <div class="big_box_arch_bottom"></div>

         <div class="white_box_wrapper">
            <div class="style_box">
               <div class="step_text">

                  <div class="step_heading">STEP 3 (of 4)</div>
                  <ul class="step_blt">
                     <li class="active">-</li>
                     <li class="active">-</li>
                     <li class="active">-</li>
                     <li>-</li>
                  </ul>

                  <h2 class="firstStep_tittle"><span class="black_inner_capi">Which bank do you require?</span></h2>

                  <div class="row">

                     <div class="col-lg-12">
                        <div class="tab-content">

                           <ul class="state_list_tab bank_list">
                             <?php
                              foreach($product_list as $mainIndex => $innerList) {
                             ?>
                             <div class="wd_product_list" id="productList<?= $mainIndex; ?>">
                                <?php
                                     foreach($innerList as $listIndex => $data ) {
                                       $hasSelection1 = array_key_exists('selection1', $data);
                                 ?>
                                 <li class="wd_single_product">
                                   <div class="zoom_thumb">
                                     <a href="#"><i class="fa fa-search"></i></a>
                                   </div>
                                   <div>
                                     <div class="wd_product_image_wrapper <?= $hasSelection1 ? 'hasSelection1' : '; '?>">
                                       <img src="<?= WDF_PLUGIN_URL; ?>/assets/img/<?= $data['image_name'];?>" alt="<?= $data['label']; ?>" title="<?= $data['label']; ?>" border="0"/>
                                     </div>

                                      <div class="wd_option_box">
                                        <?php
                                          if($hasSelection1) :
                                        ?>
                                        <div class="statement_list">
                                          <h3 class="text-danger"><?= $data['selection1']['title']; ?></h3>
                                          <ul>
                                            <?php
                                              foreach($data['selection1']['options'] as $optionIndex => $option) :
                                                $id_name = $option.$mainIndex.$listIndex.$optionIndex;
                                            ?>
                                                <li>
                                                  <input type="radio" id="<?= $id_name; ?>" class="wd_product_type" name="product_type" value="<?= $option;?>" data-product-ref="<?= $mainIndex.$listIndex.$optionIndex;?>">
                                                  <label for="<?= $id_name; ?>"><?= $option;?></label>
                                                  <div class="check check_part2" style="border-width: 2px;"></div>
                                                  </li>
                                              <?php endforeach; ?>
                                           </ul>
                                         </div>
                                         <?php endif; ?>

                                         <a href="#" class="btn btn-black text-uppercase btn-lg goBack2 back_step_2_btn">Go Back</a>
                                         <a href="#" class="btn btn-danger text-uppercase btn-lg bankStatement2 next_step_4_btn">Next Step</a>
                                     </div>
                                    <h4> <?= $data['label']; ?> </h4>
                                 </div>
                                 </li>
                                <?php } ?>
                             </div>
                             <?php } ?>
                           </ul>

                           <input type="hidden" id="wdProductName" name="product_name" />
                           <input type="hidden" id="wdBankImageUrl" name="product_image_url" />
                           <input type="hidden" id="wdProductType" name="product_type" />
                           <input type="hidden" id="wdHasSelection1" value="false" />
                           <div class="clear10px"></div>
                        </div>
                     </div>


                     <div class="clear20px"></div>

                     <div class="btncenter">
                        <a href="#" class="btn btn-black text-uppercase btn-lg goBack2 back_step_2_btn">Go Back</a>
                        <a href="#" class="btn btn-danger text-uppercase btn-lg bankStatement2 next_step_4_btn">Next Step</a>
                     </div>
                  </div>

               </div>
            </div>
         </div>


      </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="wdAccountTypeAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Alert!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">Please select an account type.</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>
