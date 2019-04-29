<?php
require "./vendor/autoload.php";
require "ControllerInterface.php";
require "TestController.php";
require "routes.php";

use PHPUnit\Framework\TestCase;

 
final class RouteRest extends TestCase
{
    /* private $route;
    private $testController; */
    public function setUp():void
    {
        $this->route = new Routes();
        $this->testController = new TestController;
    }  
    
    public function testExistRoute()
    {
        $this->assertTrue(class_exists('Routes'));
    }

    public function testAddController()
    {
        $this->assertTrue($this->route->addController('/home', new TestController));
    }

    public function testDispatch()
    {
        $this->route->addController('/home', $this->testController);
        $this->assertEquals($this->testController, $this->route->dispatch('/home'));
    }
    public function testDispatchNotFound()
    {
        $this->route->addController('/about-us', $this->testController);
        
        $this->assertEquals(false, $this->route->dispatch('/about'));
    }
}