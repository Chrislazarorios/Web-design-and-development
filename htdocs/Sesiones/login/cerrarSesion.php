<?php
	// 1.Retomamos la sesion 
	session_start();

	// 2.Eliminamos las variables de sesion y sus valores
	$_SESSION = array();

	// 3.Eliminamos la cookie del usuario que identificaba a esa sesion, verificando "si existia"
	if(ini_get("session.use_cookies") == true){
		$parametros = session_get_cookie_params();
		setcookie(session_name(),'', time() -99999, $parametros["path"], $parametros["domain"], $parametros["secure"], $parametros["httponly"]);
	}

	// 4.Eliminamos el archivo de sesion del servidor
	session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sesion Cerrada</title>
</head>
<body>
	<h1>Sesion Cerrada</h1>

	<a href="index.php">Home Page</a>
</body>
</html>