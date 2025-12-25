<?php

/**
 * Returns the missing letter in an array of consecutive letters.
 * 
 * @param string[] $arr - An array of consecutive letters.
 * @return string - The missing letter.
 */
function findMissingLetterRefactored(array $arr): string
{
    if (count($arr) === 0) {
        return '';
    }

    $startCode = charCodeAt($arr[0]);

    foreach (array_slice($arr, 1) as $letter) {
        $code = charCodeAt($letter);
        if ($code !== $startCode + 1) {
            return chr($startCode + 1);
        }
        $startCode = $code;
    }

    return '';
}

function charCodeAt(string $char): int|false
{
    return mb_ord($char, 'UTF-8');
}
