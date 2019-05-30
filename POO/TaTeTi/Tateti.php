<?php

class Tateti implements TatetiInterface
{
    public $players = [];
    public $board;
    public $z;

    public function __construct($p1,$m1,$p2,$m2, $x, $y, $z)
    {
        $jugador1 = new Player($p1,$m1);
        $jugador2 = new Player($p2,$m2);
        $this->players[] = $jugador1;
        $this->players[] = $jugador2;
        $board = new Board($x,$y);
        $this->board = $board;

        $this->z = $z;
    }
    public function getBoard(BoardInterface $board)
    {   
        // return $this->board = $board;
    }
    public function play($x,$y)
    {
        if($this->board->getPosition($x,$y) == '-'){
            if (!$this->winner() && !$this->board->complete()) {
                switch ($this->z) {
                    case 1:
                        $player = $this->players[$this->z]->getMark();
                        $this->board->mark($x, $y, $player);
                        $this->z = $this->z -1;
                        break;
                    
                    case 0:
                    $player = $this->players[$this->z]->getMark();
                    $this->board->mark($x, $y, $player);
                    $this->z = $this->z + 1;
                    break;
                        break;
                }
            } else {
                echo 'La casilla esta ocupada' . "\n";
                return;
            }
        }
        $this->board->show();
        echo "\n";
    }
    public function winner()
    {
        for($i = 0; $i < 2; $i++)
        {
            
            if (    
                // Vertical
                $this->board->getPosition($i,0) != '-' && 
                $this->board->getPosition($i,0) === $this->board->getPosition($i, 1) && 
                $this->board->getPosition($i, 1) == $this->board->getPosition($i, 2)) {
                    echo 'Hay ganador'. "\n";
                    die;
                    return true;
            } elseif (  
                // Horizontal
                $this->board->getPosition(0, $i) != '-' &&  
                $this->board->getPosition(0, $i) == $this->board->getPosition(1, $i) && 
                $this->board->getPosition(1, $i) == $this->board->getPosition(2, $i)) {
                    echo 'Hay ganador'. "\n";
                    die;
                    return true;
            } elseif (  
                // Diagonal de Abajo hacia Arriba
                $this->board->getPosition(2, 0) != '-' &&  
                $this->board->getPosition(2, 0) == $this->board->getPosition(1, 1) && 
                $this->board->getPosition(1, 1) == $this->board->getPosition(0, 2)) {
                    echo 'Hay ganador'. "\n";
                    die;
                    return true;
            } elseif (  
                // Diagonal de Arriba hacia abajo
                $this->board->getPosition(0, 0) != '-' &&  
                $this->board->getPosition(0, 0) == $this->board->getPosition(1, 1) && 
                $this->board->getPosition(1, 1) == $this->board->getPosition(2, 2)) {
                    echo 'Hay ganador'. "\n";
                    die;
                    return true;
            }      
        }
        return false;
    }
}