<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zona de acceso restringido</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

		/* 1. Si acaban de enviar el formulario de acceso, leemos de $_POST los datos : */	
		if(isset($_POST["usuario"]) and isset($_POST["clave"])){

			/* 2. En ese caso, verificamos que no esten vacios : */
			if($_POST["usuario"] == "" or $_POST["clave"] == ""){
				echo "Por favor, completar usuario y clave";
			}

			/* 3. Si no estaban vacios, comparamos lo ingresado con el usuario y clave definidos por nosotros, en este caso "pepe" y "123456".
					Aqui modificaremos esos datos y los cambiaremos por el usuario y clave que nos gusten. */
			elseif ($_POST["usuario"] == "pepe" and $_POST["clave"] == "123456") {
			  	
				/* 4. Si eran correctos los datos, los colocamos en variables de sesion */
				$_SESSION["usuario"] = $_POST["usuario"];
				$_SESSION["clave"] = $_POST["clave"];
				echo "<h3>Usted se ha identificado como : </h3>" .$_SESSION["usuario"];

			  }  
			  /* Aqui colocamos un else con el mensaje si los datos no eran correctos */
			  elseif ($_POST["usuario"] != "pepe" or $_POST["clave"] != "123456"){
			  	echo "Usuario o clave incorrecta";
			  }
		}

	?>

	<span>
		<h2>Usuario : pepe</h2>
		<h2>Contraseña : 123456</h2>
	</span>
	<div>
		<ul>
			<li><a href="primera.php">Primera pagina privada</a></li>
			<li><a href="segunda.php">Segunda pagina privada</a></li>
			<li><a href="tercera.php">Tercera pagina privada</a></li>
			<li><a href="cerrarSesion.php">Cerrar Sesion</a></li>
		</ul>
	</div>

	<div>
		<form name="acceso" method="post" action="index.php">
			<fieldset>
				<legend>Ingrese sus datos de acceso:</legend>
				<label for="usuario">Su usuario:</label>
				<input type="text" id="usuario" name="usuario"><br>
				<label for="clave">Su clave:</label>
				<input type="text" id="clave" name="clave"><br>
				<input type="submit" id="ingresar" name="ingresar" value="Ingresar">
			</fieldset>
		</form>
	</div>

</body>
</html>