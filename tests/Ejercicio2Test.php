<?php
use PHPUnit\Framework\TestCase;
include '../Ejercicio2.php';
class Ejercicio2Test extends TestCase {
    public function testVerificarEdad() {
        $this->assertEquals("Usted es mayor de edad", verificarEdad(20));
        $this->assertEquals("Todavía eres menor de edad", verificarEdad(15));
       
    }
}
?>
