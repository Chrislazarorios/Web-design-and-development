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

	        		getHTMLTablaDatos();


	        	 ?>

	        	
	          	


	        </tbody>
	      </table>

		</article>
		
		<article class = "espacioCuerpo" ></article>	

    </section>
	
</body>
</html>




<?php


function DB_getUsuarios()
{
	$users = array( 

	array('1','Ricardo','Durando','rjd'),
	array('2','Juan','juarez','jj'),
	array('3','Pedro','perez','pj'),
	array('4','Pablo','lopez','pl')
	);

	return $users;
}

function getHTMLTablaDatos()
{
	$datos = DB_getUsuarios();	

	for ($i=0; $i < count($datos); $i++) 
	{ 
	
		$id = $datos[$i][0];
		$nombre = $datos[$i][1];
		$apellido = $datos[$i][2];
		$alias = $datos[$i][3];

		$html = "";

		$html = '<tr>';
        $html .= '   <th scope="row">'.$id.'</th>';
        $html .= '   <td>'.$nombre.'</td>';
        $html .= '   <td>'.$apellido.'</td>';
        $html .= '   <td>'.$alias.'</td>';
      	$html .= '</tr>';

      	echo $html;
	}

	

}



?>







