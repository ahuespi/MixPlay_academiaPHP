<?php

// class ClassPila
// {
//     protected $size;
//     protected $collection = [];

//     public function __construct()
//     {
//         $this->size = 0;
//         $this->collection = [];
//     }

//     public function isEmpty()
//     {
//         // if ($this->size == 0) {
//         //     return true;
//         // }
//         // return false;
//     }
//     public function apilar($elem)
//     {
//         $this->collection[] = $elem;
//         $this->size++;
//         return $elem . " se agregó al array \n";
//     }
//     public function desapilar()
//     {
//         $elem = end($this->collection);
//         unset ($this->collection[$this->size-1]);
//         $this->size--;
//         return $elem;
//     }
//     // public function verPrimero()
//     // {
//     //     return $this->collection[0];
//     // }
//     // public function print()
//     // {
//     //     foreach (array_reverse($this->collection) as $k) {
//     //         echo $k . "\n";
//     //     }
//     // }
// }

/*
dante.pawlow@gmail.com
*/

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