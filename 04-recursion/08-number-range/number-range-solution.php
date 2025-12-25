<?php

/**
 * Returns an array of numbers from startNum to endNum, inclusive.
 *
 * @param int $startNum - The starting number.
 * @param int $endNum - The ending number.
 * @return int[] - An array of numbers.
 */
function numberRange(int $startNum, int $endNum): array
{
    if ($startNum === $endNum) {
        return [$startNum];
    }

    $numbers = numberRange($startNum, $endNum - 1);
    array_push($numbers, $endNum);

    return $numbers;
}
