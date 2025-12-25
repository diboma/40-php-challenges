<?php

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Returns a new array with duplicates removed.
 * 
 * @param any[] $arr - The array to remove duplicates from.
 * @return any[] - The new array with duplicates removed.
 */
function removeDuplicates(array $arr): array
{
    // Using a loop
    $result = [];

    /** @var int $item */
    foreach ($arr as $item) {
        if (!in_array($item, $result)) {
            array_push($result, $item);
        }
    }

    return $result;

    // Compact method
    return array_values(array_unique($arr));
}
