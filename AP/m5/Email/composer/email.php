<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail= new PHPMailer(true);
 try{
     $mail->SMTPOptions= array(
         'ssl'=> array(
             'verify_peer' => false, // chon az tls estefade mikonim
             'verify_peer_name' => false,
             'allow_self_signed'=> true


         )
     );

     $mail->SMTPDebug= 2;
     $mail->isSMTP();
     $mail->Host="smtp.gmail.com";
     $mail->SMTPAuth= true;
     $mail->Username = "mohammadalikazemi98@gmail.com";
     $mail->Password = "9G;mak1377";
     $mail->SMTPSecure = "tls";// tls Or ssl => tls behtare baraye gmail
     $mail->Port= 587;

     // Optional
     $mail->setFrom("mohammadalikazemi98@gmail.com", "Mak");
     $mail->addAddress("makazemi1998@gmail.com");
     $mail->isHTML(true);
     $mail->Subject = "Mailer Test";
     $mail->Body ="This is a Test";

     $mail->send();
     echo "ok";
 }
 catch (Exception $e){
     echo "no";
 }

?>