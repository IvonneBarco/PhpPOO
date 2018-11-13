<?php
  class metodos{

    public function mostrarDatos($sql){
      $cx = new conectar();
      $conexion = $cx->conexion();

      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function insertarDatos($datos){
      $cx = new conectar();
      $conexion = $cx->conexion();

      $sql = "INSERT INTO t_persona(nombre,apellido) VALUES ('$datos[0]','$datos[1]')";
      return $result = mysqli_query($conexion,$sql);
    }


  }

?>
