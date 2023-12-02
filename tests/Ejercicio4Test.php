<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */
include dirname(__FILE__).'\..\Ejercicios\Ejercicio4.php';

use PHPUnit\Framework\TestCase;

class Ejercicio4Test extends TestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        $this->exercise = new Ejercicio4();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_whoWins()
    {
        $this->assertEquals(0, $this->exercise->whoWins("piedra","piedra"));
        $this->assertEquals(0, $this->exercise->whoWins("papel","papel"));
        $this->assertEquals(0, $this->exercise->whoWins("tijera","tijera"));
        $this->assertEquals(2, $this->exercise->whoWins("piedra","papel"));
        $this->assertEquals(1, $this->exercise->whoWins("piedra","tijera"));
        $this->assertEquals(1, $this->exercise->whoWins("papel","piedra"));
        $this->assertEquals(2, $this->exercise->whoWins("papel","tijera"));
        $this->assertEquals(1, $this->exercise->whoWins("tijera","papel"));
        $this->assertEquals(2, $this->exercise->whoWins("tijera","piedra"));
    }
}