<?php
  if(isset($_POST['email'])){
    $remitente = $_POST['email'];
    $destinatario = 'pfadarraga@gmail.com'; // en esta línea va el mail del destinatario.
    $asunto = 'Karabanak'; // acá se puede modificar el asunto del mail
    if (!$_POST){

    }else{
       
      $cuerpo = "Nombre y apellido: " . $_POST["name"] . "\r\n"; 
      $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
      $cuerpo .= "Teléfono: " . $_POST["tlf"] . "\r\n";
      $cuerpo .= "Consulta: " . $_POST["consult"] . "\r\n";
    //las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
    // Si se agrega un campo al formulario, hay que agregarlo acá.

      $headers  = "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/plain; charset=utf-8\n";
      $headers .= "X-Priority: 3\n";
      $headers .= "X-MSMail-Priority: Normal\n";
      $headers .= "X-Mailer: php\n";

      mail($destinatario, $asunto, $cuerpo, $headers);
      echo '<div class="kontaktua__mensaje">Mezua bidalita! Eskerrik asko. Lehen bait lehen jarriko gara zurekin arremanetan.</div>';
    }

  }
?>
