<?php

namespace MixPlay\Math;

use MixPlay\Math\PlanInterface;

class GiftPlan implements PlanInterface
{
    protected $name;
    protected $period;
    protected $price;
    protected $description;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }
    public function getPeriod()
    {
        return $this->period;
    }
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
