
<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "aanaishara@gmail.com";
   $mail ->Password = "qazmlp159";
   $mail ->SetFrom("aanaishara@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo"<script>alert('mail not send  ');</script>";
                echo"<script>window.location='mail.php'</script>";
      
   }
   else
   {
    echo"<script>alert('Mail send sucessfully  ');</script>";
                echo"<script>window.location='index.php'</script>";
      
    
   }





   

?>