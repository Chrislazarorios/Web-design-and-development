<!DOCTYPE html>
<html>

<head>
	<!-- TITLE -->
	<title>CURSO PHP & MySQL</title>
	<!-- META -->
	<!-- <meta http-equiv="refresh" content="20" /> -->
	<meta charset="utf-8" />
	<link href="../../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="../../CSS/estilo.css" rel="stylesheet">


	<?php 
		// EJEMPLO 1
		
		//include 'funcionesTabla.php';

		

		// EJEMPLO 2
		include 'UI_funcionesTabla.php';

	?>


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
	          		
	          		UI_getHTMLfilas();
				?>
	          
	        </tbody>
	      </table>

		</article>
		
		<article class = "espacioCuerpo" ></article>	

    </section>

    
	
</body>
</html>











