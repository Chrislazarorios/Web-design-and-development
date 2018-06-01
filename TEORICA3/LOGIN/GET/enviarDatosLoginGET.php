
<?php 
	
	include_once '../../DB/DB_funciones.php';

	$user = $_GET["user"]; 
	$pass = $_GET["pass"];	

	$resul = DB_validarUsuario($user,$pass);

	if($resul )
	{
		header('Location: ../resultadoOK.php');
	}
	else
	{
		header('Location: ../resultadoERROR.php');
	}

	/*$resul = DB_validarUsuarios($user,$pass);

	//echo $resul;

	if($resul == 'OK')
	{
		header('Location: ../resultadoOK.php');
	}
	else if($resul == 'NO ENCONTRADO')
	{
		header('Location: ../resultadoERROR.php');	
	}
	else if ($resul == 'PASSWORD INCORRECTO') 
	{
		header('Location: ../resultadoPASSFORGET.php');	
	}*/

	//echo $resul;


?>  