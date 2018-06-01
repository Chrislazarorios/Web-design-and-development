<link href="../../../CSS/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../../CSS/dist/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="../../../CSS/estilo.css" rel="stylesheet">

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

			<div class="panel panel-primary">
		      <div class="panel-heading">
		        <h3 class="panel-title">Log In</h3>
		      </div>

		      <form action="enviarDatosLoginPOST.php" method="post">

		      <div class="panel-body">
	        	<div class="input-group">
						<input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				</div>
		      </div>

		      <div class="panel-body">
	        	<div class="input-group">
					<input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				</div>
		      </div>

		      

		      <div class="panel-body">		        	
  					<button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>  				
		      </div>

		      <div class="panel-body">	
				<button type="button" class="btn btn-primary btn-lg btn-block" id="inputRegistrar" onclick="iraRegistrar()" >Registrarse</button> 
			  </div>	  				  


			  </form>	

		      <div class="panel-body">	
		      	<div id="alertlogin"></div>
		      </div>

		    </div>
		</article>
		
		<article class = "espacioCuerpo" ></article>	

    </section>
	
</body>
</html>











