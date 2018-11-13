<?php

  //Sirve para llamar metodos dentro de otros metodos

  class Metodos{

    public function mandarColor($valor){
      if ($valor == 1) {
        return "Rojo";
      }else if ($valor == 2) {
        return "negro";
      }else if ($valor == 3) {
        return "azul";
      }
    }

    public function darDeAltaColor($tipoColor){
      //Forma 1
      /*$obj = new Metodos();
      return $obj->mandarColor(1);*/

      //Forma 2 (con self)
      return self::mandarColor($tipoColor);
    }

  }

  $obj = new Metodos();
  echo $obj->darDeAltaColor(2);
?>
