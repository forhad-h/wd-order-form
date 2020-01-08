<?php
    defined('ABSPATH') or die("Prevent direct access!");

    // Each form data
    require_once WDF_PLUGIN_PATH.'inc/form-type-data.php';
    require_once WDF_PLUGIN_PATH.'inc/product-list/'.$form_type.'.php';
?>

<div class="wd_orders_form_container">
  <form id="WDOFForm" name="wd_orders_form" method="post" action="<?= WDF_PLUGIN_URL.'inc/mail/SendMail.php'; ?>" enctype="multipart/form-data">

      <!-- $form_type comes from inc/form-type-data-->
      <input type="hidden" id="formType" name="form_type" value="<?= $form_type; ?>" />
      <input type="hidden" name="reciever_email" value="<?= get_theme_mod('wd_reciever_email_field');?>" />
      <input type="hidden" name="thank_you_page" value="<?= get_theme_mod('wd_thank_you_page_url_field');?>" />

      <?php include_once WDF_PLUGIN_PATH."UI/content/first_step.php"; ?>
      <?php include_once WDF_PLUGIN_PATH."UI/content/second_step.php"; ?>
      <?php include_once WDF_PLUGIN_PATH."UI/content/third_step.php"; ?>
      <?php include_once WDF_PLUGIN_PATH."UI/content/last-step/".$form_type.".php"; ?>
  </form>
</div>
