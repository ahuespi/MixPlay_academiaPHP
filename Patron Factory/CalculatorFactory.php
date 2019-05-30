<?php

namespace MixPlay\Math;

use InvalidArgumentException;

class CalculatorFactory
{
    
    const SCIENTIFIC = 1;
    
    const ASTRONOMIC = 2;
    
    const REGULAR = 3;

    public static $COUNTER = 0;

    private function __construct() {}

    public static function createCalculator(int $type) : Calculator
    {
        self::$COUNTER++;

        if ($type == self::SCIENTIFIC) {
            return new ScientificCalculator;
        }
        if ($type == self::ASTRONOMIC) {
            return new ScientificCalculator;
        }
        if ($type == self::REGULAR) {
            return new Calculator;
        }
        throw new InvalidArgumentException('Missing calculator type, given ' . $type);
        
    }
}
