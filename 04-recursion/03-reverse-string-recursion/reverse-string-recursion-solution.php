<?php

/**
 * Returns the reverse of a string.
 *
 * @param string $str - The string to reverse.
 * @return string - The reverse of the string.
 */
function reverseStringRecursion(string $str): string
{
    if ($str === '') {
        return '';
    }

    $lastIndex = strlen($str) - 1;

    return $str[$lastIndex] . reverseStringRecursion(substr($str, 0, $lastIndex));
}
