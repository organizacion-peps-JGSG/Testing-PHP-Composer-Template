<?php

use PHPUnit\Framework\TestCase;

include './funciones/ejercicio9.php'; // Asegúrate de incluir el archivo que contiene las funciones

class test_ejercicio9 extends TestCase
{
    public function testSuma()
    {
        $this->assertEquals(7, suma(3, 4));

        $this->assertEquals(-3, suma(5, -8));

    }

    public function testResta()
    {
        $this->assertEquals(5, resta(10, 5));

        $this->assertEquals(-15, resta(5, 20));

    }

    public function testMultiplica()
    {
        $this->assertEquals(15, multiplica(3, 5));

        $this->assertEquals(0, multiplica(8, 0));

    }

    public function testDivide()
    {
        $this->assertEquals(4, divide(12, 3));

        $this->expectException(\DivisionByZeroError::class);
        divide(5, 0);
    }
}