<?php

include 'EXCEPTIONS.php';

set_error_handler("exception_error_handler");

try 
{	
	//EJEMPLO 1
	$arr = [];
	$arr[0] = 1;
	$arr[1] = 5;
	
	//echo $arr[44];

	//EJEMPLO 2
	//echo 1/0;

	//EJEMPLO 3

	//echo inverso(0); 

	//validarEdad(140);


} 
catch (Exception $errores) 
{
    echo 'Excepción capturada: ',  $errores->getMessage(), "<br>";

}

function validarEdad($edad)
{
	if($edad < 0 || $edad > 120)
	{
		throw new Exception('Edad fuera de rango');
	}
}


function inverso($x) 
{
    if ($x == 0) 
    {
        throw new Exception('División por cero');
    }
    return 1/$x;
}


?>