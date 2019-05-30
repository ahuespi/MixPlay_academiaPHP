<?php

class Board implements BoardInterface
{
    public $board = [];

    public function __construct($x, $y)
    {

        $x = $x - 1; // Columnas
        $y = $y - 1; // Filas
        $fila = [];

        for ($i=0; $i <= $y; $i++) { 
            $fila[] = "-";
        }

        for ($i=0; $i <= $x ; $i++) { 
            $this->board[] = $fila;
        }
    }
    public function getBoard()
    {
        return $this->board;
    }

    public function mark($x, $y, $player)
    {
        $this->board[$x][$y] = $player;
    }
    public function getPosition($x, $y)
    {
        return $this->board[$x][$y];
    }
    public function show()
    {
        foreach ($this->board as $key) {
            foreach ($key as $value) {
                echo $value;
            }
            echo "\n";
        }
        return $this;

        
    }
    public function complete()
    {
        foreach ($this->board as $key) {
            foreach ($key as $value) {
                if($value == '-'){
                    return false;
                }
            }
        }
        echo "El tablero esta lleno" . "\n";
        return true;
    }
}
