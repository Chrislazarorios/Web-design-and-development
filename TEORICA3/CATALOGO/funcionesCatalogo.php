<?php

function UI_getHTML()
{
	$productos = DB_get_productos();

	$html = '';

	for ($indice=0; $indice < count($productos); $indice++) 
	{ 
		$descripcion = $productos[$indice][0];

		$html = $html.'<section class = "column" id="p1">						
			    <a href="#" class="thumbnail">
			      <img id="img1" src="t1.png" alt="...">
			    </a>		  	
			  	<div class = "descripcionProducto" id="dp1">'.$descripcion.'</div>
			  	<div class = "precio" id="pr1">$2000</div>
		  	</section> ';
	}

	echo $html;
}

function DB_get_productos()
{
	$productos = array( 

	array('Samsung S3 Mini', '$6800'),
	array('LG G2 ', '$5800'),
	array('Moto G ', '$5800'),
	array('Iphone 4s', '$5800')

						);

	return $productos;
}

?>