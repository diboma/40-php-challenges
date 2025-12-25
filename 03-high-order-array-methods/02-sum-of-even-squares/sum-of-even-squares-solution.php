<?php

/**
 * Returns the sum of the squares of the even numbers in the array.
 * 
 * @param int[] $numbers - The array of numbers.
 * @return int - The sum of the squares of even numbers.
 */
function sumOfEvenSquares(array $numbers): int
{
    $evenNumbers = array_filter($numbers, fn($number) => $number % 2 === 0);
    $squareNumbers = array_map(fn($number) => $number * $number, $evenNumbers);

    return array_reduce(
        $squareNumbers,
        fn($total, $squareNumber) => $total + $squareNumber,
        0
    );
}
