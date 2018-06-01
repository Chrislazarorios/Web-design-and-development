
<?php


function DB_get_productos()
{
	$productos = array( 

	array('Samsung S3 Mini', '$6800','SAMSUNG'),
	array('LG G2 ', '$5800','LG'),
	array('Moto G ', '$5800','MOTO'),
	array('Iphone 4s', '$7000','IPHONE'),
	array('L 5s', '$6000','LG')

						);

	return $productos;
}


function DB_getUsuarios()
{


	$users = array( 

	array('1','Ricardo','Durando','rjd','123'),
	array('2','Juan','juarez','jj','456'),
	array('3','Pedro','perez','pj','789'),
	array('4','Pablo','lopez','pl','987'),
	array('5','Diego','Aguirre','da','159')

						);

	return $users;
}

function DB_validarUsuario($user,$pass)
{
	//ACA SE DEBERIA CONSULTAR A LA BASE DE DATOS SI EL USER & PASS ES CORRECTO

	if($user == 'juan' && $pass == '123')
	{
		return true;
	}
	return false;
}

function DB_validarUsuarios($user,$pass)
{
	$users = DB_getUsuarios();


	for ($i=0; $i < count($users); $i++) 
	{ 
		if($user == $users[$i][3])
		{
			if($pass == $users[$i][4])
			{
				return 'OK';
			}		
			else
			{
				return 'PASSWORD INCORRECTO';
			}	
		}
	}
	
	return 'NO ENCONTRADO';
}



//$users = DB_getUsuarios();

//var_dump($users);

//var_dump($users[0]);

//echo $users[0][1];

?>