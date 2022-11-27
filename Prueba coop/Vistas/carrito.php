<!DOCTYPE html>
<?php include '../Modelo/listar.php'; ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>Carrito</title>
  </head>
  <body>
    <center>
      <table id="tabla-princ" class="content-table">
        <tr>
          <th>Producto</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>IVA(%)</th>
        </tr>
          <?php foreach ($cars as $car): ?>
           <tr>
             <td><?php echo $car['Codigo']?></td>
             <td><?php echo $car['Descripción'] ?></td>
             <td><?php echo $car['Precio_unit'] ?></td>
             <td id="cntdd"><?php echo $car['cantidad'] ?></td>
             <td><?php echo $car['IVA'] ?></td>
           </tr>
         <?php endforeach; ?>
      </table>
        <label>Subtotal: </label>
        <label class="subtot"></label>
      </br>
      <br>
        <label>Total: </label>
        <label class="total"></label>
      </br>
      <br>
      <form action="../Modelo/agregar_fact.php" method="post">
        <input type="hidden" name="iva" id="iva">
        <input type="hidden" name="tot" id="tot">
        <button>Finalizar</button>
      </form>
    </br>
    </center>
    <script src="../Modelo/obten.js"></script>
  </body>
</html>
