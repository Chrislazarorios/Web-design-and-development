<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Primer Pagina</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		if (isset($_SESSION["usuario"]) and $_SESSION["usuario"] != " ") {
			echo "Usted se ha identificado como : " .$_SESSION["usuario"];
			
			//Todavia NO cerramos la llave del if

	?>		
			<h1>PRIMER PAGINA</h1>
			<h2>PEGAR aqui TODA LA "PAGINA SECRETA"</h2>

			<div id="menu">
				<ul>
					<li><a href="index.php">Home Page</a></li>
					<li><a href="primera.php">Primer pagina privada</a></li>
					<li><a href="segunda.php">Segunda pagina privada</a></li>
					<li><a href="tercera.php">Tercer pagina privada</a></li>
				</ul>
			</div>

			<?php  
		
		} //Recien AHORA cerramos la llave del if
		else {

			?>

			<p>La sesión no está abierta, por favor utilice el <a href="index.php">formulario de acceso</a></p>

		<?php

		} //Cerramos la llave del else
		
		?>
</body>
</html>