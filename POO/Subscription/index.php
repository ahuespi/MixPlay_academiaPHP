<?php

require "../vendor/autoload.php";

use MixPlay\Math\{
    PlanInterface,
    SubscriberInterface,
    SubscriptionInterface,
    Subscriber,
    Subscription,
    TrialPlan,
    PaidPlan,
    GiftPlan
};

/*use MixPlay\Math\PlanInterface;
use MixPlay\Math\SubscriberInterface;
use MixPlay\Math\SubscriptionInterface;
use MixPlay\Math\TrialPlan;
use MixPlay\Math\PaidPlan;
use MixPlay\Math\GiftPlan;*/

// Instaciacion de Planes
$paidPlan = new PaidPlan;
$trialPlan = new TrialPlan;
$giftPlan = new GiftPlan;

// Instanciacion del Objeto Subscriber
$subscriber = new Subscriber;
$subscriber2 = new Subscriber;
$subscriber3 = new Subscriber;


// Seteos 
$trialPlan
    ->setName('Trial Plan')
    ->setPrice(0)
    ->setPeriod('P7D')
    ->setDescription('7 dias')
;
$giftPlan
    ->setName('Gift Plan')
    ->setPrice(49.99)
    ->setPeriod('P15D')
    ->setDescription('15 dias')
;
$paidPlan
    ->setName('Paid Plan')
    ->setPrice(99.99)
    ->setPeriod('P31D')
    ->setDescription('30 dias')
;


// Creo un Usuario
$subscriber
    ->setName("Amir")
    ->setEmail("amir.huespi@gmail.com")
    ->Subscribe($trialPlan)
;
// $subscriber2
//     ->setName("Juan")
//     ->setEmail("Juanjuan@gmail.com")
//     ->Subscribe($paidPlan)
// ;
// $subscriber3
//     ->setName("Gabriela")
//     ->setEmail("gbl@gmail.com")
//     ->Subscribe($giftPlan)
// ;

// $subscription = new Subscription($subscriber);
// $subscription2 = new Subscription($subscriber2);
// $subscription3 = new Subscription($subscriber3);

// Mensajes

echo "----------------------------------------- \n";
echo "\n    Los Planes disponibles son: \n";
echo "\n";
echo ('  | * ' . $trialPlan->getName() . " - Valor: $" . $trialPlan->getPrice() . "     - Periodo de: " . $trialPlan->getDescription() . "\n");
echo ('  | * ' . $giftPlan->getName() . "  - Valor: $" . $giftPlan->getPrice() . " - Periodo de: " . $giftPlan->getDescription() . "\n");
echo ('  | * ' . $paidPlan->getName() . "  - Valor: $" . $paidPlan->getPrice() . " - Periodo de: " . $paidPlan->getDescription() . "\n");
echo "\n----------------------------------------- \n";

var_dump($subscriber); die;
// USUARIO 1
echo "\n  | El Nombre del usuario es          =   " . $subscriber->getName() . "\n";
echo "  | El Email del usuario es           =   " . $subscriber->getEmail() . "\n";
echo "  | El Plan actual de ". $subscriber->getName() . " es         =   " . $subscriber->getPlan()->getName() . "\n";
echo "  | Duracion del plan actual          =   " . $subscriber->getPlan()->getDescription() . "\n";
echo "  | Precio del plan actual            =   $" . $subscriber->getPlan()->getPrice() . "\n";
echo "  | Creacion del plan actual          =   " . $subscription->getCreateData() . "\n";
echo "  | Finalizacion del plan actual      =   " . $subscription->getExpirationData() . "\n";
echo "\n----------------------------------------- \n";

// // USUARIO 2
// echo "\n  | El Nombre del usuario es          =   " . $subscriber2->getName() . "\n";
// echo "  | El Email del usuario es           =   " . $subscriber2->getEmail() . "\n";
// echo "  | El Plan actual de ". $subscriber2->getName() . " es         =   " . $subscription2->getPlan()->getName() . "\n";
// echo "  | Duracion del plan actual          =   " . $subscription2->getPlan()->getDescription() . "\n";
// echo "  | Precio del plan actual            =   $" . $subscription2->getPlan()->getPrice() . "\n";
// echo "  | Creacion del plan actual          =   " . $subscription2->getCreateData() . "\n";
// echo "  | Finalizacion del plan actual      =   " . $subscription2->getExpirationData() . "\n";
// echo "\n----------------------------------------- \n";

// // USUARIO 3
// echo "\n  | El Nombre del usuario es          =   " . $subscriber3->getName() . "\n";
// echo "  | El Email del usuario es           =   " . $subscriber3->getEmail() . "\n";
// echo "  | El Plan actual de ". $subscriber3->getName() . " es     =   " . $subscription3->getPlan()->getName() . "\n";
// echo "  | Duracion del plan actual          =   " . $subscription3->getPlan()->getDescription() . "\n";
// echo "  | Precio del plan actual            =   $" . $subscription3->getPlan()->getPrice() . "\n";
// echo "  | Creacion del plan actual          =   " . $subscription3->getCreateData() . "\n";
// echo "  | Finalizacion del plan actual      =   " . $subscription3->getExpirationData() . "\n";








