<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */
use PHPUnit\Framework\TestCase;
use Ejercicios\Ejercicio6;

class Ejercicio6Test extends TestCase
{

    private Ejercicio6 $exercise;

    protected function setUp(): void
    {
        parent::setUp();
        $this->exercise = new Ejercicio6(0);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_esPrimo()
    {
        $this->assertTrue($this->exercise->esPrimo(1), 'El número 1 es primo');
        $this->assertTrue($this->exercise->esPrimo(2), 'El número 2 es primo');
        $this->assertTrue($this->exercise->esPrimo(3), 'El número 3 es primo');
        $this->assertFalse($this->exercise->esPrimo(4), 'El número 4 es primo');
        $this->assertTrue($this->exercise->esPrimo(5), 'El número 5 es primo');
        $this->assertFalse($this->exercise->esPrimo(6), 'El número 6 es primo');
        $this->assertTrue($this->exercise->esPrimo(7), 'El número 7 es primo');
        $this->assertFalse($this->exercise->esPrimo(8), 'El número 8 es primo');
        $this->assertFalse($this->exercise->esPrimo(9), 'El número 9 es primo');
        $this->assertFalse($this->exercise->esPrimo(10), 'El número 10 es primo');
        $this->assertTrue($this->exercise->esPrimo(11), 'El número 11 es primo');
        $this->assertFalse($this->exercise->esPrimo(12), 'El número 12 es primo');
        $this->assertTrue($this->exercise->esPrimo(13), 'El número 13 es primo');
    }
}