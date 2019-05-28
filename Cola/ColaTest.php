<?php

require "Cola/Cola.php";
require "Pila/ClassPila.php";

use PHPUnit\Framework\TestCase;

 
final class ColaTest extends TestCase
{
  public function testCanBeCreatedFromValidEmailAddress()
  {
    $cola = new Cola();
    $cola->encolar(1);
    $elemento =  $cola->desencolar();
    $this->assertEquals($elemento, 1);
  }
 
  public function testColaOrder()
  {
    $cola = new Cola();
    $cola->encolar(1);
    $cola->encolar(2);
    $cola->encolar(3);
    $this->assertEquals(1, $cola->desencolar());
    $this->assertEquals(2, $cola->desencolar());
  }
 
  public function testColaOrderComplejo()
  {
    $cola = new Cola();
    $cola->encolar(1);
    $cola->encolar(2);
    $cola->encolar(3);
    $this->assertEquals(1, $cola->desencolar());
    $this->assertEquals(2, $cola->desencolar());
    $cola->encolar(4);
    $cola->encolar(5);
    $this->assertEquals(3, $cola->desencolar());
    $this->assertEquals(4, $cola->desencolar());
  }
}
 
/**
 
bajen composer en la carpeta de la cola, corran lo siguiente:
 
php composer.phar require phpunit/phpunit
 
Guardar esto en un archivo que se llame ColaTest.php
 
hacer el include de la cola y ejecutar esto.
 
-- bootstrap ./vendor/bin/phpunit ColaTest
**/