<?php

/**
 * Returns the highest scoring word from a string.
 * 
 * @param string $str - The input string.
 * @return string - The highest scoring word.
 */
function highestScoringWord(string $str): string
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $words = explode(' ', $str);
    $scores = [];

    foreach ($words as $word) {
        $score = 0;

        foreach (str_split($word) as $letter) {
            $score += strpos($alphabet, $letter) + 1;
        }

        $scores[] = $score;
    }

    $highestScore = max($scores);
    $winningWord = $words[array_search($highestScore, $scores)];

    return $winningWord;
}
