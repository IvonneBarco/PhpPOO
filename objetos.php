<?php

class miClase{
  //mis atributps
  public $resultado = 0;
  //mis metodos
  public function miMetodo($v1,$v2){
    $this->$resultado = $v1 + $v2;
    return $this->$resultado;
  }
}

//Instanciar o declarar un objeto
$miObjeto = new miClase();
echo $miObjeto-> miMetodo(5, 15);

 ?>
