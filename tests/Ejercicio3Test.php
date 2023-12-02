<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */
include dirname(__FILE__).'\..\Ejercicios\Ejercicio3.php';

use PHPUnit\Framework\TestCase;

class Ejercicio3Test extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_getQualification()
    {
        $this->assertEquals("Muy deficiente", getQualification(0));
        $this->assertEquals("Muy deficiente", getQualification(1));
        $this->assertEquals("Muy deficiente", getQualification(2));
        $this->assertEquals("Insuficiente", getQualification(3));
        $this->assertEquals("Insuficiente", getQualification(4));
        $this->assertEquals("Suficiente", getQualification(5));
        $this->assertEquals("Bien", getQualification(6));
        $this->assertEquals("Notable", getQualification(7));
        $this->assertEquals("Notable", getQualification(8));
        $this->assertEquals("Sobresaliente", getQualification(9));
        $this->assertEquals("Sobresaliente", getQualification(10));
        $this->assertEquals("Nota no valida", getQualification(-1));
        $this->assertEquals("Nota no valida", getQualification(11));
    }
}