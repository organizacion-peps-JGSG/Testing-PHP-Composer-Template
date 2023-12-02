<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */

use PHPUnit\Framework\TestCase;
use Ejercicios\Ejercicio4;

class Ejercicio4Test extends TestCase
{
    private $exercise;

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
        $this->assertEquals(0, $this->exercise->whoWins("piedra", "piedra"));
        $this->assertEquals(0, $this->exercise->whoWins("papel", "papel"));
        $this->assertEquals(0, $this->exercise->whoWins("tijera", "tijera"));
        $this->assertEquals(2, $this->exercise->whoWins("piedra", "papel"));
        $this->assertEquals(1, $this->exercise->whoWins("piedra", "tijera"));
        $this->assertEquals(1, $this->exercise->whoWins("papel", "piedra"));
        $this->assertEquals(2, $this->exercise->whoWins("papel", "tijera"));
        $this->assertEquals(1, $this->exercise->whoWins("tijera", "papel"));
        $this->assertEquals(2, $this->exercise->whoWins("tijera", "piedra"));
    }
}