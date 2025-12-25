<?php

/**
 * Determines whether two strings are valid anagrams.
 * 
 * @param string $str1 - The first string.
 * @param string $str2 - The second string.
 * @return bool - True if the strings are valid anagrams, false otherwise.
 */
function validAnagramsEloquent(string $str1, string $str2): bool
{
    $letters1 = collect(str_split(strtolower($str1)))->sort()->values();
    $letters2 = collect(str_split(strtolower($str2)))->sort()->values();

    return $letters1->toArray() === $letters2->toArray();
}
