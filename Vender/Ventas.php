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
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
    <style>
      body { background-color: #58504A; }
    </style>
</head>
<body>
  <center>
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
      $fe=$_GET["dia"];
      $sql="Select * from productos where dia= '".$fe."' ";
      $result=mysqli_query($conexion,$sql);
      while($mostrar=mysqli_fetch_array($result,MYSQLI_ASSOC)){
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
    <div id="container" class="res">
      <div class="cons">
        <?php
        $sql="Select Sum(costo*cantidad) from productos  where dia= '".$fe."'";
          $resulta=mysqli_query($conexion,$sql);
          echo "<b>Total:</b> <input type='number' class='sinbordefondo' value='".implode(', ',mysqli_fetch_array($resulta,MYSQLI_NUM))."' readonly></div>";
          ?>
          <br></br>
      <div class="btn">
        <a href="detalle.php"><button type="button" class="volver">Volver</button></a>
      </div>
    </div>
    </center>
</body>
</html>
