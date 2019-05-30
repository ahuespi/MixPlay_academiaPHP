<?php

class Client implements ClientInterface
{
    private $name;
    protected $balance;
    // Cambiarlo a bankAccount para no confundir con el del banco
    public $products = [];

    public function __construct($name, $bankAccount)
    {
        $this->name = $name;
        $this->balance = $bankAccount;
    }
    public function getName()
    {
        echo $this->name;
        return $this;
    }
    /* Esta funcion llama a la plata del banco
        $this->balance->getBalance();*/
    public function getInfo()
    {
        echo "Cliente: " . $this->name . " | " . "Banco: " . $this->balance->getName() . " | " . "Saldo: $" . $this->balance->getBalance() . "\n";
        return $this;
    }
    public function addProduct(ProductsInterface $product)
    {
        $this->products[] = $product;
        echo $this->name ." agregó al carrito: " . $product->getName() . " - $".$product->getPrice()."\n";
        return $this;
    }
    public function removeProduct(ProductsInterface $product)
    {
        foreach ($this->products as $k => $v) {
            if($v->getName() == $product->getName()){
                unset($this->products[$k]);
                $this->products = array_values($this->products);
                echo $this->name." dejó un producto: ".$v->getName()." +$".$v->getPrice()."\n";
            }
        } 
        return $this;
    }
    private function sumProducts()
    {
        $sum = 0;
        foreach ($this->products as $key => $value) {
            $sum += (int)$value->getPrice();
        }
        return $sum;
    }
    private function validateBuyProduct()
    {
        // true / false 
    }
    public function buyProducts()
    {
        $sumProducts = $this->sumProducts();
        // if (!$this->validateBuyProduct()) {
        //     return false;
        // }
        if ($sumProducts <= $this->balance->getBalance()) {
            if ($sumProducts == 0) {
                if ($this->products == []) {
                    echo "\nEl carrito está vacio\n";
                }
                echo "\nNo tienes nada agregado al carrito. Agregá algo para poder sumar el monto";
            } else {
                echo "\nComprando - El total a pagar es: $".$sumProducts." - Compra exitosa \n";
                $this->products = [];
                $this->balance->substractBalance($sumProducts);
            }
        } else {
            echo "\nNo le alcanza el saldo para compra todo";
        }
    }
}