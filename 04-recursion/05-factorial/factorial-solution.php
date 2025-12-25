<?php

/**
 * Returns the factorial of a number.
 *
 * @param int $num - The number.
 * @return int - The factorial of the number.
 */
function factorial(int $num): int
{
    if ($num <= 1) {
        return 1;
    }

    return $num * factorial($num - 1);
}
