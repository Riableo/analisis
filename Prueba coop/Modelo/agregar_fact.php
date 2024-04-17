<?php
include 'modelo.php';

$bd = $conexion;
$precio = $_POST["tot"];
$IVA = $_POST["iva"];

$sentencia = $bd->prepare("INSERT INTO factura(precio, IVA_TOT) VALUES (?, ?)");
$sentencia->execute([$precio, $IVA]);

header('Location: ../Vistas/facturas.php')
?>
