

<link href="../../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../../CSS/estilo.css" rel="stylesheet">

<!DOCTYPE html>
<html>

<head>
	<!-- TITLE -->
	<title>CURSO PROGRAMACION WEB</title>
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

			<div class="panel panel-primary">
		      <div class="panel-heading">
		        <h3 class="panel-title"><?php cargarTitulo(); ?></h3>
		      </div>

		      <div class="panel-body">
	        	<div class="input-group">
						<input type="text" class="form-control" id="nombre" placeholder="<?php cargarNombre(); ?>">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				</div>
		      </div>
		      <div class="panel-body">
	        	<div class="input-group">
						<input type="text" class="form-control" id="apellido" placeholder="<?php cargarApellido(); ?>">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				</div>
		      </div>
		      <div class="panel-body">
	        	<div class="input-group">
						<input type="text" class="form-control" id="alias" placeholder="<?php cargarAlias(); ?>">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				</div>
		      </div>
		      <div class="panel-body">
	        	<div class="input-group">
						<input type="text" class="form-control" id="edad" placeholder="<?php cargarEdad(); ?>">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				</div>
		      </div>


		      	<?php 

		      		agregarInput('peso','Ingrese Peso');
		      		agregarInput('altura','Ingrese Altura');
		      		agregarInput('direccion','Ingrese Direccion');

		      	 ?>


		      <div class="panel-body">	
				<button type="submit" class="btn btn-primary btn-lg btn-block" id="inputRegistrar" onclick="registrar()" ><?php cargarBoton(); ?></button> 
			  </div>	  				  


		      <div class="panel-body">	
		      	<div id="alertlogin"></div>
		      </div>

		    </div>
		</article>
		
		<article class = "espacioCuerpo" ></article>	

    </section>

</body>
</html>


<?php 	

	function cargarTitulo()
	{
		$titulo = 'Registrar Usuario';
		echo $titulo;
	}

	function cargarNombre()
	{
		$Nombre = 'Nombre';
		echo $Nombre;
	}

	function cargarApellido()
	{
		$apellido = 'Apellido';
		echo $apellido;
	}

	function cargarAlias()
	{
		$alias = 'Alias';
		echo $alias;
	}

	function cargarEdad()
	{
		$edad = 'Edad';
		echo $edad;
	}

	function cargarBoton()
	{
		$edad = 'Registrarse';
		echo $edad;
	}

	function agregarInput($id,$placeholder)
	{
		echo '<div class="panel-body">';
		echo   	'<div class="input-group">';
		echo 		'<input type="text" class="form-control" id="'.$id.'" placeholder="'.$placeholder.'">';
		echo 			'<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>';
		echo 	'</div>';
		echo   '</div>';
	}



 ?>