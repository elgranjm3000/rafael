<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$email = $_POST["email"];
$clave = $_POST["clave"];
$cadena = rand(); 
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$base = "http://" . $host . $uri . "/validar.php";

$_SESSION['p_Codigo_Validacion']  = substr($cadena,-4); //Esto devuelve "ndo"
$_SESSION['email']  = $email; //Esto devuelve "ndo"
$_SESSION['clave'] = $clave;

    //Server settings
	$mail->isSMTP(); 
	$mail->Host = 'smtp.gmail.com';             // Especificar el servidor de correo a utilizar 
	$mail->Host = 'tls://smtp.gmail.com:587';
	$mail->SMTPOptions = array(
   		'ssl' => array(
     		'verify_peer' => false,
     		'verify_peer_name' => false,
     		'allow_self_signed' => true
    	)
	);
    $mail->SMTPAuth   = true;           // Enable SMTP 

	
	$mail->Username = 'computosoftware@gmail.com';
	$mail->Password = 'elpran5000';                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('computosoftware@gmail.com', 'Registro');
    $mail->addAddress($email);     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Verificacion de correo';
    $mail->Body    = 'Su codigo de validacion es el siguiente <b>'.$_SESSION['p_Codigo_Validacion'].'</b> <br/> <a href='.$base.'>Ingrese aqui</a>';   

    if(!$mail->send()) {
		/*echo '<p style="color:red">No se pudo enviar el mensaje..';
		echo 'Error de correo: ' . $mail->ErrorInfo;
		echo "</p>";*/
		echo "false";
	} else {
		//echo '<p style="color:green">Tu mensaje ha sido enviado!</p>';
		echo "true";
	}


?>