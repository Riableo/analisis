<?php
include 'modelo.php';
$result = $conexion->query('SELECT Codigo, Descripción, Precio_unit, IVA, id_sesion, cantidad
FROM inventario
INNER JOIN carrito ON inventario.Codigo=carrito.id_producto;
');
$cars = array();
while ($car = $result->fetch()){
     $cars[] = $car;
}
?>
