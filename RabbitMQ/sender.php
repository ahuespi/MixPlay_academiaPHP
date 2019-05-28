<?php
/* require_once '../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;
 
$connection = new AMQPConnection('localhost', 8080, 'guest', 'guest');
$channel = $connection->channel();
 
$channel->queue_declare('email_queue', false, false, false, false);
 
$data = json_encode($_POST);
 
$msg = new AMQPMessage($data, array('delivery_mode' => 2));
$channel->basic_publish($msg, '', 'email_queue');
 
header('Location: form.php?sent=true'); */

require_once '../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
// $connection = new AMQPStreamConnection('10.90.242.122', 10001, 'guest', 'guest');
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();
$channel->queue_declare('prueba1', false, false, false, false);

$msg = new AMQPMessage('mensaje de pruebaasdasdsadasdsa');
$channel->basic_publish($msg, '', 'prueba1');

echo " [x] Sent 'Hello World!'\n";

$channel->close();
$connection->close();