<?php

include './vendor/autoload.php';
include 'Drone.php';

use PHPUnit\Framework\TestCase;

final class DroneTest extends TestCase
{
    public function testClassExist()
    {
        $this->assertTrue(class_exists('Drone'));
    }

    public function testTieneBateria()
    {
        $drone = new Drone(10);

        $this->assertEquals(10, $drone->cantidadDeBateria());
    }

    public function testNoTieneBateria()
    {
        $drone = new Drone(0);

        $this->assertEquals(0, $drone->cantidadDeBateria());
    }

    public function testBateriaDespuesDeMover()
    {
        $drone = new Drone(10);
        $drone->mover(2, 5);

        $this->assertEquals(3, $drone->cantidadDeBateria());

        $drone->mover(5, 5);

        $this->assertEquals(0, $drone->cantidadDeBateria());

        $this->assertFalse($drone->mover(4, 4));
    }

    public function testCargarBateria()
    {
        $drone = new Drone(10);
        $drone->mover(1, 1);
        
        $this->assertEquals(8, $drone->cantidadDeBateria());
        
        $drone->mover(0, 0);

        $this->assertEquals(10, $drone->cantidadDeBateria());
    }

    public function testMover()
    {
        $drone = new Drone(10);

        $this->assertTrue($drone->mover(1, 1));
    }

    public function testNoMover()
    {
        $drone = new Drone(0);

        $this->assertFalse($drone->mover(1, 1));
    }

    public function testHistorial()
    {
        $drone = new Drone(10);
        $drone->mover(1, 1);
                
        $drone->mover(0, 0);
        
        $this->assertCount(2, $drone->historial());
        
        $drone->mover(0, 0);
        
        $this->assertCount(3, $drone->historial());
    }

    public function testHistorialVacio()
    {
        $drone = new Drone(10);

        $this->assertCount(0,  $drone->historial());
    }
}
