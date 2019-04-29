<?php
/* 
require_once ("Controller/ControllerInterface.php"); 
require_once ("Controller/NameController.php");
require_once ("Controller/AddController.php");
require_once ("Controller/TimeController.php");
*/
/* $array = array(
    'NameController' => new NameController,
    'AddController' => new AddController,
    'TimeController' => new TimeController,
);

foreach ($array as $key) {
    echo $key->get()."\n";
    echo $key->post()."\n";
}; */


/* echo $array[$_GET['url']]->get(); 
echo "\n";
echo "\n";
echo $array[$_GET['url']]->post(); */

require_once "src/routes.php";
require_once "src/Controllers/TestController.php";
require_once "src/Controllers/Ahorcado.php";
require_once "src/Controllers/ControllerInterface.php";

$routes = new Routes();

$routes->addController('/test', new TestController);
$routes->addController('/ahorcado', new Ahorcado("Amir", 10));

$routes->dispatch('/test');
$routes->dispatch('/ahorcado');


