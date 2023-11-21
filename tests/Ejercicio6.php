<?php 

use PHPUnit\Framework\TestCase;

include '../Ejercicio6.php';

class test_ejercicio5 extends TestCase
{
    public function testEsPar()
    {
        $this->assertTrue(esPar(4));

        $this->assertFalse(esPar(3));

    }

    public function testEsImpar()
    {
        $this->assertTrue(esImpar(3));

        $this->assertFalse(esImpar(4));

    }

    public function testGenerarPares()
    {
        $this->assertEquals([10, 12, 14, 16, 18], generarPares(5, 10));

        $this->assertEquals([30, 32, 34], generarPares(3, 30));

    }

    public function testGenerarImpares()
    {
        $this->assertEquals([11, 13, 15, 17, 19], generarImpares(5, 11));

        $this->assertEquals([31, 33, 35], generarImpares(3, 31));

    }
}