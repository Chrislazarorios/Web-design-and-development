<?php

//EJEMPLO 1
//include 'DB_funcionesCatalogo.php';

//EJEMPLO 2

include '..\DB\DB_funciones.php';

function UI_getHTML()
{
	$productos = DB_get_productos();

	$html = '';

	for ($indice=0; $indice < count($productos); $indice++) 
	{ 
		$descripcion = $productos[$indice][0];
		$precio =  $productos[$indice][1];

		$html = $html.'<section class = "column" id="p1">						
			    <a href="#" class="thumbnail">
			      <img id="img1" src="t1.png" alt="...">
			    </a>		  	
			  	<div class = "descripcionProducto" id="dp1">'.$descripcion.'</div>
			  	<div class = "precio" id="pr1">'.$precio.'</div>
		  	</section> ';
	}

	echo $html;

	

}

function UI_getHTMLConFiltro($precioBuscado,$marcaBuscado)
{
	$productos = DB_get_productos();

	$html = '';

	for ($indice=0; $indice < count($productos); $indice++) 
	{ 
		$descripcion = $productos[$indice][0];
		$precio =  $productos[$indice][1];
		$marca =  $productos[$indice][2];

		if($precio == $precioBuscado and $marca == $marcaBuscado or ($precioBuscado == '' and $marcaBuscado == ''  ))
		{

			$html = $html.'<section class = "column" id="p1">						
				    <a href="#" class="thumbnail">
				      <img id="img1" src="t1.png" alt="...">
				    </a>		  	
				  	<div class = "descripcionProducto" id="dp1">'.$descripcion.'</div>
				  	<div class = "precio" id="pr1">'.$precio.'</div>
			  	</section> ';
	  	}
	}

	echo $html;	

}



?>