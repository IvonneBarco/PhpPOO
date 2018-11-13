<?php
  class metodos{

    public function mostrarDatos($sql){
      $cx = new conectar();
      $conexion = $cx->conexion();

      $result = mysqli_query($conexion,$sql);
      return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
  }

?>
