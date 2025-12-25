<?php

require __DIR__ . '/../../vendor/autoload.php';

$numbers = [1, 2, 3, 4, 5];
dump('array: ', $numbers);

/**
 * map
 */
$doubledNumbers = array_map(fn($num) => $num * 2, $numbers);
dump('doubledNumbers: ', $doubledNumbers);

/**
 * filter
 */
$filteredNumbers = array_filter($numbers, fn($num) => $num > 2);
dump('filteredNumbers: ', $filteredNumbers);

/**
 * reduce
 */
$sum = array_reduce($numbers, fn($total, $num) => $total + $num, 0);
dump('sum: ', $sum);

/**
 * forEach
 */
dump('forEach: ');
foreach ($numbers as $num) {
    dump($num);
}

/**
 * find → use a foreach loop
 */
$foundNumber = null;
foreach ($numbers as $num) {
    if ($num > 2) {
        $foundNumber = $num;
        break;
    }
}
dump('foundNumber: ', $foundNumber);

/**
 * some → use array_reduce
 */
$hasEvenNumbers = array_reduce(
    $numbers,
    fn($carry, $num) => $carry || $num % 2 === 0,
    false
);
dump('hasEvenNumbers: ', $hasEvenNumbers);

/**
 * every → use array_reduce
 */
$allNumsGreaterThanZero = array_reduce(
    $numbers,
    fn($carry, $num) => $carry && $num > 0,
    true
);
dump('allNumsGreaterThanZero: ', $allNumsGreaterThanZero);
