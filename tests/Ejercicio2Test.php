<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */
include dirname(__FILE__).'\..\Ejercicios\Ejercicio2.php';

use PHPUnit\Framework\TestCase;
use Ejercicios\Ejercicio2;

class Ejercicio2Test extends TestCase
{
    protected $checkAge;

    protected function setUp(): void
    {
        parent::setUp();
        $this->checkAge = new Ejercicio2();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_esMayorEdad()
    {
        $this->assertFalse($this->checkAge->isLegalAge(5), 'Es mayor de edad 5 = False');
        $this->assertTrue($this->checkAge->isLegalAge(18), 'Es mayor de edad 18 = True');
        $this->assertTrue($this->checkAge->isLegalAge(21), 'Es mayor de edad 21 = True');
    }
}