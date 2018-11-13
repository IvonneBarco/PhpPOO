<?php
  class clasePadre{
    public function metodoPadre(){
      return "Hola desde el padre";
    }

    public function metodo1(){
      return "Este es el metodo Padre";
    }
  }

  class claseHijo extends clasePadre{
    public function metodoHijo(){
      //return self::metodoPadre();
      //return self::metodo1(); //Cuando se usa self, usará el metodo de la misma clase
      return parent::metodo1(); //Cuando se usa parent, usará el metodo de la clase heredada
    }

    public function metodo1(){
      return "Este es el metodo hijo";
    }

  }

  /* La herencia es obtener todas las propuedades de una
  clase a otra, mediante la palabra reservada -extends-*/

  /*$obj = new claseHijo();
  echo $obj -> metodoPadre();*/

  /*Instancia rapida o de doble puntuación*/
  echo claseHijo::metodoPadre()."<br />";
  echo claseHijo::metodoHijo();

?>
