<?php
require_once "conexion.php";
$obj = new conectar();
$conexion=$obj->conexion();
$id = $_GET['id'];
$sql = "SELECT nombre, apellido FROM t_persona  WHERE id='$id'";
$result = mysqli_query($conexion, $sql);
$ver = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
  </head>
  <body>

    <form action="procesos/actualizar.php" method="post">
      <input type="text" hidden="" name="id" value="<?php echo $id ?>">
      <label for="">Nombre: </label>
      <input type="text" name="txtnombre" value="<?php echo $ver[0] ?>">
      <p></p>
      <label for="">Apellido: </label>
      <input type="text" name="txtapellido" value="<?php echo $ver[1] ?>">
      <p></p>
      <button>Actualizar</button>
    </form>


  </body>
</html>
