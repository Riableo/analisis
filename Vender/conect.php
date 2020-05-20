<?php

class Conexion{

  public function conect(){
    $conexion = mysqli_connect("localhost","root","","prueba");
    if(!$conexion){
      return 'mal';
    }else{
      return 2;
    }
  }

  public function Addprod($Nombre,$marca,$date,$cost,$cant){
    $conexion = mysqli_connect("localhost","root","","prueba");
    $sql = "INSERT INTO productos(Nombre, marca, fecha_venc, costo, cantidad)
    VALUES ('$Nombre','$marca','$date',$cost,$cant)";
    $result=mysqli_query($conexion,$sql);
    if(!$result){
      return 'Producto unregister';
    }else{
      return 'Good';
    }
  }

  public function Updateprod($Nombre,$marca,$date,$cost,$cant){
    $conexion = mysqli_connect("localhost","root","","prueba");
    $sql = "UPDATE productos SET nombre='".$Nombre."', marca= '".$marca."',
		fecha_venc='".$date."', costo='".$cost."', Cantidad='".$cant."'
		WHERE id=12 ";
    $result=mysqli_query($conexion,$sql);
    if(!$result){
      return 'Producto nonupdate';
    }else{
      return 'Good';
    }
  }

  public function Deleteprod($num){
    $conexion = mysqli_connect("localhost","root","","prueba");
    $sql = "DELETE FROM productos WHERE id=$num ";
    $result=mysqli_query($conexion,$sql);
    if(!$result){
      return 'Producto nondelete';
    }else{
      return 'Good';
    }
  }

}

 ?>
