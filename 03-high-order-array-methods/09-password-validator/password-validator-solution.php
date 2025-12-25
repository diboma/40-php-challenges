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
function validatePassword(string $password): bool
{
    if (strlen($password) < 8) {
        return false;
    }

    $hasUpper = $hasLower = $hasDigit = false;

    foreach (str_split($password) as $char) {
        $hasUpper = $hasUpper || ctype_upper($char);
        $hasLower = $hasLower || ctype_lower($char);
        $hasDigit = $hasDigit || ctype_digit($char);

        if ($hasUpper && $hasLower && $hasDigit) {
            return true; // early exit
        }
    }

    return false;
}
