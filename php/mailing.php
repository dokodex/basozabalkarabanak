<?php
  /*

  if(isset($_POST['email'])){
    $remitente = $_POST['email'];
    $destinatario = 'info@basozabalkarabanak.com'; // en esta línea va el mail del destinatario.
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


  error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

  set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
  require_once "Mail.php";

  $host = "ssl://smtp.basozabalkarabanak.com";
  $username = "info@basozabalkarabanak.com";
  $password = "Basozabal-1234";
  $port = "465";
  $to = "info@basozabalkarabanak.com";
  $email_from = $_POST['email'];
  $email_subject = "Basozabal Karabanak Consulta";
  $email_body = "Nombre y apellido: " . $_POST["name"] . "\r\n";
  $email_body .= "Teléfono: " . $_POST["tlf"] . "\r\n";
  $email_body .= "Consulta: " . $_POST["consult"] . "\r\n";
  $email_address = $_POST['email'];

  $headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
  $smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
  $mail = $smtp->send($to, $headers, $email_body);


  if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
  } else {
  echo("<p>Message successfully sent!</p>");
  }
*/


  add_action('phpmailer_init','send_smtp_email');
  function send_smtp_email( $phpmailer )
  {
      // Define que estamos enviando por SMTP
      $phpmailer->isSMTP();
   
      // La dirección del HOST del servidor de correo SMTP p.e. smtp.midominio.com
      $phpmailer->Host = "your server smtp address";
   
      // Uso autenticación por SMTP (true|false)
      $phpmailer->SMTPAuth = true;
   
      // Puerto SMTP - Suele ser el 25, 465 o 587
      $phpmailer->Port = "587";
   
      // Usuario de la cuenta de correo
      $phpmailer->Username = "user name";
   
      // Contraseña para la autenticación SMTP
      $phpmailer->Password = "password";
   
      // El tipo de encriptación que usamos al conectar - ssl (deprecated) o tls
      $phpmailer->SMTPSecure = "tls";
   
      $phpmailer->From = "tucuenta@decorreo.com";
      $phpmailer->FromName = "Tu nombre";
  }

?>
