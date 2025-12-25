<?php

/**
 * Calculates the sum of an array of numbers using recursion.
 *
 * @param array $arr - The array of numbers.
 * @return int - The sum of the numbers.
 */
function arraySum(array $arr): int
{
    if (count($arr) === 0) {
        return 0;
    }

    return array_pop($arr) + arraySum($arr);
}
