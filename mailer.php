<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

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
    $mail->addAddress('elgranjm3000@gmail.com');     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Verificacion de correo';
    $mail->Body    = 'Su contraseña es la siguiente <b>'.md5(12345).'</b>';   

    if(!$mail->send()) {
		echo '<p style="color:red">No se pudo enviar el mensaje..';
		echo 'Error de correo: ' . $mail->ErrorInfo;
		echo "</p>";
	} else {
		echo '<p style="color:green">Tu mensaje ha sido enviado!</p>';
	}

