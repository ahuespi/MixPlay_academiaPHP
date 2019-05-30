<?php

class BankAccount implements BankAccountInterface
{
    private $name;
    protected $balance;

    public function __construct($name, $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function substractBalance($amount)
    {
        // Validar si la resta va a dar 0;
        $this->balance -= $amount;
        return $this->balance;
    }
    public function addBalance($amount)
    {
        $this->balance += $amount;
        return $this->balance;
    }
    // addBalance
}