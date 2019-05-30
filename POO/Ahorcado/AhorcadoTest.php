<?php
require_once('./vendor/autoload.php');
require('Ahorcado.php');

use PHPUnit\Framework\TestCase;

final class AhorcadoTest extends TestCase
{
  public function testExisteAhorcado() {
    $this->assertTrue(class_exists("Ahorcado"));
  }

  public function testPalabraEnConstructor() {
    $ahorcado = new Ahorcado("chachara", 5);
    $palabra = $ahorcado->damePalabra();
    $this->assertEquals($palabra, $ahorcado->damePalabra());
  }

  public function testTieneIntentos() {
    $intentos = rand(0, 500);
    $ahorcado = new Ahorcado("aeou", $intentos);
    $this->assertEquals($intentos, $ahorcado->dameIntentos());
  }

  public function testEstaLaLetra() {
    $ahorcado = new Ahorcado("chachara", 5);
    $palabra = $ahorcado->damePalabra();
    $esta = $ahorcado->pasarLetra('h');
    $this->assertEquals(True, $esta, "Esta la ".$esta);
  }

  public function testNoEstaLetra() {
    $ahorcado = new Ahorcado("chachara", 5);
    $palabra = $ahorcado->damePalabra();
    $esta = $ahorcado->pasarLetra('e');
    $this->assertEquals(False, $esta, "No esta");
  }

  public function testRestaIntentos() {
    $ahorcado = new Ahorcado("chachara", 5);
    $palabra = $ahorcado->damePalabra();
    $intentos = $ahorcado->dameIntentos();
    $this->assertEquals($intentos,$ahorcado->dameIntentosRestantes());
    
    $ahorcado->pasarLetra('z');
    $intentos = $ahorcado->dameIntentos();
    $this->assertEquals($intentos,$ahorcado->dameIntentosRestantes());
    
    $ahorcado->pasarLetra('h');
    $intentos = $ahorcado->dameIntentos();
    $this->assertEquals($intentos,$ahorcado->dameIntentosRestantes());
    
    $ahorcado->pasarLetra('w');
    $intentos = $ahorcado->dameIntentos();
    $this->assertEquals($intentos,$ahorcado->dameIntentosRestantes());
  }

  public function testSiRepiteLetra() {
    $ahorcado = new Ahorcado("chachara", 5);
    $palabra = $ahorcado->damePalabra();
    $intentos = $ahorcado->dameIntentos();
    
    $this->assertEquals($intentos,$ahorcado->dameIntentosRestantes());
    
    $ahorcado->pasarLetra('h');
    $dameIntentos = $ahorcado->dameIntentosRestantes();
    $this->assertEquals($dameIntentos,$ahorcado->dameIntentosRestantes());
    
    $ahorcado->pasarLetra('h');
    $dameIntentos = $ahorcado->dameIntentosRestantes();
    $this->assertEquals($dameIntentos,$ahorcado->dameIntentosRestantes());
    
    $ahorcado->pasarLetra('h');
    $dameIntentos = $ahorcado->dameIntentosRestantes();
    $this->assertEquals($dameIntentos,$ahorcado->dameIntentosRestantes());

  }

  function testMostrarTodoOculto() {
    $ahorcado = new Ahorcado("cha", 5);
    $this->assertEquals("_ _ _",$ahorcado->mostrar());
  }

  function testMostrarCasiTodoOculto() {
    $ahorcado = new Ahorcado("cha", 5);
    $palabra = $ahorcado->damePalabra();
    
    $ahorcado->pasarLetra("h");
    $this->assertEquals('_ h _',$ahorcado->mostrar());
    $this->assertFalse($ahorcado->gano());

    $ahorcado->pasarLetra("a");
    $this->assertEquals('_ h a',$ahorcado->mostrar());
    $this->assertFalse($ahorcado->gano());

    $ahorcado->pasarLetra("c");
    $this->assertEquals('c h a',$ahorcado->mostrar());
    $this->assertTrue($ahorcado->gano());
  }

  // function testGano() {
  //   $ahorcado = new Ahorcado("ab", 5);
  //   $palabra = $ahorcado->damePalabra();
  //   $ahorcado->pasarLetra("a");
  //   $this->assertFalse($ahorcado->perdio());
  //   $this->assertFalse($ahorcado->gano());

  //   $ahorcado->pasarLetra("b");
  //   $this->assertFalse($ahorcado->perdio());
  //   $this->assertTrue($ahorcado->gano());
  // }

  // function testPerdio() {
  //   $ahorcado = new Ahorcado("a", 1);
  //   $palabra = $ahorcado->damePalabra();
  //   $ahorcado->pasarLetra("z");
  //   $this->assertTrue($ahorcado->perdio());
  //   $this->assertFalse($ahorcado->gano());
  //   $this->assertEquals(0, $ahorcado->dameIntentosRestantes());
  // }

}

// jcmc72@gmail.com