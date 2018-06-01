<script src="../JAVASCRIPT\jquery-1.9.1.min.js"></script>
<script src="../JAVASCRIPT\FuncionesComunes.js"></script>

<link href="../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../CSS/estilo.css" rel="stylesheet">






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
	          		

	          		fila("1",'Mark','Otto','@mdo');

	          		fila('2','Ricardo','Durando','@rjd');
	          		fila('1','Mark','Otto','@mdo');
	          		
	          		fila('2','Ricardo','Durando','@rjd');
	          		fila('1','Mark','Otto','@mdo');
	          		
	          		fila('2','Ricardo','Durando','@rjd');
	          		fila('1','Mark','Otto','@mdo');
	          		
	          		fila('2','Ricardo','Durando','@rjd');
	          		fila('1','Mark','Otto','@mdo');
	          		
	          		fila('2','Ricardo','Durando','@rjd');
	          		fila('1','Mark','Otto','@mdo');
	          		
	          		
	          		

				?>
	          <tr>
	            <th scope="row">3</th>
	            <td>Larry</td>
	            <td>the Bird</td>
	            <td>@twitter</td>
	          </tr>
	        </tbody>
	      </table>

		</article>
		
		<article class = "espacioCuerpo" ></article>	

    </section>
	
</body>
</html>


<?php


function fila($id, $nombre,$apellido,$alias)
{
	
	
	echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$nombre.'</td>
            <td>'.$apellido.'</td>
            <td>'.$alias.'</td>
          </tr>';

}

?>








