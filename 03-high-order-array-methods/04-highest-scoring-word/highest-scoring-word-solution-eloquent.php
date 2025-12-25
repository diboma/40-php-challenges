<?php

/**
 * Returns the highest scoring word from a string.
 * 
 * @param string $str - The input string.
 * @return string - The highest scoring word.
 */
function highestScoringWordEloquent(string $str): string
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    return collect(explode(' ', $str))
        ->mapWithKeys(function ($word) use ($alphabet) {
            $score = collect(str_split($word))
                ->sum(fn($letter) => strpos($alphabet, $letter) + 1);

            return [$word => $score];
        })
        ->sortDesc()
        ->keys()
        ->first();
}
