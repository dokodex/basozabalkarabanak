<?php

function phpmailer($name, $subject, $body){

  require 'PHPMailerAutoload.php';

  $mail = new PHPMailer;
  $mail->SMTPDebug = 0;                               // Enable verbose debug output
  $mail->isSMTP();                                  // Set mailer to use SMTP
  $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
      );


  //MODIFY THIS INFO

  $username = 'info@basozabalkarabanak.com';
  $corpusernape = 'Basozabal Karabanak';

  $mail->Host = 'smtp.basozabalkarabanak.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'info@basozabalkarabanak.com';      // SMTP username
  $mail->Password = 'Basozabal-1234';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect toç

  //


  $mail->setFrom($username, $corpusernape);
  $mail->addAddress($username, $name);     // Add a recipient

  $mail->isHTML(true);                                  // Set email format to HTML

  $mail->Subject = $subject;
  $mail->Body    = $body;
  //$mail->AltBody = $cuerpo;

  if(!$mail->send()) {
      echo 'Message could not be sent.';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
      if($_SESSION['languages']=='eus'){
        echo '<div class="kontaktua__mensaje">Mezua bidalita! Lehen bait lehen jarriko gara zurekin arremanetan. Eskerrik asko.</div>';
        }
      if($_SESSION['languages']=='es'){
        echo '<div class="kontaktua__mensaje">¡Mensaje eviado! Nos pondremos en contacto con usted lo antes posible. Muchas gracias.</div>';
      }
      
      
  }
}

