<?php
   $conexion = new PDO('mysql:host=localhost;dbname=productos',"root","");
   $result = $conexion->query('SELECT * FROM Inventario');
   $prods = array();
   while ($prod = $result->fetch()){
        $prods[] = $prod;
   }
?>
