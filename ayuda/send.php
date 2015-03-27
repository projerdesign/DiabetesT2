<?php header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset=utf-8');
// You can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje_user = $_POST['mensaje'];
$sender = $_POST['sender'];
$enviado=false;

if(!empty($nombre) && !empty($email) && !empty($mensaje_user) && !empty($sender)) {
		
		//PROCEDEMOS A ENVIAR EL MAIL
		$para = $sender;		
		$titulo = 'El usuario '.$nombre.' se ha contactado contigo.';	
		// Cuerpo o mensaje
			$mensaje = '
			<!doctype html>
				<html style="height:100%;">
				<head>
				<meta charset="utf-8">
				<title>UDLAP</title>
				<meta name="viewport" content="width=device-width, user-scalable=no">
				</head>
				
				<body style="padding:0; margin:0; font-family: Arial,Helvetica,sans-serif; height:100%; overflow: hidden;">
					<table style="width:100%; background-color:#FFF; border-spacing:0">
					  <thead style="border-spacing:0">
						<tr>
						  <th style="background-color:#F57B20;"><img style="width:120px; float:left; margin:0 0 0 20px; display: block; padding:10px 0;" src="http://projerdesign.com/clientes/dm/img/logo.png" alt="logo"/>
						</tr>
					  </thead>
					  </table>
					  <table style="padding:10px 20px 30px 20px; text-align:center; width:100%">
					  <thead>
						<tr>
							<th>
							<h1>Hola el usuario '.$nombre.'</h1>
							<p style="font-weight: normal;">Te ha enviado el siguiente mensaje:</p>
						  
						  <br><br>
						  <p style="text-align:left;">'.$mensaje_user.'</p>
						  <hr style="border:solid 2px #062600">
						  <p style="text-align:left; font-size:20px; font-weight: normal;" >
							  <strong>Datos del usuario:</strong><br><br>
							  Nombre: <strong>'.$nombre.'</strong><br><br>
							  Email: <strong><a style="color:#062600" href="mailto:"'.$email.'">'.$email.'</a></strong><br><br>
						  </p>
						  <br><br>
							</th>
						</tr>
					  </thead>
					  </table>
					</body>
			</html>
			';
			//SEND USER
			//ENVIAMOS MAIL AL USUARIO
		//PROCEDEMOS A ENVIAR EL MAIL
		$usuario = $email;		
		$titulo_usuario = 'Hemos recibido con éxito tu mensaje';	
		// Cuerpo o mensaje
			$mensaje_usuario = '
			<!doctype html>
				<html style="height:100%;">
				<head>
				<meta charset="utf-8">
				<title>UDLAP</title>
				<meta name="viewport" content="width=device-width, user-scalable=no">
				</head>
				
				<body style="padding:0; margin:0; font-family: Arial,Helvetica,sans-serif; height:100%; overflow: hidden;">
					<table style="width:100%; background-color:#FFF; border-spacing:0">
					  <thead style="border-spacing:0">
						<tr>
						  <th style="background-color:#F57B20;"><img style="width:120px; float:left; margin:0 0 0 20px; display: block; padding:10px 0;" src="http://projerdesign.com/clientes/dm/img/logo.png" alt="logo"/>
						</tr>
					  </thead>
					  </table>
					  <table style="padding:10px 20px 30px 20px; text-align:center; width:100%">
					  <thead>
						<tr>
							<th>
							<h1>Hola '.$nombre.'</h1>
							<p style="font-weight: normal;">Hemos recibido con éxito el siguiente mensaje:</p>
						  
						  <br><br>
						  <p style="text-align:left;">'.$mensaje_user.'</p>
						  <hr style="border:solid 2px #062600">
						  <p style="text-align:left; font-size:16px; font-weight: normal;" >
							  <strong>Datos del usuario:</strong><br><br>
							  Nombre: <strong>'.$nombre.'</strong><br><br>
							  Email: <strong><a style="color:#062600" href="mailto:"'.$email.'">'.$email.'</a></strong><br><br>
						  </p>
						  <br><br>
							</th>
						</tr>
					  </thead>
					  </table>
					</body>
			</html>
			';
			//SEND USER			
			// Cabecera que especifica que es un HMTL
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			// Cabeceras adicionales
			$cabeceras .= 'From: '.$nombre.' <'.$email.'>' . "\r\n";
			// enviamos el correo!
			mail($para, $titulo, $mensaje, $cabeceras);	
			
			// Cabecera que especifica que es un HMTL
			$cabeceras_usuario  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras_usuario .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			// Cabeceras adicionales
			$cabeceras_usuario .= 'From: '.$sender.' <'.$sender.'>' . "\r\n";
			// enviamos el correo!
			mail($usuario, $titulo_usuario, $mensaje_usuario, $cabeceras_usuario);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			$enviado=true;
		
	}else{
		echo $aviso .= "Error: Faltan Campos por completar";
		$enviado=false;
	}
?>