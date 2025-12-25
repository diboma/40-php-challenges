<?php

/**
 * Returns the first non-repeating character in a string.
 * 
 * @param string $str - The string to search.
 * @return string|null The first non-repeating character, or null if none exists.
 */
function findFirstNonRepeatingCharacter(string $str): string|null
{
    if (!$str || strlen($str) === 0) {
        return null;
    }

    $charCount = [];

    foreach (str_split($str) as $char) {
        $charCount[$char] = isset($charCount[$char]) ? $charCount[$char] + 1 : 1;
    }

    foreach ($charCount as $char => $count) {
        if ($count === 1) {
            return $char;
        }
    }

    return null;
}
