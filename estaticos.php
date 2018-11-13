<?php

  class miClase{

    public $mensaje = "Hola";

    public function hola(){
      return "Hola";
    }

    public static function metodo(){
      //return 1;
      return self::hola();

    }
  }

  //Forma de llamar un metodo estatico
  echo miClase::metodo();

 ?>
