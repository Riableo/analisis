<?php
include 'modelo.php';

$idProducto = $_POST["id_producto"];
$cantidad = $_POST["cntdd"];
$bd = $conexion;
if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}
$idSesion = session_id();
$sentencia = $bd->prepare("INSERT INTO carrito(id_sesion, id_producto,cantidad) VALUES (?, ?, ?)");
$sentencia->execute([$idSesion, $idProducto, $cantidad]);

header('Location: ../index.php');
?>
