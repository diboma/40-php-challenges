<?php

/**
 * Generates a hashtag from the input string.
 * 
 * @param string $str - The input string.
 * @return string|bool - The generated hashtag string or false.
 */
function generateHashtagEloquent(string $str): string|bool
{
    if (!$str || trim($str) === '') {
        return false;
    }

    $hashtag = '#' . collect(explode(' ', strtolower($str)))
        ->map(fn(string $word) => ucfirst($word))
        ->values()
        ->join('');

    if (strlen($hashtag) > 140) {
        return false;
    }

    return $hashtag;
}
