<?php
include("test.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Title Page -->
    <title>Ventas</title>

    <!-- CSS -->
    <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
    <style>
      body { background-color: #58504A; }
    </style>
</head>
<body>
  <table>
    <tr>
      <th>id</th>
      <th>Nombre</th>
      <th>Marca</th>
      <th>Fecha Vencimiento</th>
      <th>Costo</th>
      <th>Cantidad</th>
    </tr>
    <?php
    $sql="Select * from productos";
    $result=mysql_query($sql);
    while($mostrar=mysql_fetch_array($result)){
    ?>
    <tr>
      <td><?php echo $mostrar['id'] ?></td>
      <td><?php echo $mostrar['Nombre'] ?></td>
      <td><?php echo $mostrar['marca'] ?></td>
      <td><?php echo $mostrar['fecha_venc'] ?></td>
      <td><?php echo $mostrar['costo'] ?></td>
      <td><?php echo $mostrar['cantidad'] ?></td>
    </tr>
    <?php
    }
     ?>
  </table>
  <?php
  $sql="Select Sum(costo*cantidad) from productos";
    $resulta=mysql_query($sql);
    echo "<b>Total:</b> <input type='number' class='sinbordefondo' value='".mysql_result($resulta, 0)."' readonly></div>";
    ?>
  <br></br>
  <a href="index.php"><button type="button" class="volver">Volver</button></a>
</body>
</html>
