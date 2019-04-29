<?php
require_once "Controllers/ControllerInterface.php";

class Routes
{
    private $controllers = [];

    public function addController($url, ControllerInterface $controller)
    {
        $this->controllers[$url] = $controller;
        return true;
    }

    /* Dado una URL este metodo tiene que encontrar que controller puede
    atenderlo y llamar al controller correspondiente */ 

    public function dispatch($url) 
    {
        foreach ($this->controllers as $key => $controllers) {
            if ($key == $url){
                return $controllers;
            }
        }
    }   
}
    