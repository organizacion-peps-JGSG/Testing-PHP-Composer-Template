<?php 
use PHPUnit\Framework\TestCase;
include './funciones/ejercicio3.php'; // Asegúrate de que la ruta del archivo sea correcta

class test_ejercicio3 extends TestCase
{
    public function testObtenerCalificacion()
    {
        // Casos de prueba para verificar la calificación según diferentes valores de $n

        // Caso 1: Comprobar si la calificación es "Muy deficiente" para $n = 2
        $this->assertEquals("Muy deficiente", obtenerCalificaion(2));

        // Caso 2: Comprobar si la calificación es "Insuficiente" para $n = 4
        $this->assertEquals("Insuficiente", obtenerCalificaion(4));

        // Caso 3: Comprobar si la calificación es "Suficiente" para $n = 5
        $this->assertEquals("Suficiente", obtenerCalificaion(5));

        // Caso 4: Comprobar si la calificación es "Bien" para $n = 6
        $this->assertEquals("Bien", obtenerCalificaion(6));

        // Caso 5: Comprobar si la calificación es "Notable" para $n = 8
        $this->assertEquals("Notable", obtenerCalificaion(8));

        // Caso 6: Comprobar si la calificación es "Sobresaliente" para $n = 10
        $this->assertEquals("Sobresaliente", obtenerCalificaion(10));

        // Caso 7: Comprobar si la calificación es "Incorrecta" para $n = -1
        $this->assertEquals("Incorrecta", obtenerCalificaion(-1));

        // Caso 8: Comprobar si la calificación es "Incorrecta" para $n = 11
        $this->assertEquals("Incorrecta", obtenerCalificaion(11));
    }
}