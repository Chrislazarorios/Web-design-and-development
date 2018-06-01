<?php
	
  //include '../EMAIL/email.php';

  $name = '';
  $email = '';
  $website = '';
  $gender = '';
  $comment = '';

  if (!empty($_GET))
  {
  	$name = $_GET["name"]; 
  	$email =$_GET["email"];
    $website = $_GET["website"]; 
    $gender = '';
    if(!empty($_GET["gender"]))
    {
       $gender = $_GET["gender"];
    }
    $comment = $_GET["comment"]; 
  }

  if (!empty($_POST))
  {
    $name = $_POST["name"]; 
    $email =$_POST["email"];
    $website = $_POST["website"]; 
    $gender = '';
    if(!empty($_POST["gender"]))
    {
       $gender = $_POST["gender"];
    }
    $comment = $_POST["comment"]; 
  }
        
  echo '<br>Dato Nombre: <br>';
  echo $name;
  echo '<br>Dato Email: <br>';
  echo $email;
  echo '<br>Dato Website: <br>';
  echo $website;
  echo '<br>Dato Comentario: <br>';
  echo $comment;
  echo '<br>Dato Genero: <br>';
  echo $gender;

  //enviarMail($name."  ".$email." ".$website."  ".$comment."  ".$gender);


  header('Location: graciasPorContactarnos.html');


?>