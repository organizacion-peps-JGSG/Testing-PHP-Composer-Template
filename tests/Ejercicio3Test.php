<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */

use PHPUnit\Framework\TestCase;
use Ejercicios\Ejercicio3;

class Ejercicio3Test extends TestCase
{

    private $exercise;

    protected function setUp(): void
    {
        parent::setUp();
        $this->exercise = new Ejercicio3();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_getQualification()
    {
        $this->assertEquals("Muy deficiente", $this->exercise->getQualification(0));
        $this->assertEquals("Muy deficiente", $this->exercise->getQualification(1));
        $this->assertEquals("Muy deficiente", $this->exercise->getQualification(2));
        $this->assertEquals("Insuficiente", $this->exercise->getQualification(3));
        $this->assertEquals("Insuficiente", $this->exercise->getQualification(4));
        $this->assertEquals("Suficiente", $this->exercise->getQualification(5));
        $this->assertEquals("Bien", $this->exercise->getQualification(6));
        $this->assertEquals("Notable", $this->exercise->getQualification(7));
        $this->assertEquals("Notable", $this->exercise->getQualification(8));
        $this->assertEquals("Sobresaliente", $this->exercise->getQualification(9));
        $this->assertEquals("Sobresaliente", $this->exercise->getQualification(10));
        $this->assertEquals("Nota no valida", $this->exercise->getQualification(-1));
        $this->assertEquals("Nota no valida", $this->exercise->getQualification(11));
    }
}