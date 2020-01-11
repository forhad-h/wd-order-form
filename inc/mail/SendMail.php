<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once dirname(__FILE__).'/lib/PHPMailer/src/Exception.php';
require_once dirname(__FILE__)."/lib/PHPMailer/src/PHPMailer.php";
require_once dirname(__FILE__)."/template/".$_POST['form_type'].".php";

$emailFrom = !empty($_POST['email']) ? $_POST['email'] : 'phpmailer@email.com';
$emailTo = $_POST['reciever_email'];

$mail = new PHPMailer(TRUE);

if($_SERVER["REQUEST_METHOD"] == "POST") {


  try{
      $mail->isHTML(true);
      // Set the mail sender.
      $mail->setFrom($emailFrom, 'Company name');
      // Add a recipient.
      $mail->addAddress($emailTo);
      // Set the subject.
      $mail->Subject = 'Subject goes here';
      // Set the mail message body.
      $mail->Body = emailTemplate();

      // Attachments
      $file = $_FILES['attachment'];
      if($file['tmp_name']) {
          $mail->addAttachment($file['tmp_name'], $file['name']);
      }

      /* Finally send the mail. */
      $mail->send();

      // redirect to thank you page
      $thank_you_page = $_POST['thank_you_page'];
      header("Location: {$thank_you_page}");
      exit();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}
