<?php

// Abrimos la conexion a la base de datos
include("test.php");

// Recibimos por POST los datos procedentes del formulario

$nombre = $_POST["name"];
$brand = $_POST["marca"];
$fecha = $_POST["venc"];
$cost = $_POST["costo"];
$Cantidad = $_POST["cant"];

$sql="INSERT INTO productos (Nombre, marca, fecha_venc, costo, cantidad)
VALUES ('$nombre','$brand','$fecha','$cost','$Cantidad')";

$resultado = mysqli_query($conexion,$sql);

if(!$resultado){
  echo 'Error';
}else{
  echo 'Producto registrado';
}
// Confirmamos que el registro ha sido insertado con exito

echo 'Good';
mysqli_close($conexion);
header('Location: index.php');
?>
