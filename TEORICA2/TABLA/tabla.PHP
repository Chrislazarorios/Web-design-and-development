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
	          <tr>
	            <th>#</th>
	            <th>First Name</th>
	            <th>Last Name</th>
	            <th>Username</th>
	          </tr>
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

function getHTMLfilas()
{
	$listaUsers =  DB_getUsuarios();

	$htmlRegistro = '';

	for ($i=0; $i < count($listaUsers); $i++) 
	{ 
		$id = $listaUsers[$i][0];

		$fila = getfila($id,$listaUsers[$i][1],$listaUsers[$i][2],$listaUsers[$i][3]);
		
		$htmlRegistro = $htmlRegistro.$fila;
	}
	
	echo $htmlRegistro;
}


function getfila($id, $nombre,$apellido,$alias)
{
	$fila ='<tr>
            	<td>'.$id.'</td>
            	<td>'.$nombre.'</td>
            	<td>'.$apellido.'</td>
            	<td>'.$alias.'</td>
          	</tr>';

     return   $fila;   
}


function DB_getUsuarios()
{
	$users = array( 

	array('1','Ricardo','Durando','rjd'),
	array('2','Juan','juarez','jj'),
	array('3','Pedro','perez','pj'),
	array('4','Pablo','lopez','pl'),
	array('5','Pablo','lopez','pl')
	
	);

	return $users;
}


?>







