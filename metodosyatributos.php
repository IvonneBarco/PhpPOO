<?php
//Se pueden declarar n atributos y n metodos

class miClase{
  //declaramos atributos
  public $atributoUno = "Hola mundo";

  //declaramos metodos
  public function miMetodo(){
    //Cómo podemos mandar a llamar un atributos
    //R/. Utilizando la pseudo variable -this-
    return $this->$atributoUno;
  }
}

 ?>
