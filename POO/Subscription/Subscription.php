<?php
namespace MixPlay\Math;

use MixPlay\Math\SubscriptionInterface;

class Subscription implements SubscriptionInterface
{

    protected $createdAt;
    protected $subscriber;
    protected $plan;
    
    public function __construct(SubscriberInterface $subscriber, PlanInterface $plan)
    {
        // En el constructor nunca va return
        $this->subscriber = $subscriber;
        $this->plan = $plan;
        $this->createdAt = new \DateTime();
    }   

    public function getCreateData()
    {
        return $this->createdAt->format('d-m-Y');
        
    }
    public function getExpirationData()
    {
         
        $x = $this->subscriber->getPlan()->getPeriod();
        return $this->createdAt->add(new \DateInterval($x))->format('d-m-Y');
    }
    public function setSubscriber(SubscriberInterface $s){
        $this->subscriber = $s;
        return $this;
    }
    public function setPlan(PlanInterface $plan){
        $this->subscriber->setPlan($plan);
        return $this;
    }

    public function getSubscriber()
    {
        return $this->subscriber;
    }
    public function getPlan()
    {
        return $this->subscriber->getPlan();
    }
}

