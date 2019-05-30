<?php

class Almacen implements AlmacenInterface
{
    private $name;
    private $products = [];
    // private $product;
    private $balance;

    public function __construct($name, $bankAccount)
    {
        $this->name = $name;
        $this->balance = $bankAccount;
        // $this->products = $products;
    }

    public function getName()
    {
        echo 'Almacen: ' . $this->name . "\n";
        return $this;
    }
    public function getStock(){}
    public function getProduct(ProductsInterface $product){}

    public function getBalance()
    {
        return $this->balance;
    }
    public function getInfo()
    {
        echo "Almacen: " . $this->name . " | " . "Banco: " . $this->balance->getName() . " | " . "Saldo: $" . $this->balance->getBalance() . "\n";
        return $this;
    }
    public function sellProducts($products)
    {
        $sum = 0;
        foreach ($products as $key => $value) {
            $sum += (int)$value->getPrice();
        }
        return $this->getBalance()->addBalance($sum);
    }
}