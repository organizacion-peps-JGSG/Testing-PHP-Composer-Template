<?php 
use PHPUnit\Framework\TestCase;


include './Ejercicio2b.php';
class test_ejercicio2b extends TestCase
{
    public function testMayorDeEdad()
    {
        // Caso 1: Comprobar si la edad 20 es mayor de edad
        $this->assertTrue(esMayorEdad(20));

        // Caso 2: Comprobar si la edad 18 es mayor de edad
        $this->assertTrue(esMayorEdad(18));

        // Caso 3: Comprobar si la edad 17 es menor de edad
        $this->assertFalse(esMayorEdad(17));

        // Caso 4: Comprobar si la edad 0 es menor de edad
        $this->assertFalse(esMayorEdad(0));

        // Caso 5: Comprobar si la edad -1 es menor de edad
        $this->assertFalse(esMayorEdad(-1));
    }
}
?>