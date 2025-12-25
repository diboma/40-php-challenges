<?php

use Illuminate\Support\Str;

/**
 * Returns true if the string is a palindrome.
 * 
 * @param string $str - The string to check.
 * @return bool - True if the string is a palindrome, false otherwise.
 */
function isPalindrome(string $str): bool
{
    $cleanStr = formatToCompare($str);

    return $cleanStr === strrev($cleanStr);
}

function formatToCompare(string $str): string
{
    return strtolower(
        preg_replace(['/\\s+/', '/,/'], ['', ''], $str)
    );
}
