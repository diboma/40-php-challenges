<?php

use Illuminate\Support\Str;

/**
 * Returns the number of vowels in a string.
 * 
 * @param string $str - The string to search.
 * @return int - The number of vowels in the string.
 */
function countVowelsEloquent(string $str): int
{
    return Str::of($str)
        ->lower()
        ->replaceMatches('/[^aeiou]/', '')   // remove everything except vowels
        ->length();
}
