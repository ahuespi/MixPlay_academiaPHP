<?php 

interface AlmacenInterface
{
    public function getName();
    public function getStock();
    public function getProduct(ProductsInterface $product);
    public function getBalance();
}