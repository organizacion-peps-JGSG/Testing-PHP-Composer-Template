<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */
include dirname(__FILE__) . '\..\Ejercicios\Ejercicio5.php';

use PHPUnit\Framework\TestCase;

class Ejercicio5Test extends TestCase
{

    private Ejercicio5 $exercise;

    protected function setUp(): void
    {
        parent::setUp();
        $this->exercise = new Ejercicio5(1, 0);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_isPar()
    {
        $this->assertTrue($this->exercise->isPar(80), 'El número 80 es par');
        $this->assertTrue($this->exercise->isPar(2), 'El número 2 es par');
        $this->assertTrue($this->exercise->isPar(4), 'El número 4 es par');
        $this->assertTrue($this->exercise->isPar(8), 'El número 8 es par');
        $this->assertTrue($this->exercise->isPar(10), 'El número 10 es par');
        $this->assertTrue($this->exercise->isPar(12), 'El número 12 es par');
        $this->assertTrue($this->exercise->isPar(123456), 'El número 123456 es par');
        $this->assertFalse($this->exercise->isPar(87), 'El número 87 es impar');
        $this->assertFalse($this->exercise->isPar(81), 'El número 81 es impar');
        $this->assertFalse($this->exercise->isPar(83), 'El número 83 es impar');
        $this->assertFalse($this->exercise->isPar(5), 'El número 5 es impar');
        $this->assertFalse($this->exercise->isPar(9), 'El número 9 es impar');
        $this->assertFalse($this->exercise->isPar(11), 'El número 11 es impar');
        $this->assertFalse($this->exercise->isPar(53), 'El número 53 es impar');
        $this->assertFalse($this->exercise->isPar(65), 'El número 65 es impar');
        $this->assertFalse($this->exercise->isPar(123455), 'El número 123455 es impar');
    }

    public function test_isImpar()
    {
        $this->assertFalse($this->exercise->esImpar(80), 'El número 80 es impar');
        $this->assertFalse($this->exercise->esImpar(2), 'El número 2 es impar');
        $this->assertFalse($this->exercise->esImpar(4), 'El número 4 es impar');
        $this->assertFalse($this->exercise->esImpar(8), 'El número 8 es impar');
        $this->assertFalse($this->exercise->esImpar(10), 'El número 10 es impar');
        $this->assertFalse($this->exercise->esImpar(12), 'El número 12 es impar');
        $this->assertFalse($this->exercise->esImpar(123456), 'El número 123456 es impar');
        $this->assertTrue($this->exercise->esImpar(87), 'El número 87 es par');
        $this->assertTrue($this->exercise->esImpar(81), 'El número 81 es par');
        $this->assertTrue($this->exercise->esImpar(83), 'El número 83 es par');
        $this->assertTrue($this->exercise->esImpar(5), 'El número 5 es par');
        $this->assertTrue($this->exercise->esImpar(9), 'El número 9 es par');
        $this->assertTrue($this->exercise->esImpar(11), 'El número 11 es par');
        $this->assertTrue($this->exercise->esImpar(53), 'El número 53 es par');
        $this->assertTrue($this->exercise->esImpar(65), 'El número 65 es par');
        $this->assertTrue($this->exercise->esImpar(123455), 'El número 123455 es par');
    }


    public function test_generaImpares()
    {
        $start = rand(-10000,10000);
        $lenght = rand(0,100000);
        $exercise = new Ejercicio5($lenght, $start);

        $impares = $exercise->generarNumeros(false);
        \PHPUnit\Framework\assertTrue(count($impares) == $lenght, 'El tamaño es el correcto');

        foreach($impares as $impar){
            \PHPUnit\Framework\assertFalse($impar %2 ==0, 'El tamaño es el correcto');
        }


        $exercise = new Ejercicio5(5, 1);
        self::assertEquals([1, 3, 5, 7, 9], $exercise->generarNumeros(false));

        $exercise = new Ejercicio5(5, 2);
        self::assertEquals([3, 5, 7, 9, 11], $exercise->generarNumeros(false));
    }
}