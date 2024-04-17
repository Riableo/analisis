<?php
function tot_prods(){
  include 'modelo.php';
  $bd = $conexion;
  if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
  }
  $sentencia = $bd->prepare("SELECT id_producto FROM carrito WHERE id_sesion = ?");
  $idSesion = session_id();
  $sentencia->execute([$idSesion]);
  return $sentencia->fetchAll(PDO::FETCH_COLUMN);
}
?>
