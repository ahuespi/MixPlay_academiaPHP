<?php

class Ahorcado3
{
    private $palabra;
    private $intentos;

    public function __construct($palabra, $intentos)
    {
        $this->palabra = $palabra;
        $this->intentos = $intentos;
    }

    public function damePalabra()
    {
        return $this->palabra;
    }

    public function dameIntentos()
    {
        return $this->intentos;
    }
    public function mostrar()
    { }

    public function pasarLetra($letra)
    { }

    public function dameIntentosRestantes()
    { }

    public function perdio()
    { }

    public function gano()
    { }
}
