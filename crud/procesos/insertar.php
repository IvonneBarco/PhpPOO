<?php
  require_once "../conexion.php";
  require_once "../metodosCrud.php";

  $nombre = $_POST['txtnombre'];
  $apellido = $_POST['txtapellido'];

  $datos = array($nombre, $apellido);
  $obj = new metodos();

  if ($obj -> insertarDatos($datos) == 1) {
    header("location: ../index.php");
  }else{
    echo "El dato no se pudo agregar";
  }
?>
