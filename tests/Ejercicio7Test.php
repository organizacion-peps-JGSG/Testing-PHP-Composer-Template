<?php 

use PHPUnit\Framework\TestCase;

include './funciones/ejercicio5.php'; // Asegúrate de incluir el archivo que contiene las funciones

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
        $this->assertEquals([12, 14, 16, 18, 20], generarPares(5, 12));
    
        $this->assertEquals([30, 32, 34, 36, 38], generarPares(5, 30));
    }
    
    public function testGenerarImpares()
    {
        $this->assertEquals([11, 13, 15, 17, 19], generarImpares(5, 11));
    
        $this->assertEquals([31, 33, 35, 37, 39], generarImpares(5, 31));
    }
    
}