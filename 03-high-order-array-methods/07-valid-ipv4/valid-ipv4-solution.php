<?php

/**
 * Checks if a given string is a valid IPv4 address.
 * 
 * @param string $input - The input string to check.
 * @return bool - True if the input is a valid IPv4 address, false otherwise.
 */
function isValidIPv4($input): bool
{
    $octets = explode('.', $input);

    if (count($octets) !== 4) {
        return false;
    }

    foreach ($octets as $octet) {
        // No empty octets, no non-numeric strings
        if (!ctype_digit($octet)) return false;

        // No leading zeros (except '0' itself)
        if ($octet !== '0' && $octet[0] === '0') return false;

        $int = (int)$octet;
        if ($int < 0 || $int > 255) return false;
    }

    return true;
}
