<?php 
	if(isset($_POST["eleccion"])) {
		/* si el dato esta ubicado ahi, es que acaban de usar el formulario y enviaron un estilo elegido */
		
		$hoja = $_POST["eleccion"];
		/* Entonces, dejamos preparada una variable para usarla dentro de< link> */

		setcookie("elegido",$hoja,time()+(60*60*24*30));

		/* Y guardamos una variable a la que llamamos "elegido" dentro de una cookie; su valor lo tomamos de $_POST["eleccion"](y definimos su vencimiento para dentro de 30 dias) */
	} 
	else {
		/* Si no encontramos en $_POST el dato, vemos si ya estava en una cookie desde una visita anterior */

		if(isset($_COOKIE["elegido"])) {
			/* Si esta, colocamos dentro de la misma variable $hoja lo que el usuario habia elegido */
		
			$hoja = $_COOKIE["elegido"];
		}
		else {
			/* Si tampoco estaba ahi, mostraremos una hoja con estilos por defecto */
			$hoja = "hoja-por-defecto";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Usando cookies para elegir hoja de estilos</title>
	<meta charset="utf-8">
	<?php 
	/* Sea cual sea el camino tomado anteriormente, la variable $hoja debe tener algun valor, asi que lo leemos y lo usamos para que se cargue la respectiva hoja de estilos */

	if(isset($hoja)) {
		echo '<link rel="stylesheet" type="text/css" href="css/'.$hoja.'.css"/>';
	}
	?>
</head>
<body>

	<h1>Usando cookies para elegir hoja de estilos</h1>
	<h2>Elijamos un diseño!</h2>

	<form action="pagina.php" method="post">
	<fieldset>


		<p style="font-style: bold">Cambiemos el estilo a nuestro gusto: </p>

		<select name="eleccion">
			<option value="minimalista">Minimalista</option>
			<option value="antigua">Antigua</option>
			<option value="moderna">Moderna</option>
			<option value="zoom">Fuentes grandes</option>
			<option value="dos">Dos columnas</form></option>
			<option value="tres">Tres columnas</option>
		</select>

		<input type="submit" name="Elegir">

	</fieldset>	
	</form>

	<section class="container">
		<article class="item two three">
			<div class="left">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam neque quia soluta quaerat placeat aperiam libero laboriosam sed, voluptates officia, in accusantium praesentium, illum facilis eius expedita possimus pariatur veritatis.
			</div>
			<div class="right">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam neque quia soluta quaerat placeat aperiam libero laboriosam sed, voluptates officia, in accusantium praesentium, illum facilis eius expedita possimus pariatur veritatis.
			</div>
			<div class="third" style="clear: both;">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam neque quia soluta quaerat placeat aperiam libero laboriosam sed, voluptates officia, in accusantium praesentium, illum facilis eius expedita possimus pariatur veritatis.
			</div>
		</article>
	</section>
</body>
</html>