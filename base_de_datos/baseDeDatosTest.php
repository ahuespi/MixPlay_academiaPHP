<?php

require_once('./vendor/autoload.php');
require_once('baseDeDatosConDB.php');

use PHPUnit\Framework\TestCase;

final class baseDeDatosTest extends TestCase
{
    private $db;

    public function setUp() : void
    {
        $this->db = new BaseDeDatos("dbtesting", "tester");
    }

    public function tearDown() : void
    {
        $this->db->borrarDB();    
    }   

    public function testInsert()
    {
        $this->assertTrue($this->db->insert(1,'hola'));
    }

    public function testInsertFalse()
    {
        $this->assertTrue($this->db->insert(6,'hola'));
        $this->assertFalse($this->db->insert(6,'hola'));
    }
    
    public function testUpdate()
    {
        $this->assertTrue($this->db->insert(1,'hola'));
        $this->assertTrue($this->db->update(1,'pepe'));
    }

    public function testUpdateFalse()
    {
        $this->assertTrue($this->db->insert(1,'hola'));
        $this->assertFalse($this->db->update(4,'pepe'));
    }
    
    public function testDelete()
    {
        $this->assertTrue($this->db->insert(1,'hola'));
        $this->assertTrue($this->db->delete(1));
    }
    public function testDeleteFalse()
    {
        $this->assertTrue($this->db->insert(1,'hola'));
        $this->assertFalse($this->db->delete(2));
    }
    
    public function testDeleteAll()
    {
        $this->assertTrue($this->db->insert(1,'hola'));
        $this->assertTrue($this->db->insert(2,'hola'));
        $this->assertTrue($this->db->insert(3,'hola'));
        $this->assertTrue($this->db->insert(4,'hola'));
        $this->assertTrue($this->db->deleteAll());
    }

}
