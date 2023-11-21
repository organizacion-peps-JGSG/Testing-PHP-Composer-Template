<?php
use PHPUnit\Framework\TestCase;

class DrivingTest extends TestCase {
    public function testEdadConducir() {
        // Simulamos una petición POST con valores específicos
        $_POST['nombre'] = 'Ejemplo';
        $_POST['edad'] = 20;

        ob_start(); // Capturamos la salida HTML
        include '../Ejercicio2.php'; 

        $output = ob_get_clean(); // Obtenemos la salida generada

        // Verificamos si la salida contiene el mensaje esperado
        $this->assertStringContainsString('Hola Ejemplo, puedes conducir.', $output);
    }
}
?>
