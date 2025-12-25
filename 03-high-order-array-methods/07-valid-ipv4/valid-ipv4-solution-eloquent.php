<?php

use Illuminate\Support\Str;
use Illuminate\Support\Collection;

/**
 * Checks if a given string is a valid IPv4 address.
 * 
 * @param string $input - The input string to check.
 * @return bool - True if the input is a valid IPv4 address, false otherwise.
 */
function isValidIPv4Eloquent($input): bool
{
    return collect(explode('.', $input))
        ->whenEmpty(fn() => false)
        ->pipe(function (Collection $octets) {
            if ($octets->count() !== 4) return false;

            return $octets->every(function ($octet) {
                // Must only contain numeric characters
                if (!ctype_digit($octet)) return false;

                // No leading zeros except for '0' itself
                if ($octet !== '0' && Str::startsWith($octet, '0')) return false;

                $int = (int) $octet;
                return $int >= 0 && $int <= 255;
            });
        });
}
