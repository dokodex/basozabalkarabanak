<?php
require 'PHPMailerAutoload.php';

if(isset($_POST['email'])){
  $remitente = $_POST['email'];
  $destinatario = 'info@basozabalkarabanak.com'; // en esta línea va el mail del destinatario.
  $asunto = '[BASOZABAL KARABANAK] Nueva consulta de: '. $_POST['name']; // acá se puede modificar el asunto del mail
  if (!$_POST){

  }else{

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
    $mail->Host = 'smtp.basozabalkarabanak.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@basozabalkarabanak.com';      // SMTP username
    $mail->Password = 'Basozabal-1234';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('info@basozabalkarabanak.com', 'Basozabal Karabanak');
    $mail->addAddress('info@basozabalkarabanak.com', $_POST['name']);     // Add a recipient
    
    $cuerpo = "<strong>Nombre y apellido: </strong>" . $_POST["name"] . "<br>";
    $cuerpo .= "<strong>Email: </strong>" . $_POST["email"] . "<br>";
    $cuerpo .= "<strong>Tel&eacute;fono: </strong>" . $_POST["tlf"] . "<br><br>";
    $cuerpo .= "<strong>Consulta: </strong><br>" . $_POST["consult"] . "<br>";
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $asunto;
    $mail->Body    = $cuerpo;
    //$mail->AltBody = $cuerpo;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        if($_SESSION['languages']=='eus'){
          echo '<div class="kontaktua__mensaje">Mezua bidalita! Lehen bait lehen jarriko gara zurekin arremanetan. Eskerrik asko.</div>';
            echo $cuerpo;
          }
        if($_SESSION['languages']=='es'){
          echo '<div class="kontaktua__mensaje">¡Mensaje eviado! Nos pondremos en contacto con usted lo antes posible. Muchas gracias.</div>';
        }
        
        
    }

  }

}