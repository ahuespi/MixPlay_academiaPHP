<?php

class Player implements PlayerInterface
{
    private $name;
    private $mark;

    public function __construct($name,$mark)
    {
        $this->name = $name;
        $this->mark = $mark;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getMark()
    {
        return $this->mark;
    }
}
