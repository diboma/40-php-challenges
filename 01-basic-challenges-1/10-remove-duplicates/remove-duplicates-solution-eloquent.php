<?php

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Returns a new array with duplicates removed.
 *
 * @param any[] $arr - The array to remove duplicates from.
 * @return any[] - The new array with duplicates removed.
 */
function removeDuplicatesEloquent(array $arr): array
{
    return collect($arr)
        ->unique()
        ->values()
        ->all();
}
