<?php

$nom = $_POST['nombre'];
$ape = $_POST['apellido'];

//Lo que esta acontinuacion es para hacer consultas
try{

	$conexcion = mysqli_connect('localhost','root','','pareos');
	$sql = 'SELECT nombre, apellido FROM jugadores';
	$res = mysqli_query($conexcion,$sql);
	$envio = array();
	//Si solo necesitas hacer inserciones cambiamos el query y devolvemos el 
	//resultado de la operacion
 	while($consulta = mysqli_fetch_array($res)){
 		array_push($envio, $consulta); 
 	}
 	echo json_encode($envio);
	
 	mysqli_close($conexcion);


}catch(Exception $e){
	die('Error: ' . $e->GetMessage());
}

?>
  