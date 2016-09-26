<?php
	// if (isset($_POST["submit"])) {
	// 	$name = $_POST['input-name'];
	// 	$email = $_POST['input-email'];
	// 	$phone = $_POST['input-phone'];
	// 	$message = $_POST['input-message'];
	// 	$from = 'Info GUTE SRL'; 
	// 	$to = 'info@gutesrl.com'; 
	// 	$subject = 'Mesanje enviado desde la web';
	// 	$errName = 	$errEmail = $errMessage = '';
		
	// 	$body ="From: $name\n E-Mail: $email\n Telefono: $phone\n Message:\n $message";
	// 	// Check if name has been entered
	// 	if (!$_POST['input-name']) {
	// 		$errName = 'Ingrese su nombre';
	// 	}
		
	// 	// Check if email has been entered and is valid
	// 	if (!$_POST['input-email'] || !filter_var($_POST['input-email'], FILTER_VALIDATE_EMAIL)) {
	// 		$errEmail = 'Ingrese una direccion valida de correo';
	// 	}
		
	// 	//Check if message has been entered
	// 	if (!$_POST['input-message']) {
	// 		$errMessage = 'Por favor ingrese su consulta';
	// 	}
	// 	// If there are no errors, send the email
	// 	if (!$errName && !$errEmail && !$errMessage) {
	// 		if (mail ($to, $subject, $body, $from)) {
	// 			$result='<div class="alert alert-success">¡Gracias! Estarems en contacto a la brevedad</div>';
	// 		} else {
	// 			$result='<div class="alert alert-danger">Disculpe no es posible enviar el mensaje. Corrija los errores e intente nuevamente.</div>';
	// 		}
	// 	}
	// }
// captura de variables
$nombre=$_POST['input-name'];
$email=$_POST['input-email'];
$telefono=$_POST['input-phone'];
$consulta=$_POST['input-message'];

// cuerpo del email
$mensaje="
<strong>Nombre:</strong> $nombre<br/>
<strong>Correo:</strong> $email<br/>
<strong>Telefono:</strong> $email<br/>
<strong>Mensaje:</strong> $consulta<br/><br/>
";

// envío del email
mail("info@gutesrl.com", "Mesanje enviado desde la web", $mensaje, "From: $nombre <$email>\nReply-To:$email\nContent-Type: text/html; charset=iso-8859-1\n");
?>