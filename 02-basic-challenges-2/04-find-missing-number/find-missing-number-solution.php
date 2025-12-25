<?php

/**
 * Returns the missing number in an array of unique numbers from 1 to n (inclusive).
 * 
 * @param int[] $arr - The array of numbers.
 * @return int|null - The missing number.
 */
function findMissingNumber(array $arr): int|null
{
    if (!$arr) {
        return null;
    }

    if (count($arr) === 0) {
        return 1;
    }

    $n = count($arr) + 1;
    $expectedSum = $n * ($n + 1) / 2;
    $actualSum = array_reduce($arr, fn($v1, $v2) => $v1 + $v2);

    return $expectedSum - $actualSum;
}
