<?php
  require_once "conexion.php";
  require_once "metodosCrud.php";
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>

    <table>
      <tr>
        <td>Nombre</td>
        <td>Apellido</td>
      </tr>

      <?php
        $obj = new metodos();
        $sql = "SELECT id,nombre,apellido FROM t_persona";
        $datos = $obj->mostrarDatos($sql);

        foreach ($datos as $key) {
      ?>
          <tr>
            <td> <?php echo $key['nombre']; ?> </td>
            <td> <?php echo $key['apellido']; ?> </td>
          </tr>
        <?php
        }
        ?>

    </table>

  </body>
</html>
