<?php

/**
 * Returns an array of numbers from 1 to the number passed in.
 * 
 * @param int $num - The number to loop up to.
 * @return any[] - The array of numbers.
 */
function fizzBuzzArray(int $num): array
{
    $arr = [];

    for ($i = 1; $i <= $num; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $arr[] = 'FizzBuzz';
        } elseif ($i % 3 === 0) {
            $arr[] = 'Fizz';
        } elseif ($i % 5 === 0) {
            $arr[] = 'Buzz';
        } else {
            $arr[] = $i;
        }
    }

    return $arr;
}
