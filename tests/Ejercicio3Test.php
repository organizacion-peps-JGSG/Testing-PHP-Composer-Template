<?php 
use PHPUnit\Framework\TestCase;
include './funciones/ejercicio3.php'; // Asegúrate de que la ruta del archivo sea correcta

class test_ejercicio3 extends TestCase
{
    public function testObtenerCalificacion()
    {
       

      
        $this->assertEquals("Muy deficiente", obtenerCalificaion(2));

       
        $this->assertEquals("Insuficiente", obtenerCalificaion(4));

       
        $this->assertEquals("Suficiente", obtenerCalificaion(5));

        
        $this->assertEquals("Bien", obtenerCalificaion(6));

       
        $this->assertEquals("Notable", obtenerCalificaion(8));

       
        $this->assertEquals("Sobresaliente", obtenerCalificaion(10));

        
        $this->assertEquals("Incorrecta", obtenerCalificaion(-1));

      
        $this->assertEquals("Incorrecta", obtenerCalificaion(11));
    }
}