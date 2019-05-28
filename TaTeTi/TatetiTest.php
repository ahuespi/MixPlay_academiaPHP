<?php

require "BoardInterface.php";
require "PlayerInterface.php";
require "TatetiInterface.php";
require "Board.php";
require "Tateti.php";
require "Player.php";
require "./vendor/autoload.php";

#require "index.php";

use PHPUnit\Framework\TestCase;

 
final class TatetiTest extends TestCase
{
  public function testConstruct()
  {
    // $cola = new Cola();
    // $cola->encolar(1);
    // $elemento =  $cola->desencolar();
    // $this->assertEquals($elemento, 1);
    
    $p1 = 'Amir';
    $m1 = 'O';
    $p2 = 'Amir1';
    $m2 = 'X';
    $x = 3;
    $y = 3;
    $z = 0;

    $tateti = new Tateti($p1, $m1, $p2, $m2, $x, $y, $z);
    
    $this->assertEquals($p1, $tateti->players[0]->getName());
    $this->assertEquals($m1, $tateti->players[0]->getMark());
    
    $this->assertEquals($p2, $tateti->players[1]->getName());
    $this->assertEquals($m2, $tateti->players[1]->getMark());
    
    $this->assertEquals(array(array("-","-","-"),array("-","-","-"),array("-","-","-")), $tateti->board->getBoard(), "Constructor Tateti");
    
    // Con las pruebas unitarias validamos estados.
  }
  
  public function testPlay()
  {
    $p1 = 'Amir';
    $m1 = 'O';
    $p2 = 'Amir1';
    $m2 = 'X';
    $x = 3;
    $y = 3;
    $z = 0;
    
    $tateti = new Tateti($p1, $m1, $p2, $m2, $x, $y, $z);
    $tateti->play(0,0);
    $tateti->play(1,1);
    
    $this->assertEquals("O", $tateti->board->getPosition(0,0));
    $this->assertEquals("-", $tateti->board->getPosition(0,1));
    $this->assertEquals("X", $tateti->board->getPosition(1,1));

  }

  // public function testWinner()
  // {
  //   $p1 = 'Amir';
  //   $m1 = 'O';
  //   $p2 = 'Amir1';
  //   $m2 = 'X';
  //   $x = 3;
  //   $y = 3;
  //   $z = 0;
    
  //   $tateti = new Tateti($p1, $m1, $p2, $m2, $x, $y, $z);
  //   $tateti->play(0,1);
  //   $tateti->play(1,0);
  //   $tateti->play(2,1);
  //   $tateti->play(1,2);
  //   $tateti->play(1,1);
  //   $elem = $tateti->winner();
  //   $this->assertBool(true, $elem);

  // }
}
