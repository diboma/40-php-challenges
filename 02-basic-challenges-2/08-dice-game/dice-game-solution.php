<?php

/**
 * Simulates the dice game.
 * 
 * @param int $numSimulations - The number of times to simulate the dice game.
 * @return array - An array of simulation result objects.
 */
function diceGameSimulation(int $numSimulations): array
{
    $results = [];

    for ($i = 0; $i < $numSimulations; $i++) {
        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);
        $sum = $dice1 + $dice2;
        $result = 'roll again';

        if ($sum === 7 || $sum === 11) {
            $result = 'win';
        } else if ($sum === 2 || $sum === 3 || $sum === 12) {
            $result = 'lose';
        }

        $results[] = [
            'dice1' => $dice1,
            'dice2' => $dice2,
            'sum'   => $sum,
            'result'   => $result,
        ];
    }

    return $results;
}
