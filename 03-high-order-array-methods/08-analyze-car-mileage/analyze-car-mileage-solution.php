<?php

/**
 * Analyzes car mileage data using high order array methods.
 *
 * @param array $cars An array of car data, where each car is an associative array with keys:
 *  - 'make'  => string, the make of the car
 *  - 'model' => string, the model of the car
 *  - 'year'  => int, the year the car was manufactured
 *  - 'mileage' => int, the mileage of the car
 *
 * @return array{
 *   averageMileage: float,
 *   highestMileageCar: array{make: string, model: string, year: int, mileage: int},
 *   lowestMileageCar: array{make: string, model: string, year: int, mileage: int},
 *   totalMileage: int
 * } Object containing calculated car mileage statistics.
 */
function analyzeCarMileage(array $cars): array
{
    $totalMileage = array_reduce(
        $cars,
        fn($carry, $car) => $carry + $car['mileage'],
        0
    );

    $averageMileage = round($totalMileage / count($cars), 2);

    $highestMileageCar = array_reduce(
        $cars,
        fn($highest, $car) => $car['mileage'] > $highest['mileage'] ? $car : $highest,
        $cars[0]
    );

    $lowestMileageCar = array_reduce(
        $cars,
        fn($lowest, $car) => $car['mileage'] < $lowest['mileage'] ? $car : $lowest,
        $cars[0]
    );

    return [
        'totalMileage' => $totalMileage,
        'averageMileage' => $averageMileage,
        'highestMileageCar' => $highestMileageCar,
        'lowestMileageCar' => $lowestMileageCar,
    ];
}
