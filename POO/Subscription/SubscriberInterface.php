<?php
namespace MixPlay\Math;

interface SubscriberInterface
{
    public function setEmail($email);
    public function getEmail();
    public function Subscribe(PlanInterface $plan);
    public function Cancel();
    public function getPlan(): PlanInterface;
}