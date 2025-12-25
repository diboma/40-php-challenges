<?php

/**
 * Returns all possible permutations of the characters in a string.
 *
 * @param string $str - The string to permute.
 * @return string[] - An array of all possible permutations of the characters in the string.
 */
function permutations(string $str): array
{
    if (strlen($str) === 0) {
        return [''];
    }

    $result = [];

    for ($i = 0; $i < strlen($str); $i++) {
        $restOfString = substr($str, 0, $i) . substr($str, $i + 1);

        foreach (permutations($restOfString) as $permutation) {
            $result[] = $str[$i] . $permutation;
        }
    }

    return $result;
}
