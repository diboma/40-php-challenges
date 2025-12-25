<?php

describe('Recursion challenges', function () {
    // 01-count-down
    test('Count down', function () {
        require_once __DIR__ . '/../04-recursion/01-recursion-intro/count-down-solution.php';

        ob_start();
        countDown(5);
        $output = ob_get_clean();

        // Normalize line endings
        $output = str_replace(["\r\n", "\r"], "\n", $output);

        // Split in lines
        $lines = array_filter(explode("\n", $output));

        expect($lines)->toEqual([
            '5',
            '4',
            '3',
            '2',
            '1',
            "'All done!'",
        ]);
    });

    // 02-unwinding
    test('Sum up to (unwinding)', function () {
        require_once __DIR__ . '/../04-recursion/02-unwinding/sum-up-to-solution.php';

        expect(sumUpTo(5))->toBe(15);
        expect(sumUpTo(10))->toBe(55);
        expect(sumUpTo(1))->toBe(1);
        expect(sumUpTo(0))->toBe(0);
    });

    // 03-reverse-string-recursion
    test('Reversing a string with recursion', function () {
        require_once __DIR__ . '/../04-recursion/03-reverse-string-recursion/reverse-string-recursion-solution.php';

        expect(reverseStringRecursion('Hello'))->toBe('olleH');
        expect(reverseStringRecursion('JavaScript'))->toBe('tpircSavaJ');
        expect(reverseStringRecursion('12345'))->toBe('54321');
    });

    // 04-fibonacci-sequence
    test('Fibonacci sequence', function () {
        require_once __DIR__ . '/../04-recursion/04-fibonacci-sequence/fibonacci-solution.php';

        expect(fibonacci(0))->toBe(0); // The 0th Fibonacci number is 0
        expect(fibonacci(1))->toBe(1); // The 1st Fibonacci number is 1
        expect(fibonacci(2))->toBe(1); // The 2nd Fibonacci number is 1 (0 + 1)
        expect(fibonacci(3))->toBe(2); // The 3rd Fibonacci number is 2 (1 + 1)
        expect(fibonacci(4))->toBe(3); // The 4th Fibonacci number is 3 (1 + 2)
        expect(fibonacci(5))->toBe(5); // The 5th Fibonacci number is 5 (2 + 3)
        expect(fibonacci(6))->toBe(8); // The 6th Fibonacci number is 8 (3 + 5)
        expect(fibonacci(7))->toBe(13); // The 7th Fibonacci number is 13 (5 + 8)
    });

    // 05-factorial
    test('Factorial', function () {
        require_once __DIR__ . '/../04-recursion/05-factorial/factorial-solution.php';

        expect(factorial(0))->toBe(1);
        expect(factorial(5))->toBe(120);
        expect(factorial(10))->toBe(3628800);
    });

    // 06-power
    test('Calculate power', function () {
        require_once __DIR__ . '/../04-recursion/06-power/power-solution.php';

        expect(power(2, 3))->toEqual(8);
        expect(power(5, 2))->toEqual(25);
        expect(power(3, 4))->toEqual(81);
    });

    // 07-array-sum
    test('Calculate sum of array', function () {
        require_once __DIR__ . '/../04-recursion/07-array-sum/array-sum-solution.php';

        expect(arraySum([1, 2, 3, 4, 5]))->toEqual(15);
        expect(arraySum([-1, -2, -3, -4, -5]))->toEqual(-15);
        expect(arraySum([]))->toEqual(0);
    });

    // 08-number-range
    test('Calculate a range of numbers', function () {
        require_once __DIR__ . '/../04-recursion/08-number-range/number-range-solution.php';

        expect(numberRange(1, 5))->toEqual([1, 2, 3, 4, 5]);
        expect(numberRange(3, 10))->toEqual([3, 4, 5, 6, 7, 8, 9, 10]);
        expect(numberRange(7, 7))->toEqual([7]);
    });

    // 09-flattan-array
    test('Flatten Nested Arrays', function () {
        require_once __DIR__ . '/../04-recursion/09-flatten-array/flatten-array-solution.php';

        expect(flattenArray([1, [2, 3], [4, 5, [6]]]))->toEqual([1, 2, 3, 4, 5, 6]);
        expect(
            flattenArray([
                [1, 2],
                [3, [4, 5]],
                [6, [7]],
            ])
        )->toEqual([1, 2, 3, 4, 5, 6, 7]);
        expect(flattenArray([1, [2, [3, [4, [5]]]]]))->toEqual([1, 2, 3, 4, 5]);
    });

    // 10-permutations
    test('Permutations', function () {
        require_once __DIR__ . '/../04-recursion/10-permutations/permutations-solution.php';

        expect(permutations('abc'))->toEqual([
            'abc',
            'acb',
            'bac',
            'bca',
            'cab',
            'cba',
        ]);
        expect(permutations('dog'))->toEqual([
            'dog',
            'dgo',
            'odg',
            'ogd',
            'gdo',
            'god',
        ]);
        expect(permutations(''))->toEqual(['']);
    });
});
