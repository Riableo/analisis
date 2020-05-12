<?php
include("test.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Title Page -->
    <title>Fechas</title>

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
        <th>Creado</th>
      </tr>
      <?php
      $sql="Select distinct dia from productos";
      $result=mysqli_query($conexion,$sql);
      while($mostrar=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      ?>
      <tr>
        <td><?php echo $mostrar['dia'] ?></td>
        <?php
        echo "<td><a href='Ventas.php?dia=".$mostrar['dia']."'><button type='button' class='find'>Consultar</button></a></td>";
        ?>
      </tr>
      <?php
      }
       ?>
    </table>
  </center>
  <br></br>
  <a href="index.php"><button type="button" class="volver">Volver</button></a>
</body>
</html>
