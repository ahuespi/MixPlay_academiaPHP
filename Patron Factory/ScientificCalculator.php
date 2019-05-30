<?php

namespace MixPlay\Math;

class ScientificCalculator extends Calculator
{
    public function __construct($initial = 0)
    {
        parent::__construct($initial);
    }

    public function pow($x) : Calculator
    {
        $this->result = $this->result ** $x;

        return $this;
    }
}
