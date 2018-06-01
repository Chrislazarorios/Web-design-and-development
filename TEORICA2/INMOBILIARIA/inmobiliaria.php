<html>
<head>
	<title>VENTA DE CASAS</title>
</head>

<style type="text/css">

.titulo
{
	color: red;
	font-size: 300%;

}

.precio
{
	color: green;
	font-size: 130%;

}

</style>

<body>

	<div style="display: none;">
		<h1>HTML DE EJEMPLO</h1>

		<div >
			<h2 class="titulo">CASA</h2>
			<p> <img src="casa.jpg"><br>
			<span class="precio">$1234567</span><br>
			<a class="consulta" href="http://google.com"> Consultar </a></p>
		</div>
	</div>



	<h1>HTML GENERADO POR PHP</h1>

	<form action="">
		<?php 
			cargarFiltroDeTiposDeInmueble();

		 ?>
		 <input type="submit" value="Filtrar">
	</form>


	<?php  

		cargarCasas();

	?>






</body>
</html>

<?php 

function cargarCasas()
{
	$datos = DB_getCasas();

	for ($i=0; $i < count($datos); $i++) 
	{ 
		getHTMLCasa($datos[$i][0],$datos[$i][1],$datos[$i][2]);
	}
}
	
function getHTMLCasa($titulo,$precio,$imagen)
{
	echo '<div>
 			<h2 class="titulo">'.$titulo.'</h2>
			<p> <img src="'.$imagen.'"><br>
 			<span class="precio">'.$precio.'</span><br>
 			<a class="consulta" href="consulta.php"> Consultar </a></p>
		</div>';
}

function cargarFiltroDeTiposDeInmueble()
{
	getHTMLTipoInmueble('Casa','0');
	getHTMLTipoInmueble('Depto','1');
	getHTMLTipoInmueble('Duplex','2');	
	getHTMLTipoInmueble('PH','3');

}

function getHTMLTipoInmueble($descripcion,$valor)
{
	echo '<input type="checkbox" name="tipoInmueble" value="'.$valor.'">'.$descripcion.'<br>';
}


function DB_getCasas()
{

	$data = array( 

	array('TIGRE','324567','Casa.jpg'),
	array('CABALLITO','234567','Casa2.jpg'),
	array('LANUS','97654','Casa.jpg')
	
	);

	return $data;
}


 ?>