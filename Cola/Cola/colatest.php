<?php

class Cola1 
{

    private $cola = [];

    public function add($dato)
    {
        $this->cola[] = $dato;
    }

    public function remove()
    {
        return array_shift($this->cola);
    }

    public function empty()
    {
        return count($this->dato) == 0;
    }
}

$c = new Cola1();

$c->add('Pepe');
$c->add('Pepe1');
$c->add('Pepe2');
$c->add('Pepe3');
$c->add('Pepe4');

$c->remove();
$c->remove();
$c->remove();

print_r($c);