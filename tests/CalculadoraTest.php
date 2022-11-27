<?php
use PHPUnit\Framework\TestCase;
require 'Calculadora.php';

/***
 * Caso de Prueba Unitario clase calculadora
 * @author: José Gaspar Sánchez García.
 */

class CalculadoraTest extends TestCase
{
    private $calculadora;
    /* Funcion que inicializa los objetos que se utilizaran durante la prueba*/
    protected function setUp(): void
    {
        $this->calculadora = new Calculadora();
    }
    /* Función que destruye los objetos despues de la prueba */
    protected function tearDown(): void
    {
        $this->calculadora = NULL;
    }

    public function testSuma(): void
    {
        $result = $this->calculadora->suma(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testResta(): void
    {
        $resultado = $this->calculadora->resta(8,3);
        $this->assertEquals(5, $resultado);
    }

    public function testMultiplica(): void
    {
        $result = $this->calculadora->multiplica(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivide(): void
    {
        $result = $this->calculadora->divide(10, 2);
        $this->assertEquals(5, $result);
    }

    public function testFactorial(): void
    {
        $this->expectException(InvalidArgumentException::class);
        
        $resultado= $this->calculadora->factorial(6);
        $this->assertEquals(720, $resultado);

        $resultado=$this->calculadora->factorial(-1);
        
    }
}
?>