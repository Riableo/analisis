<?php
include 'modelo.php';
$result = $conexion->query('SELECT * FROM factura');
$prods = array();
while ($fact = $result->fetch()){
     $facts[] = $fact;
}
?>
