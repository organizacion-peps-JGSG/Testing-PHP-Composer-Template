<?php

use PHPUnit\Framework\TestCase;

include './Ejercicio9.php';

class test_ejercicio9 extends TestCase
{
    public function testSuma()
    {
        $this->assertEquals(8, suma(3, 5));
        $this->assertEquals(-3, suma(5, -8));
    }

    public function testResta()
    {
        $this->assertEquals(7, resta(12, 5));
        $this->assertEquals(-15, resta(5, 20));
    }

    public function testMultiplica()
    {
        $this->assertEquals(18, multiplica(3, 6));
        $this->assertEquals(0, multiplica(8, 0));
    }

    public function testDivide()
    {
        $this->assertEquals(4, divide(16, 4));
        $this->expectException(\DivisionByZeroError::class);
        divide(5, 0);
    }
}
?>