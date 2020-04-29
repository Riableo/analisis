<?php
$conexion = mysql_connect("localhost","root","");
mysql_select_db("prueba",$conexion);
if(!$conexion){
echo 'Error al conectar';
}else{
 //echo 'conexion exitosa';
}
