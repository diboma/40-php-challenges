<?php

/**
 * Returns a string representing a phone number.
 * 
 * @param int[] $numbers - The numbers to use in the phone number.
 * @return string - The formatted phone number - format: (123) 456-7890.
 */
function formatPhoneNumber(array $numbers): string
{
    $part1 = implode(array_slice($numbers, 0, 3));
    $part2 = implode(array_slice($numbers, 3, 3));
    $part3 = implode(array_slice($numbers, 6, 4));

    return "($part1) $part2-$part3";
}
