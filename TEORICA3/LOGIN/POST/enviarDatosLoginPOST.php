
<?php 
	
	include_once '../../DB/DB_funciones.php';


	$user = $_POST["user"]; 
	$pass = $_POST["pass"];

	if(DB_validarUsuario($user,$pass))
	{
		header('Location: ../resultadoOK.php');
	}
	else
	{
		header('Location: ../resultadoERROR.php');	
	}


?>  