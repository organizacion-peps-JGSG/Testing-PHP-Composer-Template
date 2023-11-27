<?php

use PHPUnit\Framework\TestCase;

include './Ejercicio7.php';  // Ajusta la ruta según tu estructura

class FibonacciTest extends TestCase
{
    public function testFibonacci()
    {
        // Caso de prueba para n = 0
        $this->assertEquals([], fibonacci(0));

        // Caso de prueba para n = 1
        $this->assertEquals([1], fibonacci(1));

        // Caso de prueba para n = 5
        $this->assertEquals([1, 1, 2, 3, 5], fibonacci(5));

        // Añade más casos de prueba según sea necesario
    }
}
