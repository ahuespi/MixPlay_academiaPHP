<?php

require "ControllerInterface.php";
require "Ahorcado.php";

class EmpezarAhorcadoController implements ControllerInterface
{
    private $palabra;
    private $intentos;


    public function get()
    {
        $this->palabra = $_GET['palabra'];
        $this->intentos = $_GET['intentos'];
    }

    public function post()
    {        
        return new Ahorcado($this->palabra , $this->intentos);
    }
}

$c = new EmpezarAhorcadoController();
session_start();
$_SESSION['palabra'] = $_POST['palabra'];
$c->get();
$c->post();

$c->post()->pasarLetra('w');
$c->post()->pasarLetra('j');
echo $c->post()->dameIntentosRestantes();
echo $c->post()->mostrar();

// print_r($c);

