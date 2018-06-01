<script src="../../JAVASCRIPT\jquery-1.9.1.min.js"></script>
<script src="../../JAVASCRIPT\FuncionesComunes.js"></script>

<link href="../../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../../CSS/estilo.css" rel="stylesheet">

<!DOCTYPE html>
<html>

<head>
	<!-- TITLE -->
	<title>CURSO PHP & MySQL</title>
	<!-- META -->
	<!-- <meta http-equiv="refresh" content="20" /> -->
	<meta charset="utf-8" />

</head>
<body>

	<section>			
		<article class = "espacio">
	</section>		

	<section>			

		<article class = "espacioCuerpo" ></article>

		<article class = "cuerpo">
			
		  <table class="table">
	        <thead>

	        <?php 
	          	getHeader(); 
	        ?>
	        </thead>
	        <tbody>
			<?php          		
      			getHTMLfilas();
			?>
	        </tbody>
	      </table>

		</article>
		
		<article class = "espacioCuerpo" ></article>	

    </section>
	
</body>
</html>

<?php

function getHeader()
{
	$listaUsers =  DB_getUsuarios();

	$fila ='<tr>';

	foreach ($listaUsers[0] as $key => $value) 
	{	 
		$fila .= '<th>'.$key.'</th>';
	}
            	
 	$fila .='</tr>';     	
 	echo   $fila;   
}

function getHTMLfilas()
{
	$listaUsers =  DB_getUsuarios();

	$htmlRegistro = '';

	for ($i=0; $i < count($listaUsers); $i++) 
	{ 
		
		$fila = getfila($listaUsers[$i]);
		
		$htmlRegistro = $htmlRegistro.$fila;
	}
	
	echo $htmlRegistro;
}


function getfila($arrayFila)
{
	$fila ='<tr>';

	foreach ($arrayFila as $key => $value) 
	{
		if($value == '')
		{
			$value = 'NO ESPECIFICA';
		}
		$fila .= '<td>'.$value.'</td>';
	}
            	
 	$fila .='</tr>';     	
 	return   $fila;   
}


function DB_getUsuarios()
{
	$users = array(

	array("id"=>'1',"nombre"=>'Ricardo',"apellido"=>'Durando',"alias"=>'rjd',"pass"=>'456',"edad"=>'20',"direccion"=>'JUJUY'),
	array("id"=>'2',"nombre"=>'Juan',"apellido"=>'juarez',"alias"=>'jj',"pass"=>'455',"edad"=>'24',"direccion"=>'SALTA'),
	array("id"=>'3',"nombre"=>'Pedro',"apellido"=>'perez',"alias"=>'pj',"pass"=>'45666',"edad"=>'28',"direccion"=>'JUJUY'),
	array("id"=>'4',"nombre"=>'Pablo',"apellido"=>'lopez',"alias"=>'pl',"pass"=>'457656',"edad"=>'17',"direccion"=>'JUJUY'),
	array("id"=>'5',"nombre"=>'Pablo',"apellido"=>'lopez',"alias"=>'pl',"pass"=>'455676',"edad"=>'22',"direccion"=>'')
	
	);


	return $users;
}


?>







