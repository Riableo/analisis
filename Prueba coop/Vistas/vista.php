<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Inventario</title>
  </head>
  <body>
    <header>
      <div class="titulo">
        <strong>Prueba</strong>
      </div>
      <nav>
        <form action="Vistas/carrito.php" method="post">
          <button>
            <strong>Ver carrito <?php include_once "Modelo/funciones.php";
            $conteo = count(tot_prods());
            if ($conteo > 0) {
              printf("(%d)", $conteo);
            }
            ?></strong>
          </button>
        </form>
      </nav>
    </header>
    <center>
      <table class="content-table">
        <tr>
          <th>ID</th>
          <th>Descripción</th>
          <th>Precio unit</th>
          <th>IVA (%)</th>
          <th>Cantidad</th>
          <th>Precio</th>
          <th></th>
        </tr>
         <?php foreach ($prods as $prod): ?>
          <tr>
            <td><?php echo $prod['Codigo']?></td>
            <td><?php echo $prod['Descripción'] ?></td>
            <td><?php echo number_format($prod['Precio_unit']) ?></td>
            <td><?php echo $prod['IVA'] ?></td>
            <form action="Modelo/agregar.php" method="post">
              <td><input type="number" name="cntdd" id="cntdd"></td>
              <td>
                <input type="hidden" name="id_producto" value="<?php echo $prod['Codigo'] ?>">
                <button>Agregar</button>
              </td>
            </form>
          </tr>
        <?php endforeach; ?>
      </table>
    </center>
  </body>
</html>
