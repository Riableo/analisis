<?php
include ("test.php");

$consulta=Consultarprod($_GET['id']);

function Consultarprod($num){
  $sql="SELECT * FROM productos WHERE id='".$num."' ";
    $result=mysql_query($sql);
    $filas=mysql_fetch_array($result);
    return [
      $filas['Nombre'],
      $filas['marca'],
      $filas['fecha_venc'],
      $filas['costo'],
      $filas['cantidad']
    ];
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Title Page -->
    <title>Producto</title>

    <!-- CSS -->
    <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
      <style>
        body { background-color: #58504A; }
      </style>
  </head>
<body>
  <div id="container" class="form">
    <div class="box">
      <img src="img/panes.jpg" alt="Cargando imagen...">
    </div>
      <form method="POST" action="updat.php">
          <!-- Username -->
          <input type="hidden" name="nume" value="<?php echo $_GET['id']?> ">
          <br>
            <label ><b>Nombre:</b></label>
            <input type="text" class="sinbordefondo" name="name"  value="<?php echo $consulta[0] ?>">
          </br>
          <!-- Lastname -->
          <br>
            <label ><b>Marca:</b></label>
            <input type="text" class="sinbordefondo" name="marca" value="<?php echo $consulta[1] ?>">
          </br>
          <!-- User -->
          <br>
            <label ><b>Fecha Vencimiento:</b></label>
            <input type="date" class="sinbordefondo" name="venc" value="<?php echo $consulta[2] ?>">
          </br>
          <!-- Password -->
          <br>
            <label ><b>Costo:</b></label>
            <input type="number" class="sinbordefondo" name="costo" value="<?php echo $consulta[3] ?>">
          </br>
          <!-- CC -->
          <br>
            <label ><b>Cantidad:</b></label>
            <input type="number" class="sinbordefondo" name="cant" value="<?php echo $consulta[4] ?>">
          </br>
          <br></br>
          <div id="lower">
              <!-- Submit Button -->
              <input type="submit" class="save" value="Guardar">
              <a href="index.php"><button type="button" class="volver">Volver</button></a>
          </div>
      </form>
  </div>
</body>
</html>
