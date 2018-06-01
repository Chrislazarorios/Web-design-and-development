<script src="JAVASCRIPT\jquery-1.9.1.min.js"></script>

<link href="../../../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">

<!DOCTYPE html>
<html>

<head>
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

	img
	{
		width: 99%;
	}

	body
	{
		 background-color: #000000;
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

</style>		
	

</head>
<body>


	
	<section class = "rowEspacio">

	<section class = "fila">
		<p><a class="btn btn-primary btn-lg" onclick="goToHome()" role="button">Pagina Principal</a></p>
	</section>

	<section class = "rowEspacio"></section>	

	<section class = "fila">

		
		<?php 

			getHTMLProductos();			

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

<script type="text/javascript">


	function comprar(codigo)
	{
		alert(codigo);
	}

</script>





<?php  



function getHTMLProductos()
{
	$datos = DB_getProductos();


	for ($i=0; $i < count($datos); $i++) 
	{ 
		$id = $datos[$i]['id'];
		$nombre = $datos[$i]['nombre'];
		$precio = $datos[$i]['precio'];
		$imagen = $datos[$i]['imagen'];

		getHTMLProducto($id,$nombre,$precio,$imagen);
	}



}


function getHTMLProducto($id,$nombre,$precio,$imagen)
{
	$html = '<section class = "column">						
			<a href="#" class="thumbnail">
				<img src="'.$imagen.'" alt="...">
			</a>		  	
			<div class = "descripcionProducto">'.$nombre.'</div>
			<div class = "precio">'.$precio.'</div>
			<input type="button" onclick="comprar('.$id.')" value="COMPRAR"></input>
		</section>
	';

	echo $html;

}




function DB_getProductos()
{


	$datos = array(

		array("id"=>"1000" ,"nombre"=>"Samsung S4","precio"=>"$5600","imagen"=>"t1.png"),

		array("id"=>"1001" ,"nombre"=>"Samsung S5","precio"=>"$7600","imagen"=>"t1.png"),

		array("id"=>"1002" ,"nombre"=>"Samsung S6","precio"=>"$9600","imagen"=>"t1.png"),

		array("id"=>"1003" ,"nombre"=>"Samsung S7","precio"=>"$19600","imagen"=>"t1.png")


	);

	return $datos;
}








?>