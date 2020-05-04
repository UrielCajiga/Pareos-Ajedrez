<?php

$usuario = $_POST;
$arreglo = array();

//for ($x = 1; $x <= 10; $x++){

    array_push($arreglo, $usuario);
//}

echo json_encode($arreglo);
?>
