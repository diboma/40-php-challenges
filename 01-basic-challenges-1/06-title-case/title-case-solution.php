<?php

/**
 * Returns a string with the first letter of each word capitalized.
 * 
 * @param string $str - The string to capitalize.
 * @return string - The string with the first letter of each word capitalized.
 */
function titleCase(string $str): string
{
    $words = explode(' ', strtolower($str));

    $words = array_map(
        fn(string $word) => ucfirst($word),
        $words
    );

    return implode(' ', $words);
}
