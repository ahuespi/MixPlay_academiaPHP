<?php
require_once 'Billetera.php';           
require_once 'BilleteraEnPesos.php';

class EstadisticasBilleteras implements Billetera
{
    private $billetera;
    private $agregar = [];
    private $sacar = [];

    public function __construct(Billetera $billetera)
    {
        $this->billetera = $billetera;
    }
    public function agregar($billete, $cantidad)
    {

        if(!isset($this->agregar[$billete])){
            $this->agregar[$billete] = 0;
        }
        $this->agregar[$billete] = $cantidad + $this->agregar[$billete];
        
        //$this->agregar[] = 'Se agregó ' . $cantidad . ' billetes de: $' . $billete . "\n";
        
        return $this->billetera->agregar($billete, $cantidad);
        
    }
    public function sacar($billete, $cantidad)
    {
        if(!isset($this->sacar[$billete])){
            $this->sacar[$billete] = 0;
        }
        $this->sacar[$billete] += $cantidad;
        return $this->billetera->sacar($billete, $cantidad);
    }
    public function mostrar()
    {
        return $this->billetera->mostrar();
    }

    public function mostrarEstadisticas()
    {
        foreach ($this->agregar as $key => $value) {
            echo 'Se agregó '. $value . ' billetes de: $' . $key . "\n";
            //print_r ('Se agregó '. $value . ' de: ' . $key . "\n");
        }
        foreach ($this->sacar as $key => $value) {
            echo 'Se saco '. $value . ' billetes de: $' . $key . "\n";
        }
        
    }
}
// $billetera = new BilleteraEnPesos();
// $c = new EstadisticasBilleteras($billetera);
// $c->agregar(1,1);
// $c->agregar(2,1);
// $c->sacar(2,1);
// $c->agregar(1,1);
// echo $c->mostrarEstadisticas();

// print_r($c);