
<?php

//EJEMPLO 1
//include 'DB_funciones.php';

//EJEMPLO 2
include '../DB/DB_funciones.php';


function UI_getfila($id, $nombre,$apellido,$alias)
{	
	echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$nombre.'</td>
            <td>'.$apellido.'</td>
            <td>'.$alias.'</td>
          </tr>';
}

function UI_getHTMLfilas()
{
	$listaUsers =  DB_getUsuarios();

	$htmlRegistro = '';

	for ($i=0; $i < count($listaUsers); $i++) 
	{ 
		$htmlRegistro = $htmlRegistro.UI_getfila($listaUsers[$i][0],$listaUsers[$i][1],$listaUsers[$i][2],$listaUsers[$i][3]);
	}	
	
	echo $htmlRegistro;
}

?>