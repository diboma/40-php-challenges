<?php

/**
 * Returns the result of a calculation.
 * 
 * @param int $num1 - The first number.
 * @param int $num2 - The second number.
 * @param string $operator - The operator to use in the calculation.
 * @return int - The result of the calculation.
 */
function calculator(int $num1, int $num2, string $operator): int
{
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
        default:
            throw new Exception('Invalid operator');
    }
}
