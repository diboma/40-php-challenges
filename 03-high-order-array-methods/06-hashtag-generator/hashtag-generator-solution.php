<?php

/**
 * Generates a hashtag from the input string.
 * 
 * @param string $str - The input string.
 * @return string|bool - The generated hashtag string or false.
 */
function generateHashtag(string $str): string|bool
{
    if (!$str || trim($str) === '') {
        return false;
    }

    $words = explode(' ', strtolower($str));
    $hashtag = '#' . implode('', array_map(fn($word) => ucfirst($word), $words));

    if (strlen($hashtag) > 140) {
        return false;
    }

    return $hashtag;
}
