<?php

/**
 * Returns the number at the given index of the Fibonacci sequence.
 *
 * @param int $num - The index of the Fibonacci sequence.
 * @return int - The number at the given index of the Fibonacci sequence.
 */
function fibonacci(int $num): int
{
    if ($num < 2) {
        return $num;
    }

    return fibonacci($num - 1) + fibonacci($num - 2);
}
