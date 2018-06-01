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

	.equipo
	{
		color : #0057B8;
		font-size: 150%;
	}


	.resultado
	{
		color : red;
		font-size: 125%;	
	}

	.estadio
	{

	}


	.recuadro
	{
		border-style: solid;
    	border-width: 2px;
    	width: 25%;
    	background-color: #00A952;
	}


	</style>

</head>
<body>

	<section class="fila">			

		<h1>Fixture Rugby 2015</h1>

    </section>

	<section class="fila">
		
		<?php 
			getHTMLPartidos();
		 ?>

    </section>

	<section class="fila">
		<div class="espacioRow"></div>
	</section>	



</body>
</html>

<?php


	
function DB_getPartidos()
{
	$partidos = array( 

	array('Partido 8','London','NEW ZELAND','ARGENTINA',26,16),
	array('Partido 13','Gloucester','ARGENTINA','GEORGIA',54,9),
	array('Partido 27','Leicester','ARGENTINA','TONGA',45,16)

	);

	return $partidos;
}


function getHTMLPartidos()
{
	$partidos = DB_getPartidos();

	$html = "";

	for ($i=0; $i < count($partidos); $i++) 
	{ 
		$partido = $partidos[$i][0];
		$lugar = $partidos[$i][1];
		$equipo1 = $partidos[$i][2];
		$equipo2 = $partidos[$i][3];
		$puntaje1 = $partidos[$i][4];
		$puntaje2 = $partidos[$i][5];

		$html .= getHTMLPartido($partido,$lugar,$equipo1,$equipo2,$puntaje1,$puntaje2);

	}

	echo $html;
}


function getHTMLPartido($partido,$lugar,$equipo1,$equipo2,$puntaje1,$puntaje2)
{
	$html = '			<div class="espacioColumn"></div>';
	$html = $html . '		<section class="column recuadro">';
	$html = $html .  '			<article class="fila">';
	$html = $html .  '			<h3 class="partido">'.$partido.'</h2>	';
	$html = $html .  '  		</article>';
	$html = $html .  '			<article class="fila">	';		
	$html = $html .  '  		<div class="equipo">'.$equipo1.'</div>  	 ';
	$html = $html .  '   		<div class="resultado">'.$puntaje1.' - '.$puntaje2.' </div>';
	$html = $html .  '  	<div class="equipo">'.$equipo2.'</div>	';
	$html = $html .  '		</article>';
	$html = $html .  '	<article class="fila">';
	$html = $html .  '	<h3 class="estadio">'.$lugar.'</h2>';
	$html = $html .  '		</article>';
	$html = $html .  '	</section>';	

	return $html;
	    
}

?>










