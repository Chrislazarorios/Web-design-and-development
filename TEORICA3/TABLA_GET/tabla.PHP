<link href="../../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../../CSS/estilo.css" rel="stylesheet">


<?php 

	include 'UI_funcionesTabla.php';

?>



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
	          <tr>
	            <th>#</th>
	            <th>First Name</th>
	            <th>Last Name</th>
	            <th>Username</th>
	          </tr>
	        </thead>
	        <tbody>
				
				<?php

					$indi = cargarFilas();
					
				?>
	          
	        </tbody>
	      </table>

		</article>
		
		<article class = "espacioCuerpo" ></article>	

    </section>

    <section>			

		<article class = "espacioCuerpo" ></article>

		<article class = "cuerpo">

			<form method="get" action="tabla.php"> 

				<?php 

					echo '<input type="hidden" name="indice" value="'.$indi.'">';

				 ?>	


				<input type="submit" value="Next"> 


			</form>	
		 </article>

		<article class = "espacioCuerpo" ></article>

	</section>

	<section>			

		<article class = "espacioCuerpo" ></article>

		<article class = "cuerpo">
			<form method="get" action="tabla.php"> 

				<input type="hidden" name="funcion" value="agregar"> 


				<input type="input" name="val1" placeholder="Id"> 
				<input type="input" name="val2" placeholder="nombre"> 
				<input type="input" name="val3" placeholder="apellido">
				<input type="input" name="val4" placeholder="alias"> 

				<input type="submit" value="Agregar Usuario">


			</form>	
		 </article>

		<article class = "espacioCuerpo" ></article>

	</section>  


	
    
	
</body>
</html>


<?php 


function cargarFilas()
{
	$funcion = 'next';
	$indice = 0;

	if(!empty($_GET))
	{
		if(!empty($_GET["funcion"]))
		{
			$funcion = $_GET["funcion"];
		}
	}
	
	if($funcion == 'next')
	{
		if(!empty($_GET))
		{	
			if(empty($_GET["indice"]))
			{				
				$indice = 1;
				$indice +=	1;
			}  	
			else
			{
				$indice = $_GET["indice"];
				$indice +=	1;
			}				
		}	
		else
		{
			$indice = 1;	
		} 
		   
		if($indice == getCount())
		{
			$indice = 1;
		}  		

  		UI_getHTMLfilas($indice);
  	}
  	else if ($funcion == 'agregar')
  	{
  		$val1 = $_GET["val1"];
  		$val2 = $_GET["val2"];
  		$val3 = $_GET["val3"];
  		$val4 = $_GET["val4"];

  		UI_agregarUsuario($val1,$val2,$val3,$val4);
  	}

  	return $indice;

}



 ?>








