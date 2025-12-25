<?php

/**
 * Returns whether the string is a valid email address.
 * 
 * @param string $email - The email address to validate.
 * @return bool - Whether the email address is valid.
 */
function validateEmail(string $email): bool
{
    if (!str_contains($email, '@')) {
        return false;
    }

    [$name, $domain] = explode('@', $email, 2);


    if ($name === '' || $name === '') {
        return false;
    }

    if (strlen($domain) < 3 || !str_contains($domain, '.')) {
        return false;
    }

    return true;
}
