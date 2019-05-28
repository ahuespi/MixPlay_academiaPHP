<?php

namespace MixPlay\Math;

use InvalidArgumentException;

class Calculator 
{
    protected $result;

    public function __construct($initial = 0)
    {
        $this->result = $initial;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function sum($x = 0)
    {
        $this->result += $x;
        return $this;
    }
    
    public function sub($x = 0)
    {
        $this->result -= $x;
        return $this;
        
    }
    
    public function mul($x = 0)
    {
        $this->result *= $x;
        return $this;
        
    }
    
    public function div($x = 1)
    {
        if ($x == 0) {
            throw new InvalidArgumentException('No se puede dividir por cero');
        }
        $this->result /= $x;
        return $this;
    }

}


