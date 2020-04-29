<?php
	include 'test.php';
$nombre=$_POST['name'];
$marc=$_POST['marca'];
$fecha=$_POST['venc']; 
$cost=$_POST['costo'];
$cant=$_POST['cant'];
$num=$_POST['nume'];

		$sentencia="UPDATE productos SET nombre='".$nombre."', marca= '".$marc."',
		fecha_venc='".$fecha."', costo='".$cost."', Cantidad='".$cant."'
		WHERE id='".$num."' ";

	$resultado = mysql_query($sentencia);

	if(!$resultado){
	  echo 'Error';
	}else{
	  echo 'Producto registrado';
	}

	// Confirmamos que el registro ha sido insertado con exito

	echo 'Good';
	mysql_close($conexion);
	header('Location: index.php');
	?>
