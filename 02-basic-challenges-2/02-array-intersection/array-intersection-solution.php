<?php

/**
 * Returns the intersection of two arrays.
 * 
 * @param int[] $arr1 - The first array.
 * @param int[] $arr2 - The second array.
 * @return int[] - The intersection of the two arrays.
 */
function arrayIntersection(array $arr1, array $arr2): array
{
    $result = [];

    foreach ($arr1 as $item) {
        if (in_array($item, $arr2)) {
            $result[] = $item;
        }
    }

    return $result;
}
