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

    <form action="procesos/insertar.php" method="post">
      <label for="">Nombre: </label>
      <input type="text" name="txtnombre" value="">
      <p></p>
      <label for="">Apellido: </label>
      <input type="text" name="txtapellido" value="">
      <p></p>
      <button>Agregar</button>
    </form>

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
            <td> <a href="editar.php?id=<?php echo $key['id'] ?>">Editar</a> </td>
            <td> <a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>">Eliminar</a> </td>
          </tr>
        <?php
        }
        ?>

    </table>

  </body>
</html>
