
<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author José Gaspar Sánchez Garcia
 */
include 'Animal.php';

use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase {
    protected $animal;
    protected function setUp() : void
    {
        parent::setUp();
        // Creamos un nuevo objeto animal
        $this->animal=new Animal("Rex","Perro","Mamífero");

    }
    protected function tearDown() : void 
    {
        parent::tearDown();
        // 
        unset($this->animal);
    }
    
    public function test_get_setNombre(){
        $nombre=$this->animal->getNombre();
        $this->assertEquals("Rex", $nombre);

        $this->animal->setNombre("Bobby");
        $nombre=$this->animal->getNombre();
        $this->assertEquals("Bobby", $nombre);

        // $this->assertEquals("Bobb", $nombre);
        // Skipped
    }

    public function test_get_setEspecie(){
        $nombre=$this->animal->getNombre();
        $this->assertEquals("Rex", $nombre);

        $especie=$this->animal->getEspecie();
        $this->assertEquals("Perro", $especie);

        $this->animal->setEspecie("Gato");
        $r=$this->animal->getEspecie();
        $this->assertEquals("Gato", $r);
    }

    public function test_get_setGrupo(){
        $grupo=$this->animal->getGrupo();
        $this->assertEquals("Mamífero", $grupo);

        $this->animal->setGrupo("Ave");
        $r=$this->animal->getGrupo();
        $this->assertEquals("Ave", $r);
    }
    /**
     * @depends test_get_setNombre
     */
    public function test_mostrarInfo()
    {
        $esperado="<h1>Información de un animal</h1><br/>Nombre: Rex";
        $esperado.="<br/>Especie: Perro";
        $esperado.="<br/>Grupo: Mamífero";

        $real=$this->animal->mostrarInfo();
        $this->assertStringStartsWith("<h1>", $real);
        $this->assertEquals($esperado, $real);
    }
    /**
     * Prueba la funcion sonido
     * Ejemplo de uso de anotiaciones
     * @author José Gaspar Sánchez Garcia
     * @covers Animal::sonido()
     */
    public function test_sonido() {
        $s = $this->animal->sonido();
        $this->assertEquals("Soy un Amimal!!!", $s);
    }

    /**
     * Prueba constructores y Getters
     * @author José Gaspar Sánchez García
     * @dataProvider constructorProvider
     */
    public function test_constructor_get($nom,$espe,$grupo){
        $objeto=new Animal($nom,$espe,$grupo);
        $this->assertSame($nom, $objeto->getNombre());
        $this->assertSame($espe, $objeto->getEspecie());
        $this->assertSame($grupo, $objeto->getGrupo());
    }
    public function constructorProvider(){
        return [
            ["Rex","Perro","Mamífero"],
            ["Dartacán","Perro","Mamífero"],
            ["Felix","Gato","Mamífero"],
            ["Piolín","Canario","Ave"],
            ["Juancho","Cocodrilo","Reptil"],
            ["Correcaminos","Avestruz","Ave"]
        ];
    }

}
?>