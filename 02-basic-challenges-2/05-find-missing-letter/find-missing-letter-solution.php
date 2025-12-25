<?php

/**
 * Returns the missing letter in an array of consecutive letters.
 * 
 * @param string[] $arr - An array of consecutive letters.
 * @return string - The missing letter.
 */
function findMissingLetter(array $arr): string
{
    if (count($arr) === 0) {
        return '';
    }

    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $startIndex = strpos($alphabet, $arr[0]);

    foreach ($arr as $index => $letter) {
        if ($letter !== $alphabet[$startIndex + $index]) {
            return $alphabet[$startIndex + $index];
        }
    }

    return '';
}
