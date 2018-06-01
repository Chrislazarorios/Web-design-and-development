<!DOCTYPE html>
<html>

<head>
	<!-- TITLE -->
	<title>CURSO PHP & MySQL</title>
	<!-- META -->
	<!-- <meta http-equiv="refresh" content="20" /> -->
	
	<script src="../../JAVASCRIPT\jquery-1.9.1.min.js"></script>

	<link href="../../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">

	<meta charset="utf-8" />

	<style type="text/css">	
	

	.fila	
	{
		display:flex;
		flex-direction: row; 
		align-items: center;
    	justify-content: center;
	}

	.columna
	{
		display:flex;
		flex-direction: column; 
		align-items: left;
    	justify-content: left;
    	width: 20%;
	}	

	.espacioRow
	{
		height: 20px;
	}


	.columnaMenu
	{
		display:flex;
		flex-direction: column; 
		align-items: center;
    	justify-content: center;
    	width: 20%;
    	color: black;
		font-size: 200%;
		text-align: center;				
	}

	article
	{
		border: 20px;
		border-color: black;
	}

	img
	{
		width: 15%;

	}	

	.titulo
	{
		color: blue;
		text-align: center;
		font-size: 200%;
	}

	.nombre
	{
		color: black;
		font-size: 200%;
		text-align: left;
		align-items: left;
		background-color: #E60A0A;
	}

	.descripcion
	{
		font-size: 150%;
	}
	
	h1
	{
		font-size: 350%;
		color: black;
	}

	.recuadro
	{
		border-style: solid;
    	border-width: 2px;
    	width: 80%;
    	background-color: #A2A2A2;
	}

	</style>

</head>
<body>


	<section class="fila">			

		<h1>Noticias.com</h1>

    </section>

    <section class="fila">
		<div class="espacioRow"></div>
	</section>	
	
    <section class="fila">

		<?php 
			
			getHTMLTodosLasCategorias();

		 ?>

	</section>
	

	<section class="fila">
		<div class="espacioRow"></div>
	</section>	

	<?php 

		//getHTMLTodosLosArticulos();
		getHTMLTodosLosArticulosPorSeccion('Seccion B');

	 ?>


</body>
</html>

<?php


function DB_getNoticias()
{
	$notas = array( 

	array('1','Noticia 1','Descripcion Noticia 1','t1.png','Seccion A'),
	array('2','Noticia 2','Descripcion Noticia 2','t1.png','Seccion A'),
	array('3','Noticia 3','Descripcion Noticia 3','t1.png','Seccion B'),
	array('4','Noticia 4','Descripcion Noticia 4','t1.png','Seccion B'),
	array('5','Noticia 5','Descripcion Noticia 5','t1.png','Seccion C'),
	array('6','Noticia 6','Descripcion Noticia 6','t1.png','Seccion C'),
	array('7','Noticia 7','Descripcion Noticia 7','t1.png','Seccion C')

	);

	return $notas;
}



function getHTMLTodosLosArticulosPorSeccion($seccionBuscada)
{
	$articulos = DB_getNoticias();

	$html = "";

	for ($i=0; $i < count($articulos); $i++) 
	{ 
		$nombre = $articulos[$i][1];
		$descripcion = $articulos[$i][2];
		$imagen = $articulos[$i][3];

		$seccion = $articulos[$i][4];

		if($seccionBuscada == $seccion)
		{
			$html .= getHTMLArticulo($nombre,$descripcion,$imagen);
		}	

	}

	echo $html;
}


function getHTMLTodosLosArticulos()
{
	$articulos = DB_getNoticias();

	$html = "";

	for ($i=0; $i < count($articulos); $i++) 
	{ 
		$nombre = $articulos[$i][1];
		$descripcion = $articulos[$i][2];
		$imagen = $articulos[$i][3];

		$html .= getHTMLArticulo($nombre,$descripcion,$imagen);

	}

	echo $html;
}

function getHTMLArticulo($nombre,$descripcion,$imagen)
{
	$html = '			<section class="fila">';
	$html = $html . '		<section class="column recuadro">';
	$html = $html .  '			<article class="fila nombre">';
	$html = $html .  '				<h2>'.$nombre.'</h2>';
	$html = $html .  '  		</article>';
	$html = $html .  '			<article class="fila">';		
	$html = $html .  '  			<img class="imagen" src="'.$imagen.'"> ';
	$html = $html .  '   			<p class="descripcion">'.$descripcion.'</p>';
	$html = $html .  '  		</article>';
	$html = $html .  '		</section>';
	$html = $html .  '	</section>';

	$html = $html .  '	<section class="fila">';
	$html = $html .  '		<div class="espacioRow"></div>';
	$html = $html .  '	</section>';	

	return $html;
}



function DB_getSecciones()
{
	$secciones = array( 

	array('1','POLITICA'),
	array('2','ECONOMIA'),
	array('3','POLICIALES'),
	array('4','ESPECTACULO')

	);

	return $secciones;
}

function getHTMLTodosLasCategorias()
{
	$secciones = DB_getSecciones();

	$html = "";

	for ($i=0; $i < count($secciones); $i++) 
	{ 

		$id = $secciones[$i][0];	
		$nombre = $secciones[$i][1];
		$html .= getHTMLCategoria($id,$nombre);

	}

	echo $html;
}


function getHTMLCategoria($id,$nombre)
{
	$html = '';
	$html = $html . '<input id="'.$id.'" type="button" class="columnaMenu" value="'.$nombre.'">';
	return $html;
}



?>










