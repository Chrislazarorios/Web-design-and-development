<?php

	//Variables

	$cars1 = "Volvo";
	$cars2 = "BMW";
	$cars3 = "Toyota";


	// ARRAY INDEXADO AUTOMATICO INICIA EN 0

	$cars = [];

	$cars = array();	

	$cars = array("Volvo", "BMW", "Toyota","Fiat");	

	$cars[4] = "Ferrari";


	//echo 'Hasta aca tenemos '.count($cars).' elementos'; 

	$cars[count($cars)] = "Peugeot";
	$cars[count($cars)] = "Nissan";	


	// VER EL CONTENIDO

//echo "Me gustan los " . $cars[0] . ", " . $cars[1] . " and " . $cars[2];


	// VER CANTIDAD ELEMENTOS
	
	//echo count($cars);


	//RECORRER UN ARRAY
	
	/*$arrlength = count($cars);

	for($x = 0; $x < $arrlength; $x++) {
	    
	    echo $cars[$x];
	    echo "<br>";
	}*/


	/////// INDEXADO MANUAL

	//CREO EL ARRAY
	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

	// OTRA FORMA ES

	$persona = [];
	$persona['nombre'] = "Ricardo";
	$persona['apellido'] = "Durando";
	$persona['edad'] = "28";

	//echo count($persona); 

	$age['Peter'] = "33";
	$age['Ben'] = "37";
	$age['Joe'] = "66";

	//VER EL CONTENIDO
	
	/*echo $age['Peter'];
	echo '<br>';
	echo $age['Ben'];
	echo '<br>';
	echo $age['Joe'];*/

	//RECORRO EL ARRAY

	/*foreach($age as $clave => $valor) 
	{
		echo " CLAVE=" . $clave;
	    echo "<br>"; 
	    echo " VALOR=" . $valor;
	    echo "<br>";    
	}
*/
	/////////////////////////


	/////// OTRAS COSAS /////////

	//ORDENAMIENTO
	
	$cars = array("Volvo", "BMW", "Toyota","Fiat");	

	
	sort($cars);
	
	/*for($x = 0; $x < count($cars); $x++) {
	    echo $cars[$x];
	    echo "<br>";
	}*/

	$numbers = array(4, 6, 2, 22, 11);
	
	sort($numbers);
	
	rsort($numbers);
/*
	for($x = 0; $x < count($numbers); $x++) {
	    echo $numbers[$x];
	    echo "<br>";
	}
*/

	$dato = 88; 

	$otrosDatos = array(4, "RICARDO",$dato, 2, true, 11);
	
	$otrosDatos[count($otrosDatos)] = 345;

	////////ARRAY MULTIDIMENSIONALES////////////

	

 $cars = array(

  array("Volvo",22,18),
  array("BMW",15),
  array("Saab",5,2),
  array("Land Rover",17)
  
  );

	/*echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
	echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
	echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
	echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
*/
	for ($row = 0; $row < count($cars); $row++) 
	{
 		echo "<p><b>Row number $row</b></p>";
  		echo "<ul>";
  		
  		for ($col = 0; $col < count($cars[$row]); $col++) 
  		{
    		echo "<li>".$cars[$row][$col]."</li>";
  		}
  		
  		echo "</ul>";
	}

	

?>

