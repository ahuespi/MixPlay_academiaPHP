<?php 

class TimeController implements ControllerInterface
{
    public function get()
    {
        echo ' La hora y fecha es   '. date("d-m-Y (H:i:s)");
    }
    public function post()
    {
        return "Metodo POST de TIME CONTROLLER";
    }
}