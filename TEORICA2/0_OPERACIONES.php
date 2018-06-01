<?php

	

// COMENTARIO EN UNA LINEA



# COMENTARIO EN UNA LINEA	

/*
	COMENTARIOS
	EN BLOQUE
*/



////////////////CONSTANTES///////////////////


define("SALUDOS", "Bienvenidos al Curso!");

define("PI", 3.1415926535912345);


function saludar() 
{
    echo SALUDOS."<br>".PI;
    
}

//saludar();

 




///////////////OPERACIONES DE ASIGNACION//////////////


$Y = 0;

$x = $Y; // IGUALA EL VALOR DE Y EN LA VARIABLE X


$x += $Y; //SUMA AMBAS VARIABLES Y SE GUARDA EN $X   
$x *= $Y; //MUL AMBAS VARIABLES Y SE GUARDA EN $X 
$x -= $Y; //RESTA AMBAS VARIABLES Y SE GUARDA EN $X




/////////////////////////////////////////////////////


///////////////////////////////////////////

//////////////////OPERACIONES ARITMETICAS////////////

/*

+	Addition	 $x + $y
-	Subtraction	$x - $y
*	Multiplication	$x * $y
/	Division	$x / $y
%	Modulus	$x % $y
**	Exponentiation	$x ** $y

*/


function operaciones()
{
	$z;
	$x = 6;
	$y = 3;

	echo '<br> SUMA <br>';

	$z = $x + $y;
	echo $z;
	echo '<br> RESTA <br>';
	$z = $x - $y;
	echo $z;
	echo '<br> MUL <br>';
	$z = $x * $y;
	echo $z;
	echo '<br> DIV <br>';
	$z = $x / $y;
	echo $z;

}

operaciones();


/////////////////////////////////////////






///////////////OPERACIONES DE COMPARACION//////////////

/*
==	Equal	$x == $y	
!=	Not equal	$x != $y
<>	Not equal	$x <> $y
!==	Not identical	$x !== $y
===	Identical	$x === $y
>	Mayor que 	$x > $y
<	Menor que	$x < $y
>=	Mayor que o igual	$x >= $y
<=	Menor que o igual	$x <= $y
*/


/////////////////////////////////////////////////////



///////////////OPERACIONES DE PRE Y POS INCREMENTO//////////////
/*

++$x	Pre-increment	incrementa $x, retorna $x 
$x++	Post-increment	retorna $x, then incrementa $x en 1	
--$x	Pre-decrement	decrementa $x en 1, then retorna $x	
$x--	Post-decrement retorna $x, decrementa $x en 1
*/

/////////////////////////////////////////////////////


///////////////OPERACIONES COMPARACION//////////////
/*
and		$x and $y	True if si $x e $y son iguales
or		$x or $y	True if $x or $y es true
&&		$x && $y	True if si $x e $y son iguales
||		$x || $y	True if $x or $y es true
*/
/////////////////////////////////////////////////////


 



?>