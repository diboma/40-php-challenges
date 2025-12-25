<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/analyze-car-mileage-solution.php';

$cars = [
    ['make' => 'Toyota', 'model' => 'Corolla', 'year' => 2020, 'mileage' => 25000],
    ['make' => 'Honda', 'model' => 'Civic', 'year' => 2019, 'mileage' => 30000],
    ['make' => 'Ford', 'model' => 'Mustang', 'year' => 2021, 'mileage' => 15000],
];

dump(analyzeCarMileage($cars));
