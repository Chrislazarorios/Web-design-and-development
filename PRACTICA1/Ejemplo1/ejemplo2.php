<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"
<title>
	<?php
		CargarTitle();
	?>
</title>

<style-type="text/css">

body {background-color:#blue;}

div#body2 {
	width:700px;
	margin-left:auto;
	margin-right:auto;
	border:2px inset #yellow;	
}

h1 {
	color:#red;
	text-align:center;
	margin-top:30px;
}

h2 {
	color:#green;
	padding-left:20px;
	margin-top:50px;
	margin-bottom:50px;
}

img {
	float:left;
	width:15%;
	padding:10px
}

p {
	font-size:20px;
	padding:15px
	color:#black;
}

ul#L1 {
	list-style:none;
	color:#red;
	font-size:18px;
	font-weight:bold;
}

ul#L2 {
	color:#brown;
	font-weight:normal;
}

table {
	border:inset 2px #black
	width:85%
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	background-color:#red;
}

p#NOTA {
	border:2px outset #pink;
	width:60%;
	margin-left:auto;
	margin-right:auto;
	color:#blue;
	font-family:"Palatino Linotype", "Book Antiqua",
}

p#NOTA a:hover {
	text-decoration:underline;
}
</style>

</head>

<body>

<div id="body2">

<h1>
	<?php
		cargarTitulo();
	?>
</h1>

<h2>El maravilloso mundo de Html5</h2>

<img style src=
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
	function cargarTitle()
	{
		echo "Aprender Html";
	}

	function cargarTitulo()
	{
		echo "Aprender Html";
	}

	function cargarImagen()
	{
		$imagen = 'Logo_Html5.png';
		echo '"'.$imagen.'"';
	}

	function cargarItem($valor)
	{
		echo"<li>".$valor."</li>";
	}

	function cargarRegistro($valor1,$valor2,$valor3)
	{
		echo '<tr> <td>'.$valor1.'</td><td>'.$valor2.'</td><td>'.$valor3.'</td> </tr>';
	}

	function cargarParrafo1() 
	{
		$parrafos = 'HTML 5 (HyperText Markup Language, version 5) es la quinta revision importante del lenguaje basico de la World Wide Web, HTML.';

		echo $parrafos;
	}

	function cargarParrafo2()
	{
		echo 'HTML 5 establece una serie de nuevos elementos y atributos que reflejan el uso tipico de los sitios web modernos. Algunos de ellos son tecnicamente similares a las etiquetas &lt;div&gt; y &lt;span&gt;, pero tienen un significado semantico , como por ejemplo &lt;nav&gt; (bloque de navegación del sitio web) y &lt;footer&gt;. Otros elementos proporcionan nuevas funcionalidades a través de una interfaz estandarizada, como los elementos &lt;audio&gt; y &lt;video&gt;.';'
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