<?php

require "Interfaces\AlmacenInterface.php";
require "Interfaces\BankAccountInterface.php";
require "Interfaces\ClientInterface.php";
require "Interfaces\ProductInterface.php";

require "Almacen.php";
require "BankAccount.php";
require "Client.php";
require "Product.php";

// Almacen
// $stock = [
//     $fideos = new Product('Fideos', 10),
//     $leche = new Product('Leche', 40),
//     $jabon = new Product('Jabon', 15)
// ];

$almacenAccount = new BankAccount('Banco Ciudad', 100);
$almacen = new Almacen('La pulperia de Hitss', $almacenAccount);
$almacen->getInfo();

// Productos
$fideos = new Product('Fideos', 10);
$leche = new Product('Leche', 40);
$jabon = new Product('Jabon', 15);

echo "\n--------------------- \n\n";

// Cliente Compra productos
$martaAccount = new BankAccount('Santander Rio', 100);
$marta = new Client('Marta', $martaAccount);
$marta->getInfo(); echo "\n";
$marta
->addProduct($fideos)
// ->removeProduct($fideos) 
->addProduct($leche)  
->removeProduct($leche)
->addProduct($jabon)   
->removeProduct($jabon)
;

// Agregar, Comprar
$almacen->sellProducts($marta->products);
$marta->buyProducts();
echo "\n--------------------- \n\n";
// Informacion Actual
$almacen->getInfo(); echo "\n";
$marta->getInfo(); echo "\n";


