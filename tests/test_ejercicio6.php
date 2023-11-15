<?php 

use PHPUnit\Framework\TestCase;

include './funciones/ejercicio6.php'; // Asegúrate de incluir el archivo que contiene la función

class test_ejercicio6 extends TestCase
{
    public function testEsPrimo()
    {
        $this->assertTrue(esPrimo(2));

        $this->assertTrue(esPrimo(7));

        $this->assertFalse(esPrimo(10));

        $this->assertTrue(esPrimo(13));

        $this->assertFalse(esPrimo(20));

    }
}
