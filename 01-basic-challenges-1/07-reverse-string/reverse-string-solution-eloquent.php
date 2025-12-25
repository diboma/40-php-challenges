<?php

use Illuminate\Support\Str;

/**
 * Returns the reverse of a string.
 * 
 * @param string $str - The string to reverse.
 * @return string - The reverse of the string.
 */
function reverseStringEloquent(string $str): string
{
    return Str::reverse($str);
}
