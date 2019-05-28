<?php

class Cola
{

    protected $p1;
    protected $p2;

    
    public function __construct()
    {
        $this->p1 = new ClassPila();
        $this->p2 = new ClassPila();
    }

    public function desencolar()
    {
        while(!$this->p1->isEmpty()){
            $this->p2->apilar($this->p1->desapilar());
        }
        return $this->p2->desapilar();
    }
    public function encolar($elem)
    {
            while(!$this->p2->isEmpty()){
                $this->p1->apilar($this->p2->desapilar());
            }
        $this->p1->apilar($elem);
        
        // return $elem . "\n";
    }
    // public function verPrimero()
    // {
    //     return $this->collection[0];
    // }
    // public function verSize()
    // {
    //     return $this->size;
    // }
    // public function isEmpty()
    // {
    //     if ($this->size == 0) {
    //         return true;
    //     }
    //     return false;
    // }
    // public function print()
    // {
    //     foreach ($this->collection as $k) {
    //         echo $k . "\n";
    //     }
    // }
}

class ClassPila
{
    protected $collection = [];
 
    public function __construct()
    {
        $this->collection = [];
    }
 
    public function isEmpty()
    {
        return count($this->collection) == 0;
    }
 
    public function apilar($elem)
    {
        $this->collection[] = $elem;
    }
 
    public function desapilar()
    {
        return array_pop($this->collection);
    }
}

$cola = new Cola();
$cola->encolar(1);
$cola->encolar(2);
$cola->encolar(3);
$cola->encolar(4);
echo $cola->desencolar();
echo $cola->desencolar();





print_r($cola);
