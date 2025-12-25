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
function analyzeCarMileageEloquent(array $cars): array
{
    $cars = collect($cars);

    $totalMileage = $cars->sum('mileage');
    $averageMileage = round($cars->avg('mileage'), 2);
    $highestMileageCar = $cars->sortByDesc('mileage')->first();
    $lowestMileageCar = $cars->sortBy('mileage')->first();

    return [
        'totalMileage' => $totalMileage,
        'averageMileage' => $averageMileage,
        'highestMileageCar' => $highestMileageCar,
        'lowestMileageCar' => $lowestMileageCar,
    ];
}
