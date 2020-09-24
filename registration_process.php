<?php
include_once("dbconnection.php");


if (isset($_POST['lastname']))

    {  
    	
    	$firstname=$_POST['firstname'];
    	$lastname=$_POST['lastname'];
       $username=$_POST['username'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="INSERT INTO user(firstname,lastname,username,contact,email,password) VALUES ('$firstname', '$lastname', '$username','$contact','$email','$password')";
      $result=mysqli_query($connect,$sql);
      if($result)
        {
    
        echo"<script>alert('Register successfully');</script>";
        echo"<script>window.location='index.php';</script>";
        }
        else
        {
      echo"<script>alert('Couldn't added');</script>";
      echo"<script>window.location='login_register.php';</script>";
          }
          }
?>


<?php
if(isset($_POST['lastname']))
{
$to=$_POST['email'];
$id=mysqli_insert_id($connect);
require_once 'dbconnection.php';

$uri = 'http://'. $_SERVER['HTTP_HOST'].'/php/click2shop' ;
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'aanaishara@gmail.com';          // SMTP username
$mail->Password = 'qazmlp159'; // SMTP password
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                          // TCP port to connect to

$mail->setFrom('aanaishara@gmail.com', 'Subject');
$mail->addReplyTo('your gmail username', 'Subject');
$mail->addAddress($to);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<p>Click on the given link to Activate your account
<a href="'.$uri.'/registration_verification.php?id='.$id.'">Verify Account</a></p> ';

$mail->Subject = 'Email from Localhost';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>alert('We have sent the activetion link to your  email id')</script>";
    echo "<script>window.location='index.php'</script>";   
               
}
}
?>