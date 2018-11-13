<?php
require_once "../conexion.php";
require_once "../metodosCrud.php";

$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];
$id = $_POST['id'];

$datos = array($nombre, $apellido, $id);

$obj = new metodos();
if ($obj -> actualizarDatos($datos) == 1) {
  header("location: ../index.php");
}else{
  echo "El dato no se pudo actualizar";
}
?>
