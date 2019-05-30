<?php
require_once 'Billetera.php';
class BilleteraEnPesos implements Billetera {

    private $billetes = [];

    public function mostrar()
    {
        $total = 0;
        foreach ($this->billetes as $key => $value) {
            $total = $total + ($key * $value);
        }
        return $total;
    }

    public function agregar($billete,$cantidad)
    {   
        if(!isset($this->billetes[$billete])){
            $this->billetes[$billete] = 0;
        }
        $this->billetes[$billete] = $cantidad + $this->billetes[$billete];

        return true;
    }
    public function sacar($billete,$cantidad)
    {
        if($this->billetes[$billete] < $cantidad) {
            return false;
        }
        $this->billetes[$billete] = $this->billetes[$billete] - $cantidad ;
        
        return true;
    }

}
