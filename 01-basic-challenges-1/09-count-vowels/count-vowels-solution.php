<?php

use Illuminate\Support\Str;

/**
 * Returns the number of vowels in a string.
 * 
 * @param string $str - The string to search.
 * @return int - The number of vowels in the string.
 */
function countVowels(string $str): int
{
    $lowerStr = strtolower($str);
    $count = 0;

    foreach (str_split($lowerStr) as $letter) {
        if (
            $letter === 'a' ||
            $letter === 'e' ||
            $letter === 'i' ||
            $letter === 'o' ||
            $letter === 'u'
        ) {
            $count++;
        }
    }

    return $count;
}
