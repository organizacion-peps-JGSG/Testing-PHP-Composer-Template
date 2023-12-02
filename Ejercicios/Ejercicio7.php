<?php

class Ejercicio7
{

    public ?int $limit = null;

    public function __construct($limit = null)
    {
        $this->limit = $limit;
        while (!is_numeric($this->limit)) { // Si no nos han pasado cuantos números quieren lo pedimos por línea
            echo 'Introduce cuantos números de la sería fibonacci quieres ver: ';
            $this->limit = readline();
        }
    }

    public function getFibonacci($limit = null)
    {
        $this->limit = $limit ?? $this->limit;
        $fibonacci = [];
        if ($this->limit < 1) {
            return $fibonacci;
        } elseif ($this->limit == 1) {
            $fibonacci[] = 1;
            return $fibonacci;
        } elseif ($this->limit >= 2) {
            $fibonacci[] = 1;
            $fibonacci[] = 1;
            for ($i = 2; $i < $this->limit; $i++) {
                $fibonacci[] = ($fibonacci[$i - 1] + $fibonacci[$i - 2]);
            }
        }


        return $fibonacci;
    }
}

/*$exercise = new Ejercicio7();
echo implode(',', $exercise->getFibonacci(10));*/