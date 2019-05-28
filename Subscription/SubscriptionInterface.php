<?php
namespace MixPlay\Math;

interface SubscriptionInterface
{
    public function getCreateData();
    public function getExpirationData();
    public function setSubscriber(SubscriberInterface $s);
    public function setPlan(PlanInterface $plan);
}