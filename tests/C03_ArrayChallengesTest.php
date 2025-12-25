<?php

describe('Array Challenges', function () {
    // 02-sum-of-even-squares
    test('Sum of even squares', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/02-sum-of-even-squares/sum-of-even-squares-solution.php';
        require_once __DIR__ . '/../03-high-order-array-methods/02-sum-of-even-squares/sum-of-even-squares-solution-eloquent.php';

        expect(sumOfEvenSquares([1, 2, 3, 4, 5]))->toBe(20);
        expect(sumOfEvenSquares([-1, 0, 1, 2, 3, 4]))->toBe(20);
        expect(sumOfEvenSquares([]))->toBe(0);

        expect(sumOfEvenSquaresEloquent([1, 2, 3, 4, 5]))->toBe(20);
        expect(sumOfEvenSquaresEloquent([-1, 0, 1, 2, 3, 4]))->toBe(20);
        expect(sumOfEvenSquaresEloquent([]))->toBe(0);
    });

    // 03-calculate-total-sales
    test('Calculate total sales', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/03-calculate-total-sales/calculate-total-sales-solution.php';
        require_once __DIR__ . '/../03-high-order-array-methods/03-calculate-total-sales/calculate-total-sales-solution-eloquent.php';

        $products1 = [
            ['name' => 'Apple', 'price' => 0.5, 'quantity' => 10],
            ['name' => 'Banana', 'price' => 0.3, 'quantity' => 20],
            ['name' => 'Orange', 'price' => 0.6, 'quantity' => 15],
        ];

        $products2 = [
            ['name' => 'Chocolate', 'price' => 2.5, 'quantity' => 5],
            ['name' => 'Chips', 'price' => 1.2, 'quantity' => 10],
            ['name' => 'Soda', 'price' => 1.0, 'quantity' => 8],
            ['name' => 'Candy', 'price' => 0.5, 'quantity' => 15],
        ];

        expect(calculateTotalSalesWithTax($products1, 8))->toBe(21.6);
        expect(calculateTotalSalesWithTax($products2, 5))->toBe(42.0);

        expect(calculateTotalSalesWithTaxEloquent($products1, 8))->toBe(21.6);
        expect(calculateTotalSalesWithTaxEloquent($products2, 5))->toBe(42.0);
    });

    // 04-highest-scoring-word
    test('Highest scoring word', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/04-highest-scoring-word/highest-scoring-word-solution.php';
        require_once __DIR__ . '/../03-high-order-array-methods/04-highest-scoring-word/highest-scoring-word-solution-eloquent.php';

        expect(highestScoringWord('hello my name is xavier'))->toBe('xavier');
        expect(highestScoringWord('what time are we climbing up the volcano'))->toBe('volcano');
        expect(highestScoringWord('take me to semynak'))->toBe('semynak');

        expect(highestScoringWordEloquent('hello my name is xavier'))->toBe('xavier');
        expect(highestScoringWordEloquent('what time are we climbing up the volcano'))->toBe('volcano');
        expect(highestScoringWordEloquent('take me to semynak'))->toBe('semynak');
    });

    // 05-valid-anagrams
    test('Valid anagrams', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/05-valid-anagrams/valid-anagrams-solution.php';
        require_once __DIR__ . '/../03-high-order-array-methods/05-valid-anagrams/valid-anagrams-solution-eloquent.php';

        expect(validAnagrams('listen', 'silent'))->toBe(true);
        expect(validAnagrams('hello', 'world'))->toBe(false);
        expect(validAnagrams('astronomer', 'moonstarer'))->toBe(true);
        expect(validAnagrams('apple', 'banana'))->toBe(false);

        expect(validAnagramsEloquent('listen', 'silent'))->toBe(true);
        expect(validAnagramsEloquent('hello', 'world'))->toBe(false);
        expect(validAnagramsEloquent('astronomer', 'moonstarer'))->toBe(true);
        expect(validAnagramsEloquent('apple', 'banana'))->toBe(false);
    });

    // 06-hashtag-generator
    test('Hashtag generator', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/06-hashtag-generator/hashtag-generator-solution.php';
        require_once __DIR__ . '/../03-high-order-array-methods/06-hashtag-generator/hashtag-generator-solution-eloquent.php';

        expect(generateHashtag(' Hello there thanks for trying my Kata'))->toBe('#HelloThereThanksForTryingMyKata');
        expect(generateHashtag('    Hello     World   '))->toBe('#HelloWorld');
        expect(generateHashtag(''))->toBe(false);
        expect(generateHashtag(
            'This is a very very very very very very very very very very very very very very long input that should result in a false hashtag because it exceeds the character limit of 140'
        ))->toBe(false);

        expect(generateHashtagEloquent(' Hello there thanks for trying my Kata'))->toBe('#HelloThereThanksForTryingMyKata');
        expect(generateHashtagEloquent('    Hello     World   '))->toBe('#HelloWorld');
        expect(generateHashtagEloquent(''))->toBe(false);
        expect(generateHashtagEloquent(
            'This is a very very very very very very very very very very very very very very long input that should result in a false hashtag because it exceeds the character limit of 140'
        ))->toBe(false);
    });

    // 07-valid-ip4
    test('Valid IPv4', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/07-valid-ipv4/valid-ipv4-solution.php';
        require_once __DIR__ . '/../03-high-order-array-methods/07-valid-ipv4/valid-ipv4-solution-eloquent.php';

        expect(isValidIPv4('1.2.3.4'))->toBe(true);
        expect(isValidIPv4('123.45.67.89'))->toBe(true);
        expect(isValidIPv4('1.2.3'))->toBe(false);
        expect(isValidIPv4('1.2.3.4.5'))->toBe(false);
        expect(isValidIPv4('123.456.78.90'))->toBe(false);
        expect(isValidIPv4('123.045.067.089'))->toBe(false);

        expect(isValidIPv4Eloquent('1.2.3.4'))->toBe(true);
        expect(isValidIPv4Eloquent('123.45.67.89'))->toBe(true);
        expect(isValidIPv4Eloquent('1.2.3'))->toBe(false);
        expect(isValidIPv4Eloquent('1.2.3.4.5'))->toBe(false);
        expect(isValidIPv4Eloquent('123.456.78.90'))->toBe(false);
        expect(isValidIPv4Eloquent('123.045.067.089'))->toBe(false);
    });

    // 08-analyze-car-mileage
    test('Analyze car mileage', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/08-analyze-car-mileage/analyze-car-mileage-solution.php';
        require_once __DIR__ . '/../03-high-order-array-methods/08-analyze-car-mileage/analyze-car-mileage-solution-eloquent.php';

        $cars = [
            ['make' => 'Toyota', 'model' => 'Corolla', 'year' => 2020, 'mileage' => 25000],
            ['make' => 'Honda', 'model' => 'Civic', 'year' => 2019, 'mileage' => 30000],
            ['make' => 'Ford', 'model' => 'Mustang', 'year' => 2021, 'mileage' => 15000],
        ];

        $analysis = analyzeCarMileage($cars);
        $analysisEloquent = analyzeCarMileageEloquent($cars);

        expect($analysis['totalMileage'])->toBe(70000);
        expect($analysis['averageMileage'])->toBe(23333.33);
        expect($analysis['highestMileageCar'])->toEqual($cars[1]);
        expect($analysis['lowestMileageCar'])->toEqual($cars[2]);

        expect($analysisEloquent['totalMileage'])->toBe(70000);
        expect($analysisEloquent['averageMileage'])->toBe(23333.33);
        expect($analysisEloquent['highestMileageCar'])->toEqual($cars[1]);
        expect($analysisEloquent['lowestMileageCar'])->toEqual($cars[2]);

        $cars2 = [
            ['make' => 'Toyota', 'model' => 'Camry', 'year' => 2020, 'mileage' => 30800.22],
            ['make' => 'Honda', 'model' => 'Civic', 'year' => 2019, 'mileage' => 32000.12],
            ['make' => 'Chevrolet', 'model' => 'Impala', 'year' => 2021, 'mileage' => 17500],
            ['make' => 'Audi', 'model' => 'R8', 'year' => 2020, 'mileage' => 13000],
            ['make' => 'Tesla', 'model' => 'Model 3',  'year' => '2018', 'mileage' => 50000],
        ];

        $analysis2 = analyzeCarMileage($cars2);
        $analysis2Eloquent = analyzeCarMileageEloquent($cars2);

        expect($analysis2['totalMileage'])->toBe(143300.34);
        expect($analysis2['averageMileage'])->toBe(28660.07);
        expect($analysis2['highestMileageCar'])->toEqual($cars2[4]);
        expect($analysis2['lowestMileageCar'])->toEqual($cars2[3]);


        expect($analysis2Eloquent['totalMileage'])->toBe(143300.34);
        expect($analysis2Eloquent['averageMileage'])->toBe(28660.07);
        expect($analysis2Eloquent['highestMileageCar'])->toEqual($cars2[4]);
        expect($analysis2Eloquent['lowestMileageCar'])->toEqual($cars2[3]);
    });

    // 09-password-validator
    test('Password validator', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/09-password-validator/password-validator-solution.php';
        require_once __DIR__ . '/../03-high-order-array-methods/09-password-validator/password-validator-solution-eloquent.php';

        expect(validatePassword('Abc12345'))->toBe(true);
        expect(validatePassword('password123'))->toBe(false);
        expect(validatePassword('Pass'))->toBe(false);
        expect(validatePassword('HelloWorld'))->toBe(false);

        expect(validatePasswordEloquent('Abc12345'))->toBe(true);
        expect(validatePasswordEloquent('password123'))->toBe(false);
        expect(validatePasswordEloquent('Pass'))->toBe(false);
        expect(validatePasswordEloquent('HelloWorld'))->toBe(false);
    });

    // 10-find-missing-letter-refactor
    test('Find missing letter (refactored)', function () {
        require_once __DIR__ . '/../03-high-order-array-methods/10-find-missing-letter-refactor/find-missing-letter-refactor-solution.php';

        expect(findMissingLetterRefactored(['a', 'b', 'c', 'e']))->toBe('d');
        expect(findMissingLetterRefactored(['X', 'Z']))->toBe('Y');
        expect(findMissingLetterRefactored(['m', 'n', 'o', 'q', 'r']))->toBe('p');
        expect(findMissingLetterRefactored(['F', 'G', 'H', 'J']))->toBe('I');
    });
});
