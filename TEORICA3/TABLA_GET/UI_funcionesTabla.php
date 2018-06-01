
<?php

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


function UI_getHTMLfilas($indice)
{
	$listaUsers =  DB_getUsuarios();

	$indice = $indice - 1;


	$htmlRegistro = '';
	
	$htmlRegistro = $htmlRegistro.UI_getfila($listaUsers[$indice][0],$listaUsers[$indice][1],$listaUsers[$indice][2],$listaUsers[$indice][3]);
		
	echo $htmlRegistro;

}


function UI_agregarUsuario($val1,$val2,$val3,$val4)
{
	//return DB_setUsuario($val1,$val2,$val3,$val4);
}



function getCount()
{
	$listaUsers =  DB_getUsuarios();

	return count($listaUsers);

}

?>