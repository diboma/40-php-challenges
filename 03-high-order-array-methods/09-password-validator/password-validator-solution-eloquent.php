<?php

/**
 * Validates a password based on the following criteria:
 *
 * 1. The password must be at least 8 characters long.
 * 2. The password must contain at least one uppercase letter.
 * 3. The password must contain at least one lowercase letter.
 * 4. The password must contain at least one digit.
 *
 * @param string $password - The password to be validated.
 * @return bool - True if the password is valid, false otherwise.
 */
function validatePasswordEloquent(string $password): bool
{
    $chars = collect(str_split($password));

    return $chars->count() >= 8
        && $chars->contains(fn($char) => ctype_upper($char))
        && $chars->contains(fn($char) => ctype_lower($char))
        && $chars->contains(fn($char) => ctype_digit($char));
}
