<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */
include dirname(__FILE__) . '\..\Ejercicios\Ejercicio8.php';

use PHPUnit\Framework\TestCase;

class Ejercicio8Test extends TestCase
{

    private Ejercicio8 $exercise;

    protected function setUp(): void
    {
        parent::setUp();
        $this->exercise = new Ejercicio8(0);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_fibonacci()
    {
        $this->assertEquals([1,1,2,3,5,8,13,21,34,55], $this->exercise->getFibonacci(10), 'Serie fibonnaci con while 1');
        $this->assertEquals([], $this->exercise->getFibonacci(0), 'Serie fibonnaci con while 2');
        $this->assertEquals([], $this->exercise->getFibonacci(-1), 'Serie fibonnaci con while 3');
        $this->assertEquals([1], $this->exercise->getFibonacci(1), 'Serie fibonnaci con while 4');
        $this->assertEquals([1,1], $this->exercise->getFibonacci(2), 'Serie fibonnaci con while 5');
        $this->assertEquals([1,1,2], $this->exercise->getFibonacci(3), 'Serie fibonnaci con while 6');
    }
}