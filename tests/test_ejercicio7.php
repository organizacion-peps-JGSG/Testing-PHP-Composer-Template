<?php 

use PHPUnit\Framework\TestCase;

include './funciones/ejercicio7.php'; // Asegúrate de incluir el archivo que contiene la función

class test_ejercicio7 extends TestCase
{
    public function testFibonacciConCero()
    {
        $this->assertEquals([], fibonnaci(0));
    }
    public function testFibonacciConUno()
    {
        $this->assertEquals([1], fibonnaci(1));
    }
    public function testFibonacciConNueve()
    {
        $this->assertEquals([1, 1, 2, 3, 5, 8, 13, 21, 34], fibonnaci(9));
    }
    
}