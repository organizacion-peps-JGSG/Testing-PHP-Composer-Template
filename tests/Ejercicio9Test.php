<?php
/**
 * Pruebas unitarias clase Animal.php
 * @author Mario Davó Asensio
 */
include dirname(__FILE__) . '\..\Ejercicios\Ejercicio9.php';

use PHPUnit\Framework\TestCase;

class Ejercicio9Test extends TestCase
{

    private Ejercicio9 $exercise;

    protected function setUp(): void
    {
        parent::setUp();
        $this->exercise = new Ejercicio9(null, false);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_suma()
    {
        $this->assertEquals(7, $this->exercise->sum(4,3), 'Suma 4 + 3 = 7');
        $this->assertEquals(-1, $this->exercise->sum(-4,3), 'Suma -4 + 3 = -1');
    }

    public function test_resta()
    {
        $this->assertEquals(10, $this->exercise->subtract(13,3), 'Resta 13 - 3 = 10');
        $this->assertEquals(-16, $this->exercise->subtract(-13,3), 'Resta -13 - 3 = -16');
        $this->assertEquals(-10, $this->exercise->subtract(-13,-3), 'Resta -13 - -3 = -10');
        $this->assertEquals(16, $this->exercise->subtract(13,-3), 'Resta 13 - -3 = 16');
    }

    public function test_multiplica()
    {
        $this->assertEquals(15, $this->exercise->multi(3,5), 'Multiplicación 13 x 3 = 15');
        $this->assertEquals(-15, $this->exercise->multi(-3,5), 'Multiplicación -13 x 3 = 15');
        $this->assertEquals(15, $this->exercise->multi(-3,-5), 'Multiplicación -13 x -3 = 15');
        $this->assertEquals(0, $this->exercise->multi(3,0), 'Multiplicación 13 x -3 = 0');
        $this->assertEquals(3, $this->exercise->multi(3,1), 'Multiplicación 13 x -3 = 3');
    }

    public function test_divide()
    {
        $this->assertEquals(1, $this->exercise->divide(5,5), 'Dividir 5 / 5 = 1');
        $this->assertEquals(6, $this->exercise->divide(30,5), 'Dividir 30 / 5 = 6');
        $this->assertEquals(30, $this->exercise->divide(30,1), 'Dividir 30 / 1 = 30');
    }
}