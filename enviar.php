<?php

	$destino = "victor.saul.ca@gmail.com";
	$edad = $_POST["edad"];
	$caidaCabello = $_POST["caida"];
	$correo = $_POST["correo"];
	$asunto="Resultados de tu test colágeno";

	$contenido = "Tu caso ".$caidaCabello." presenta caida de cabello \nTienes actualmente ".$edad." años de edad./nEquipo colágeno naara";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require  'PHPMailer/Exception.php';
require  'PHPMailer/PHPMailer.php';
require  'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try{
	$mail -> SMTPDebug= 0;
	$mail -> isSMTP();
	$mail -> Host = 'smtp.gmail.com';

	$mail -> SMTPAuth =true;
	$mail -> Username ='victor.saul.ca@gmail.com';
	$mail -> Password = 'victorca112013';
	$mail -> SMTPSecure = 'tls';
	$mail -> Port = 587;

	$mail -> setFrom('victor.castillo@aiesec.net','Victorsito');
	$mail -> addAddress('vcastilloa@uni.pe');
	

	$mail -> isHTML(true);
	$mail -> Subject = 'Hola estoy enviando correo';
	$mail -> Body = 'Segundo correo de prueba';
	$mail -> send();


	echo 'El mensaje se envio correctamente';
	header("location:gracias.html");
} catch(Exception $e){
	echo 'hubo un error al enviar el mensaje: ', $mail -> ErrorInfo;
}
?>