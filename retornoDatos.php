<?php

class retornoDatos{
  //tipo string
  //tipo entero
  //tipo arreglo
  //tipo json

  public function retornaString($edad){
    if ($edad > 18) {
      return "Es mayor de edad";
    }else{
      return "No es mayor de edad";
    }
  }

  public function retornaEntreno($valor){
    if ($valor > 0) {
      return 1;
    }else{
      return 0;
    }
  }

  public function retornaArreglo($ciclos){
    $datos = array();

    for ($i=0; $i < $ciclos; $i++) {
      $datos[$i] = $i;
    }
    return $datos;
  }

  public function retornaJson(){
    $arrayJson=array(
      "hdd" => 500,
      "pantalla" => 21,
      "ram" => 8
    );

    return json_encode($arrayJson);
  }

}

echo "<br />Retornando String: ";
$cadena = new retornoDatos();
var_dump($cadena->retornaString(20));

echo "<br />Retornando Entero: ";
var_dump($cadena->retornaEntreno(1));

echo "<br />Retornando Arreglo: ";
var_dump($cadena->retornaArreglo(10));

echo "<br />Retornando Json: ";
var_dump($cadena->retornaJson());


 ?>
