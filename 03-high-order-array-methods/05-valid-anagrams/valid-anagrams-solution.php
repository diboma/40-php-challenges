<?php

/**
 * Determines whether two strings are valid anagrams.
 * 
 * @param string $str1 - The first string.
 * @param string $str2 - The second string.
 * @return bool - True if the strings are valid anagrams, false otherwise.
 */
function validAnagrams(string $str1, string $str2): bool
{
    $letters1 = str_split(strtolower($str1));
    sort($letters1);

    $letters2 = str_split(strtolower($str2));
    sort($letters2);

    return $letters1 === $letters2;
}
