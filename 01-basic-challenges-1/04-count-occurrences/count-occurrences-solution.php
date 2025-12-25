<?php

/**
 * Returns the number of occurrences of a character in a string.
 * 
 * @param string $str - The string to search.
 * @param string $char - The character to search for.
 * @return int - The number of occurrences of the character in the string.
 */
function countOccurrences(string $str, string $char): int
{
    $count = 0;

    foreach (str_split($str) as $letter) {
        if ($letter === $char) {
            $count++;
        }
    }

    return $count;
}
