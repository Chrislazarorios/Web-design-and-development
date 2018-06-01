<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>
	<?php 

	cargarTittle();

 	?>
</title>

<style type="text/css">

body {background-color:#f0fcfb;}

div#BODY2 {
	width:700px;
	margin-left:auto;
	margin-right:auto;
	border:2px inset #BD0B20;
}

h1 {
	color:#03897e;
	text-align:center;
	margin-top:30px;
}
h2 {
	color:#03c4b4;
	padding-left:20px;
	margin-top:50px;
	margin-bottom:50px;
}

img {
	float:left;
	width:15%;
	padding:10px;
}

p {
	font-size:20px;
	padding:15px;
	color:#036a61;
}

ul#L1 {
	list-style:none;
	color:#6a030f;
	font-size:18px;
	font-weight:bold;
}

ul#L2 {
	color:#c1051b;
	font-weight:normal;
}

table {
	border:inset 2px #300208;
	width:85%;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	background-color:#b0f8f2;
}

p#NOTA {
	border:2px outset #f1ae0d;
	width:60%;
	margin-left:auto;
	margin-right:auto;
	color:#f1ae0d;
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
}

p#NOTA a {
	text-decoration:none;
	color:#ac7b04;
}

p#NOTA a:hover {
	text-decoration:underline;
}

</style>

</head>

<body>

<div id="BODY2">

<h1>

	<?php
		cargarTitulo();
	?>

</h1>

<h2>El maravilloso mundo de Html5</h2>

<img style  src=

	<?php
		cargarImagen(); 
	?>

/>

<p>

<?php
	cargarParrafo1();
?>
</p>

<p>

<?php
	cargarParrafo2(); 
?>
	
</p>

<ul id="L1">
<li>Nuevas directivas en Html5

<ul id="L2">
	<?php	
		cargarItem('article');
		cargarItem('aside');
		cargarItem('footer');
		cargarItem('nav');
		cargarItem('section');

	?>
</ul>

</li>
</ul>

<table>


<?php
	cargarRegistro('aside','no','si');
	cargarRegistro('p','no','no');
	cargarRegistro('img','src','no');
	cargarRegistro('a','href','no');
?>

</table>

<p id="NOTA">
	<?php
	 cargarNota(); 
	 ?> 
<a href="<?php cargarLink(); ?>">Html, simple y claro</a>
</p>

</div>
</body>
</html>

<?php

	function cargarTittle()
	{
		echo "Aprender Html ";	
	}

	function cargarTitulo()
	{
		echo "Aprender Html ";	
	}

	function cargarImagen()
	{
		$imagen = 'Logo_Html5.png';
		echo '"'.$imagen.'"';
	}


	function cargarItem($valor)
	{
		echo "<li>".$valor."</li>";	
	}

	function cargarRegistro($valor1,$valor2,$valor3)
	{
		echo '<tr> <td>'.$valor1.'</td><td>'.$valor2.'</td><td>'.$valor3.'</td>  </tr>';	
	}


	function cargarParrafo1()
	{
		$parrafos = 'HTML 5 (HyperText Markup Language, versión 5) es la quinta revisión importante del lenguaje básico de la World Wide Web, HTML.';
		
		echo $parrafos;
	}


	function cargarParrafo2()
	{
		echo 'HTML 5 establece una serie de nuevos elementos y atributos que reflejan el uso típico de los sitios web modernos. Algunos de ellos son técnicamente similares a las etiquetas &lt;div&gt; y &lt;span&gt;, pero tienen un significado semántico, como por ejemplo &lt;nav&gt; (bloque de navegación del sitio web) y &lt;footer&gt;. Otros elementos proporcionan nuevas funcionalidades a través de una interfaz estandarizada, como los elementos &lt;audio&gt; y &lt;video&gt;.';
	}

	function cargarNota()
	{
		echo 'Nota: Para informacion detallada sobre Html5, por favor visita la pagina web';
	}


	function cargarLink()
	{ 
		echo 'http://www.w3schools.com/';
	}
?>