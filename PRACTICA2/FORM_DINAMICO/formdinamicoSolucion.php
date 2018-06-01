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

	.elemento
	{
		width: 50%;
    	color: black;
		font-size: 120%;
		text-align: center;
		display: block;
	}

	.columnaMenu
	{
		display:flex;
		flex-direction: column; 
		align-items: center;
    	justify-content: center;
    					
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

	
		
		<?php cargarFormulario(); ?>



</body>
</html>

<?php


	
function DB_getInputsDelFormulario()
{
	$partidos = array( 

	array("tipo"=>'text',"value"=>'Nombre'),
	array("tipo"=>'text',"value"=>'DNI'),		
	array("tipo"=>'text',"value"=>'Edad'),
	array("tipo"=>'text',"value"=>'Direccion'),
	array("tipo"=>'radio',"value"=>'Sexo-Masculino'),	
	array("tipo"=>'radio',"value"=>'Sexo-Femenino'),	
	array("tipo"=>'button',"value"=>'Aceptar'),
	array("tipo"=>'button',"value"=>'Cancelar')

	);

	return $partidos;
}

function cargarFormulario()
{
	$inputs = DB_getInputsDelFormulario();

	for ($i=0; $i < count($inputs); $i++) 
	{ 
		$tipoInput = $inputs[$i]['tipo'];
		$valorInput = $inputs[$i]['value'];

		echo '<div class="espacioRow"></div>';

		echo '<section class="fila">';

		if($tipoInput == 'button')	
		{
			echo '<button class="elemento" type="button">'.$valorInput.'</button>';
		}
		else if($tipoInput == 'text')	
		{
			echo '<input class="elemento" type="text" name="fname" value="'.$valorInput.'">';
		}
		else if($tipoInput == 'radio')	
		{
			echo '<input class="elemento" type="radio" name="fname" value="'.$valorInput.'">'.$valorInput.'</input>';
		}

		echo '</section>';
	}


}



?>










