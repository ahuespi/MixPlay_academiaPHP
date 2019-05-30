<?php

require_once('./vendor/autoload.php');
require('CasiBuscaMinas.php');

use PHPUnit\Framework\TestCase;

final class BMTest extends TestCase
{
    public function crearBuscaMinas()
    {
        $buscaMinas = new BuscaMinas(3, 3);
        return $buscaMinas;
    }

    public function testExistsBuscaMinas()
    {
        $this->assertTrue(class_exists("BuscaMinas"));
    }

    public function testAgregarMina()
    {
        $buscaMinas = $this->crearBuscaMinas();

        $this->assertTrue($buscaMinas->agregarMina(1, 1));
    }
    
    public function testAgregarLaMismaMina()
    {
        $buscaMinas = $this->crearBuscaMinas();
        $buscaMinas->agregarMina(1,1);

        $this->assertFalse($buscaMinas->agregarMina(1, 1));
    }

    public function testTerminoDeJugar()
    {
        $buscaMinas = $this->crearBuscaMinas();
        $buscaMinas->agregarMina(1, 1);
        $buscaMinas->jugar(1, 1);

        $this->assertTrue($buscaMinas->terminoDeJugar(1, 1));
    }

    public function testPerdio()
    {
        $buscaMinas = $this->crearBuscaMinas();
        $buscaMinas->agregarMina(1, 1);
        $buscaMinas->jugar(1, 1);

        $this->assertTrue($buscaMinas->terminoDeJugar(1, 1));
    }

    public function testGanar()
    {
        $buscaMinas = $this->crearBuscaMinas();
        $buscaMinas->agregarMina(2, 1);
        $buscaMinas->sacarMina(2, 1);

        $this->assertTrue($buscaMinas->gano());
    }

    public function testSacarMina()
    {
        $buscaMinas = $this->crearBuscaMinas();
        $buscaMinas->agregarMina(2, 1);

        $this->assertTrue($buscaMinas->sacarMina(2, 1));
    }

    public function testSacarLaMismaMina()
    {
        $buscaMinas = $this->crearBuscaMinas();
        $buscaMinas->agregarMina(2, 1);
        $buscaMinas->sacarMina(2, 1);

        $this->assertFalse($buscaMinas->sacarMina(2, 1));
    }

    public function testAgregarAfueraDelTablero()
    {
        $buscaMinas = $this->crearBuscaMinas();

        $this->assertFalse($buscaMinas->agregarMina(4, 1));
    }

}
