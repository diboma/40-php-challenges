<?php

use Illuminate\Support\Str;

/**
 * Returns true if the string is a palindrome.
 * 
 * @param string $str - The string to check.
 * @return bool - True if the string is a palindrome, false otherwise.
 */
function isPalindromeEloquent(string $str): bool
{
    $cleanStr = Str::replaceMatches('/[^a-z0-9]/', '', Str::lower($str));

    return (string) $cleanStr === (string) Str::reverse($cleanStr);
}
