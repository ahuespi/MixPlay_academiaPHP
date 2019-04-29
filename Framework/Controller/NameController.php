<?php

class NameController implements ControllerInterface
{

    private $name;
    private $lastName;

    public function get()
    {
        if (isset($_GET['name']) && isset($_GET['apellido'])) {
            $this->name = $_GET['name'];
            $this->lastName = $_GET['apellido'];
            return  'Hola! '. $this->name. ' '. $this->lastName;
        }
        
        return "No hay un nombre ni un apellido";
        
    }
    public function post()
    {
        return 'Metodo post de NameController';
    }

}
