<?php

/**
 * Returns the result of raising the base to the power of the exponent.
 *
 * @param int $base - The base number.
 * @param int $exponent - The exponent.
 * @return int - The result of the calculation.
 */
function power($base, $exponent): int
{
    if ($exponent === 0) {
        return 1;
    }

    return $base * power($base, $exponent - 1);
}
