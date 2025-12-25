<?php

use Illuminate\Support\Str;

/**
 * Returns a string with the first letter of each word capitalized.
 * 
 * @param string $str - The string to capitalize.
 * @return string - The string with the first letter of each word capitalized.
 */
function titleCaseEloquent(string $str): string
{
    return Str::of(Str::lower($str))
        ->explode(' ')
        ->map(fn(string $word) => Str::upper($word[0]) . Str::substr($word, 1))
        ->implode(' ');
}
