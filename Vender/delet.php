<?php
include ("test.php");
$num=$_GET['id'];
		$sentencia="DELETE FROM productos WHERE id='".$num."' ";
		mysql_query($sentencia) or die (mysql_error());
header('Location: index.php');
?>
