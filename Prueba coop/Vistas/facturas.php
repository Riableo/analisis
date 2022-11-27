<!DOCTYPE html>
<?php include '../Modelo/factu_list.php'; ?>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <title>Facturas</title>
  </head>
  <body>
    <center>
      <table class="content-table">
        <tr>
          <th>ID</th>
          <th>Precio</th>
          <th>IVA total</th>
          <th>Fecha</th>
        </tr>
        <?php foreach ($facts as $fact): ?>
         <tr>
           <td><?php echo $fact['id']?></td>
           <td><?php echo $fact['precio'] ?></td>
           <td><?php echo $fact['IVA_TOT'] ?></td>
           <td><?php echo $fact['Fecha'] ?></td>
         </tr>
       <?php endforeach; ?>
      </table>
    </center>
  </body>
</html>
