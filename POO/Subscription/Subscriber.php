<?php
namespace MixPlay\Math;

use MixPlay\Math\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    protected $name;
    protected $email;
    protected $plan;
    protected $subscription;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function Subscribe(PlanInterface $plan)
    {
        $this->subscription = new Subscription($this, $plan);
        $this->plan = $plan;
        return $this;
    }   

    public function Cancel()
    {

    }

    public function getPlan(): PlanInterface
    {
        return $this->plan;
    }
}
