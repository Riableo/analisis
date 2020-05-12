<?php
include ("test.php");
$num=$_GET['id'];
		$sentencia="DELETE FROM productos WHERE id='".$num."' ";
		mysqli_query($conexion,$sentencia) or die (mysqli_error());
header('Location: index.php');
?>
