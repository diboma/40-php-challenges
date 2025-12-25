<?php

require __DIR__ . '/../../vendor/autoload.php';

$numbers = collect([1, 2, 3, 4, 5]);
dumpWithLine('source array: ', $numbers);

/**
 * map
 */
$doubledNumbers = $numbers->map(fn($num) => $num * 2);
dumpWithLine('doubledNumbers: ', $doubledNumbers);

/**
 * filter
 */
$filteredNumbers = $numbers->filter(fn($num) => $num > 2);
dumpWithLine('filteredNumbers: ', $filteredNumbers);

/**
 * reduce
 */
$sum = $numbers->reduce(fn($total, $number) => $total + $number, 0);
dumpWithLine('sum: ', $sum);

/**
 * each
 */
dump('each: ');
$numbers->each(fn($number) => dump($number));
nl();
line();

/**
 * first
 */
$foundNumber = $numbers->first(fn($num) => $num > 2);
dumpWithLine('foundNumber: ', $foundNumber);

/**
 * some = alias for `contains`
 */
$hasEvenNumbers = $numbers->some(fn($num) => $num % 2 === 0);
dumpWithLine('hasEvenNumbers: ', $hasEvenNumbers);

$hasEvenNumbers2 = $numbers->contains(fn($num) => $num % 2 === 0);
dumpWithLine('hasEvenNumbers2: ', $hasEvenNumbers2);

/**
 * every - use array_reduce
 */
$allNumsGreaterThanZero = $numbers->every(fn($num) => $num > 0);
dumpWithLine('allNumsGreaterThanZero: ', $allNumsGreaterThanZero);
