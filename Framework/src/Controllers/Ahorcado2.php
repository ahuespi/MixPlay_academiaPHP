<?php

class Ahorcado2 
{
    private $palabra;
    private $intentos;
    private $tablero;
    private $casillas;

    public function __construct($palabra, $intentos)
    {
        $this->palabra = $palabra;
        $this->intentos = $intentos;
        
        $this->casillas = str_split($palabra);
        $this->crearTablero();
    } 

    public function mostrar()
    {
        return implode($this->tablero);
    }

    public function crearTablero()
    {
        $largo = strlen($this->palabra);
        for($i = 0; $i < $largo; $i++){
            $this->tablero[$i] = '_';
        }
    }

    public function pasarLetra($letra)
    {
        if($this->intentos > 0)
        {//por que aqui no funciona strrpos?
            if(in_array($letra, $this->casillas)){
                $this->marcar($letra);
                return true;
             }else{
                 $this->intentos -= 1;
                 return false;
             }
        }else {
            //$this->perdio();
            return false;
        }
        
    }

    public function dameIntentos()
    {
        return $this->intentos;
    } 
    
    public function marcar($letra)
    {
        for($i = 0; $i < strlen($this->palabra); $i++)
        {
            if($letra === $this->tablero[$i]){
                return $this->intentos -= 1;
            }
            elseif($letra === $this->palabra[$i]) {
                $this->tablero[$i] = $letra;
                //$this->gano();
            }
        }
    }

    public function gano()
    {
        foreach($this->tablero as $key => $value)
        {
            if($value !== '_'){
            } else {
                return false;
            }
        }
        //echo 'gano';
        return true;
    }

    public function perdio()
    {
        foreach($this->tablero as $key => $value)
        {
            if($value === '_'){
            } else {
                if($this->intentos === 0){
                    //echo "perdio";
                    return true;
                }
                return false;
            }
        }
        //echo 'perdio';
        return true;
    }

    public function damePalabra()
    {
        return $this->palabra;
    }

    public function dameIntentosRestantes()
    {
        return $this->intentos;
    }
}


// $c = new Ahorcado('pasapalabra', 10);

// print_r($c);