<?php

class Ejercicio4
{
    public $numberOfTurns = 0;
    public $options = ['piedra', 'papel', 'tijera'];
    public int $numberPlayers = 2;
    public array $players = [];

    public function __construct($turns = 0)
    {
        $this->numberOfTurns = $turns ?? $this->getTurns();
        for ($i = 0; $i < $this->numberPlayers; $i++) {
            $this->players[] = (object)['currentOption' => null, 'totalWins' => 0, 'totalEqual' => 0, 'totalLost' => 0];
        }
    }

    public function startGame(): void
    {
        for ($i = 0; $i < $this->numberOfTurns; $i++) {
            foreach ($this->players as $player) {
                $this->turn($player);
            }
            $this->countPoints();
        }
    }

    public function turn($player): void
    {
        $player->currentOption = $this->options[array_rand($this->options)];
    }

    public function countPoints()
    {
        foreach ($this->players as $index => $player) {
            $this->compareOptions($player, $index);
        }
    }

    public function compareOptions(&$currentPlayer, $index): void
    {
        $option = $currentPlayer->currentOption;
        foreach ($this->players as $indexPlayer => $player) {
            if ($index != $indexPlayer) {
                $playerOption = $player->currentOption;
                $whoWins = $this->whoWins($option, $playerOption);
                if ($whoWins == 2) { //Pierde el primero
                    $currentPlayer->totalLost = $currentPlayer->totalLost + 1;
                } elseif ($whoWins == 1) { //Gana el primero
                    $currentPlayer->totalWins = $currentPlayer->totalWins + 1;
                } elseif ($whoWins == 0) { //Empate
                    $currentPlayer->totalEqual = $currentPlayer->totalEqual + 1;
                }
            }
        }
    }


    public function whoWins($optionOne, $optionSecond)
    {
        if ($optionOne == $optionSecond) {
            return 0;
        } elseif (($optionOne == "piedra" && $optionSecond == "tijera") || ($optionOne == "tijera" && $optionSecond == "papel") || ($optionOne == "papel" && $optionSecond == "piedra")) {
            return 1;
        } else {
            return 2;
        }
    }

    public function showResults(): void
    {
        foreach ($this->players as $index => $player) {
            echo 'Jugador ' . $index . ':     ';
            echo 'Ganadas: ' . $player->totalWins . ' ';
            echo 'Empetadas: ' . $player->totalEqual . ' ';
            echo 'Perdidas: ' . $player->totalLost . ' ';
            echo PHP_EOL;
            echo '------------';
            echo PHP_EOL;
        }
    }

    private function getTurns(): float
    {
        $turns = null;
        while (!is_numeric($turns)) {
            echo 'Introduce el número de tiradas: ';
            $turns = readline();
        }
        return $turns;
    }
}

/*$game = new Ejercicio4();
$game->startGame();
$game->showResults();*/
