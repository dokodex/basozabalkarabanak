<?php

if(isset($_POST['email'])){

  $sender = $_POST['email'];
  $name = $_POST['name'];
  $tlf = $_POST['tlf'];
  $receiver = 'info@basozabalkarabanak.com'; // en esta línea va el mail del destinatario.
  $subject = '[BASOZABAL KARABANAK] Nueva consulta de: '. $_POST['name']; // acá se puede modificar el asunto del mail
  $consult = $_POST['consult'];

  $body = "<strong>Nombre y apellido: </strong>" . $name . "<br>";
  $body .= "<strong>Email: </strong>" . $sender . "<br>";
  $body .= "<strong>Tel&eacute;fono: </strong>" . $tlf . "<br><br>";
  $body .= "<strong>Consulta: </strong><br>" . $consult . "<br>";

  if (!$_POST){

  }else{

    include 'php/phpmailer/index.php';

    phpmailer($name, $subject, $body);

  }

?>
