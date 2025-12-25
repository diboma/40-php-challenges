<?php

/**
 * Returns a flattened array.
 *
 * @param int[] $arr - The array containing nested arrays.
 * @return int[] - The flattened array.
 */
function flattenArray(array $arr): array
{
    $result = [];

    foreach ($arr as $item) {
        if (is_array($item)) {
            $result = array_merge($result, flattenArray($item));
        } else {
            $result[] = $item;
        }
    }

    return $result;
}
