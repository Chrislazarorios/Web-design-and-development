<!DOCTYPE html>
<html>

<head>
	<!-- TITLE -->
	<title>CURSO PHP & MySQL</title>
	<!-- META -->
	<!-- <meta http-equiv="refresh" content="20" /> -->
	
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

	.espacioColumn
	{
		width: 1%;
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


	</style>

</head>
<body>

	<section class="fila">			

		<h1>Data Entry</h1>

    </section>

	<section class="fila">
		
		

    </section>

	<section class="fila">
		<div class="espacioRow"></div>
	</section>	



</body>
</html>

<?php


	
function DB_getInputsDelFormulario()
{
	$partidos = array( 

	array("tipo"=>'text',"value"=>'Nombre'),
	array("tipo"=>'text',"value"=>'DNI'),		
	array("tipo"=>'text',"value"=>'Edad'),	
	array("tipo"=>'button',"value"=>'Aceptar'),
	array("tipo"=>'button',"value"=>'Cancelar')

	);

	return $partidos;
}



?>










