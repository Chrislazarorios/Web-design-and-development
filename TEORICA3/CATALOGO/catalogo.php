<!DOCTYPE html>
<html>

<head>
	<link href="../../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">

	<?php
		//EJEMPLO 1
		//include 'funcionesCatalogo.php';

		//EJEMPLO 2
		include 'UI_funcionesCatalogo.php';
	?>

	<!-- TITLE -->
	<title>CURSO PHP</title>

	<!-- META -->
	<!-- <meta http-equiv="refresh" content="20" /> -->
	<meta charset="utf-8" />

	<!-- STYLE -->
			
<style type="text/css">
	

	body {
		font-family: Helvetica;
	}

	.fila	
	{
		display:flex;
		flex-direction: row; 
		align-items: center;
    	justify-content: center;	


	}

	.column	
	{
		display:flex;
		flex-direction: column; 
		/*align-items: center;
    	justify-content: center;*/

    	width: 15%;
	}

	.columnEspacio
	{
		width: 3%;	
	}

	.rowEspacio
	{
		height:3%;
	}

	.table
	{
		width: 75%;
		background-color: #FFFFFF;
	}

	.descripcionProducto
	{
		font-size: 120%;
		color: #00A9FF;
		display : 'none';
	}
	
	.precio
	{
		font-size: 150%;
		color: #FF0000;
	}

	.thumbnail
	{

	}

	body
	{
		 
	}

	.jumbotron
	{
		 background-color: #66FF66;
		 color: #000000;
	}

	.btn-primary 
	{
  		color: #00A9FF;
  		background-color: #303030;

  		background-image: linear-gradient(to bottom,#303030 0,#303030 100%);
	}

	img{

		width: 100%;
	}

</style>		
	

</head>
<body>	
	<section class = "fila">
		<h1 class="buscador">Productos</h1>
	</section>
	
	<section class = "rowEspacio"></section>	

	<section class = "fila">
		<?php
			
		 	UI_getHTML();

		?>		  			  	
	</section>  

	<section class = "rowEspacio"> </section> 	

	<section class = "fila">
		<p><a class="btn btn-primary btn-lg" onclick="cargarProductosAnteriores()" role="button">Anterior</a></p>
		<section class = "columnEspacio"></section>
		<p><a class="btn btn-primary btn-lg" onclick="cargarProductosSiguientes()" role="button">Siguiente</a></p>
	</section>

	<section class = "rowEspacio"></section>	
	
</body>
</html>

