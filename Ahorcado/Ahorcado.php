<?php

require './vendor/autoload.php';

class Ahorcado {
  private $palabra = [];
  private $intentos;
  private $letra = [];
  private $palabraOculta;

  public function __construct($palabra, $intentos) {
    $this->intentos = $intentos;
    $this->palabra = $palabra;
  }
  public function damePalabra() {
    return $this->palabra;
  }
  public function dameIntentos() {
    return $this->intentos;
  }

  public function mostrar()
  {
    $array = str_split($this->palabra);

    foreach ($array as $key => $value) {
      $array[$key] = "_";
      foreach ($this->letra as $letra) {
        if ( $letra == $value){
          $array[$key] = $letra;
        }
      }
    }

    $this->palabraOculta = implode(" ",$array);

    return $this->palabraOculta;

  }
  
  public function pasarLetra($letra)
  {
    $palabra = $this->palabra;
    $array = $this->letra;

    foreach ($array as $key => $value) {
      if ($value == $letra){
        $this->intentos = $this->intentos-1;
        return false;
      }
    }

    $this->letra[] = $letra;
    if (substr_count($palabra,$letra)>0) {
      return true;
    }    
    $this->intentos = $this->intentos-1;
    return false;
    
  }
  public function dameIntentosRestantes()
  {
    return $this->intentos;
  }
  public function perdio()
  {
    if($this->intentos == 0){
      return true;
    } 
    return false;
  }
  public function gano()
  {
  }
}

$ahorcado = new Ahorcado("palabra", 5);
$ahorcado->pasarLetra("c");
$ahorcado->pasarLetra("a");
$ahorcado->pasarLetra("z");
$ahorcado->pasarLetra("p");
$ahorcado->pasarLetra("i");
$ahorcado->pasarLetra("t");
$ahorcado->pasarLetra("t");
// $ahorcado->pasarLetra("h");



$ahorcado->mostrar();

var_dump($ahorcado);