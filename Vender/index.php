<!doctype html>
<?php
include("test.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Title Page -->
    <title>Producto</title>

    <!-- CSS -->
    <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>
<body>
    <div id="container" class="form">
        <form method="POST" action="registra.php">
            <!-- Username -->
            <br>
              <label ><b>Nombre:</b></label>
              <input type="text" class="sinbordefondo" name="name">
            </br>
            <!-- Lastname -->
            <br>
              <label ><b>Marca:</b></label>
              <input type="text" class="sinbordefondo" name="marca">
            </br>
            <!-- User -->
            <br>
              <label ><b>Fecha Vencimiento:</b></label>
              <input type="date" class="sinbordefondo" name="venc">
            </br>
            <!-- Password -->
            <br>
              <label ><b>Costo:</b></label>
              <input type="number" class="sinbordefondo" name="costo">
            </br>
            <!-- CC -->
            <br>
              <label ><b>Cantidad:</b></label>
              <input type="number" class="sinbordefondo" name="cant">
            </br>
            <br></br>
            <div id="lower">
                <!-- Submit Button -->
                <center>
                <input type="submit" class="save" value="Guardar">
              </center>
            </div>
        </form>
    </div>
    <br>
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
        $sql="Select *from productos";
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
          <?php
          echo "<td><a href='modif.php?id=".$mostrar['id']."'><button type='button' class='modif'>Modificar</button></a></td>";
          echo "<td><a href='delet.php?id=".$mostrar['id']."'><button type='button' class='delet'>Eliminar</button></a></td>";
          ?>
        </tr>
        <?php
        }
         ?>
      </table>
      <a href="Ventas.php"><button type="button" class="ventas">Ver ventas dia</button></a>
    </br>
</body>
</html>
