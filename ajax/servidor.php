<?php

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];


//echo json_encode($nom.' '.$ape);
//echo json_encode($ape);


try{
	/*
	$base = new PDO('mysql:host=localhost; dbanme = pareos', 'root','');
	//echo json_encode('Conexcion OK');
	$base->exec("SET CHARACTER SET utf8");
	$sql = 'SELECT `nombre`, `apellido` FROM `jugadores` WHERE nombre = ?"Andres"';
	$resultado = $base->prepare($sql);

	$resultado->execute(array("Andres"));
	*/
	$conexcion = mysqli_connect('localhost','root','','pareos');
	$sql = 'SELECT nombre, apellido FROM jugadores';
	$res = mysqli_query($conexcion,$sql);
	$envio = array();
 	while($consulta = mysqli_fetch_array($res)){
 		array_push($envio, $consulta); 
 	}
 	echo json_encode($envio);
	

}catch(Exception $e){
	die('Error: ' . $e->GetMessage());
}

?>
  