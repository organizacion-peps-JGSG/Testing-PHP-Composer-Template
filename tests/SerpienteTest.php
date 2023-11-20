<?php
/**
 * Pruebas unitarias clase Serpiente.php
 * @author José Gaspar Sánchez Garcia
 */
require 'Serpiente.php';


use PHPUnit\Framework\TestCase;

class SerpienteTest extends TestCase
{
    protected $snake;

    protected function setUp() : void
    {
        parent::setUp();
        // Creamos un nuevo objeto sepiente
        $this->snake=new Serpiente("Anaconda");

    }
    protected function tearDown() : void 
    {
        parent::tearDown();
        // Elimina el objeto de prueba
        unset($this->snake);
    }

    public function test_getNombre()
    {
        $this->assertEquals("Anaconda", $this->snake->getNombre());
    }
    public function test_getEspecie()
    {
        $this->assertEquals("Serpiente", $this->snake->getEspecie());
    }
    public function test_getGrupo()
    {
        $this->assertEquals("Reptil", $this->snake->getGrupo());
    }
    public function test_getLongitud()
    {
        $this->assertEquals(0, $this->snake->getLongitud());
    }
    public function test_sonido()
    {
        $this->assertEquals('Sisssss!', $this->snake->sonido());
    }
    /**
     * @depends test_getNombre
     */
    public function test_setNombre()
    {
        $this->assertEquals("Anaconda", $this->snake->getNombre());
        $this->snake->setNombre("Culebra");
        $this->assertEquals("Culebra", $this->snake->getNombre());
    }

    /**
     * @depends test_getLongitud
     */
    public function test_setLongitud()
    {
        $this->assertEquals(0, $this->snake->getLongitud());
        $this->snake->setLongitud(100);
        $this->assertEquals(100, $this->snake->getLongitud());
    }

    public function test_mostrarInfo()
    {
        $esperado="<h1>Información de un animal</h1><br/>Nombre: Anaconda";
        $esperado.="<br/>Especie: Serpiente";
        $esperado.="<br/>Grupo: Reptil";

        $real=$this->snake->mostrarInfo();
        $this->assertStringStartsWith("<h1>", $real);
        $this->assertEquals($esperado, $real);
    }
}

?>