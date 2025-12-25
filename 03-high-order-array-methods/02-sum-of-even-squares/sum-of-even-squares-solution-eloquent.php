<?php

/**
 * Returns the sum of the squares of the even numbers in the array.
 * 
 * @param int[] $numbers - The array of numbers.
 * @return int - The sum of the squares of even numbers.
 */
function sumOfEvenSquaresEloquent(array $numbers): int
{
    return collect($numbers)
        ->filter(fn(int $number) => $number % 2 === 0)
        ->map(fn(int $number) => $number * $number)
        ->reduce(fn(?int $total, int $number) => $total + $number, 0);
}
