
<?php

	
function holaMundo() 
{
	echo "Hola Mundo!"."<br>";
}

//holaMundo(); // LLAMADO A LA FUNCION

function funcionConUnParametro($parametro) 
{
	$html = "";	
	$html = $html."Mi nombre es : ";
	$html .= $parametro;
	$html .= "<br>";

	echo $html;
    
}
/*
funcionConUnParametro("Diego");
funcionConUnParametro("Pablo");
funcionConUnParametro("Juan");*/


function funcionConMasParametros($parametro1 = '',$parametro2 = 'NN') 
{
    echo "Mi nombre es :".$parametro1."y mi apellido es: ".$parametro2."<br>";

}

/*
funcionConMasParametros("Pedro","Perez");
funcionConMasParametros("Juan");
funcionConMasParametros();

*/

function sumar($x,$y)
{	
	$a = $x + $y;
	return $a;
}

$res = sumar(22,55);
/*
echo $res;*/


$f = sumar(98,55);
/*echo $f; */





function sumarYrestar($x,$y)
{	
	
	$resultados = array();
	$resultados['SUMA'] = $x + $y;
	$resultados['RESTA'] = $x - $y;
	return $resultados;
}

$f = sumarYrestar(234,97);

//echo $f['SUMA']; // VEO LA SUMA

//echo $f['RESTA']; // VEO LA RESTA


//////////////VARIABLES GLOBALES///////////////

 
function sumaGlobal() 
{ 
	$x = 44; //ESTA ES UNA VARIABLE LOCAL NUEVA

    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
}
 
$x = 75; 
$y = 25;

sumaGlobal($x,$y); 



//echo $z;


?>



	