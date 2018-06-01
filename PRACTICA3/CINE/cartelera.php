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
		width: 100%;
		color: white;
		background-color: grey;
	}

	article
	{
		border: 20px;
		border-color: black;
	}

	img
	{
		width: 100px;

		height: 100px;

	}

	.descripcion
	{
		color: red;
		font-size: 200%;
		text-align: center;
	}

	.estrellas
	{
		color: red;
		font-size: 200%;
		text-align: left;
	}

	.genero
	{
		color: green;
		font-size: 200%;
		text-align: left;
	}

	.nombre
	{
		color: blue;
		text-align: center;
	}
	
	h1
	{
		font-size: 350%;
		color: yellow;
	}

	body{
		background-color: black;
	}


	</style>

</head>
<body>

	<section id="movies" class="fila">			

		<h1>Categorias</h1>

    </section>

    	
	<section id="movies" class="fila">		
		
		<?php
			getHTMLAllCategories();
		?>

    </section>


	<section id="movies" class="fila">			

		<h1>Peliculas</h1>

    </section>

	<section id="movies" class="fila">			
		<?php	          
	      	getHTMLAllMovies();
		?>

    </section>

</body>
</html>

<?php




function getHTMLAllCategories()
{
	$categories =  DB_getCategorias();

	$htmlRegistro = '';

	for ($i=0; $i < count($categories); $i++) 
	{		
		$htmlRegistro = $htmlRegistro. getHTMLCategoria($categories[$i][0],$categories[$i][1],$categories[$i][2]);
	}

	echo $htmlRegistro;
}


function getHTMLAllMovies()
{
	$movies =  DB_getPeliculas();

	$htmlRegistro = '';

	for ($i=0; $i < count($movies); $i++) 
	{ 
		
		$htmlRegistro = $htmlRegistro. getHTMLMovie($movies[$i][0],$movies[$i][1],$movies[$i][2],$movies[$i][3],$movies[$i][4]);
	}
	
	echo $htmlRegistro;
}

function DB_getPeliculas()
{
	$users = array( 

	array('1','Mad Max','Accion','4','t1.png'),
	array('2','Volver al Futuro','Ciencia Ficcion','5','t1.png'),
	array('3','Terminator 3','Accion','5','t1.png'),
	array('4','Nemo','Infantil','3','t1.png'),	
	array('5','Apolo 13','Drama','2','t1.png')

	);

	return $users;
}


function DB_getCategorias()
{
	$users = array( 

	array('1','Suspenso','https://es.wikipedia.org/wiki/Comedia'),
	array('2','Terror','https://es.wikipedia.org/wiki/Terror'),
	array('3','Accion','https://es.wikipedia.org/wiki/Accion'),
	array('4','Drama','https://es.wikipedia.org/wiki/Drama')

	);

	return $users;
}


function getHTMLMovie($id,$nombre,$tipo,$estrellas,$imagen)
{
	$html = '';
	$html = $html . '<article id="'.$id.'" class = "columna">';
	$html = $html .  '<h2 class="nombre">'.$nombre.'</h2>';
	$html = $html .     '<img id="imagen" src="'.$imagen.'">';
	$html = $html .  '  <p class="genero">'.$tipo.'</p>';
	$html = $html .  '  <p class="estrellas">Estrellas: '.$estrellas.'</p>';
	$html = $html .  '    </article>';

	return $html;
}


function getHTMLCategoria($id,$nombre,$link)
{
	$html = '';
	$html = $html . '<a class="columnaMenu" href="'.$link.'">'.$nombre.'</a>';
	return $html;
}




?>










