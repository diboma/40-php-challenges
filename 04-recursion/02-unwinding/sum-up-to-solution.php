<?php

/**
 * Recursively sums up to a given number.
 *
 * @param int $num - The starting number for the sum.
 * @return int - The sum of the numbers up to the given number.
 */
function sumUpTo(int $num): int
{
    if ($num <= 0) {
        return $num;
    }

    return $num + sumUpTo($num - 1);
}
