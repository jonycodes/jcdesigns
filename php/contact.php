

<?php
    
require 'PHPMailer/PHPMailerAutoload.php';

$name= $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message = htmlspecialchars($_POST['message']);

$mail = new PHPMailer();
 //$mail->SMTPDebug=2;
 $mail->IsSMTP();
 $mail->Port = 465;
 $mail->Host = 'smtp.mail.yahoo.com'; // "ssl://smtp.gmail.com" didn't worked
 $mail->IsHTML(true); // if you are going to send HTML formatted emails
 $mail->Mailer = 'smtp';
 $mail->SMTPSecure = 'ssl';

 $mail->SMTPAuth = true;
 $mail->Username = "ybfe1853@yahoo.com";
 $mail->Password = "Yellowx12";

 $mail->SingleTo = true; // if you want to send mail to the users individually so that no recipients can see that who has got the same email.

 $mail->From = "ybfe1853@yahoo.com";
 $mail->FromName = "JC-Designs Contact Form Auto Mailer";

 $mail->addAddress("ctennantdev@gmail.com","Christian");
 $mail->addAddress("mr.joannier@yahoo.com","Joni");


 $mail->Subject = "JC-Designs Contact Form";
 $mail->Body = 'Message from '.$name.'<br />'.'E-Mail: '.$email.'<br />'.'Phone: '.$phone.'<br />'.'Message: '.$message;

 if(!$mail->Send())
     echo "Message was not sent <br />PHP Mailer Error: " . $mail->ErrorInfo;
 else
     echo "";
?>

<html>
    <head>
        <title>Contact Us</title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <link href='../css/mail.css' type='text/css' rel='stylesheet'>
    </head>
    <body>
        
        <div class="row container1">
            <h1>Thank You <?php $name= $_POST['name']; echo $name ?></h1>
            <h1>Your message has been sent successfully!</h1>
            <h2>We will get back to you as soon as possible!</h2>
            <button  class="button"><a href="../index.html">Return To Main Page</a></button>
        </div>
    </body>
</html>