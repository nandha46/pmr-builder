<?php 

  require 'vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  
    if (!empty($_POST)) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
   
      if (empty($name)) {
          $errors[] = 'Name is empty';
      }
   
      if (empty($email)) {
          $errors[] = 'Email is empty';
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errors[] = 'Email is invalid';
   
      }
      if (empty($subject)) {
          $errors[] = 'Subject is empty';
      }
      if (empty($message)) {
          $errors[] = 'Message is empty';
      }
   
      if (!empty($errors)) {
          $allErrors = join('----', $errors);
          $obj = new stdClass();
          $obj->status = false;
          $obj->error = $allErrors;
          echo json_encode($obj);
      } else {
    
   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 0;
   $mail->Host = 'smtp.hostinger.in';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'contact@pmrbuilder.in';
   $mail->Password = '7cT31@OadE2d';
   $mail->setFrom('contact@pmrbuilder.in', 'PMR Contact Form');
   $mail->addReplyTo($email, $name);
   $mail->addAddress('nandha.kumar790@gmail.com', 'Nandhakumar Subramanian');
   $mail->addCC('pmrbuilder@gmail.com', 'PMR Builder');
   $mail->Subject = $name.' wants to Contact';
   $mail->isHTML(true);
   $txt = '<html>
<table width="600" style="border:1px solid #333">
  <tr>
    <td align="center">New Contact Request</td>
  </tr>
  <tr>
    <td align="center">
      <table align="center" width="300" border="0" cellspacing="0" cellpadding="0" style="border:1px solid #ccc;">
        <tr>
          <td> Name </td>
          <td>'. $name .'</td>
        </tr>
        <tr>
          <td> Email </td>
          <td>'. $email .'</td>
        </tr>
        <tr>
          <td> Subject </td>
          <td>'. $subject .'</td>
        </tr>
        <tr>
          <td> Message </td>
          <td>'. $message .'</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</html>';
   $mail->Body = $txt;
   //$mail->addAttachment('attachment.txt');
   if (!$mail->send()) {
          $obj = new stdClass();
          $obj->status = false;
          $obj->error = $mail->ErrorInfo;
          echo json_encode($obj);
   } else {
          $obj = new stdClass();
          $obj->status = true;
          echo json_encode($obj);
   }
      }
    }
    ?>