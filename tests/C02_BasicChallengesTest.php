<?php

describe('Basic Challenges 2', function () {
    // 01-fizzbuzz-array
    test('Print fizzbuzz array', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/01-fizzbuzz-array/fizzbuzz-array-solution.php';
        expect(fizzBuzzArray(15))->toEqual([
            1,
            2,
            'Fizz',
            4,
            'Buzz',
            'Fizz',
            7,
            8,
            'Fizz',
            'Buzz',
            11,
            'Fizz',
            13,
            14,
            'FizzBuzz',
        ]);
    });

    // 02-array-intersection
    test('Array intersection', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/02-array-intersection/array-intersection-solution.php';

        expect(arrayIntersection([1, 2, 3, 4, 5], [3, 4, 5, 6, 7]))->toEqual([3, 4, 5]);
        expect(arrayIntersection([10, 20, 30], [30, 40, 50]))->toEqual([30]);
        expect(arrayIntersection([1, 2, 3], [4, 5, 6]))->toEqual([]);
    });

    // 03-display-likes
    test('Display likes', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/03-display-likes/display-likes-solution.php';


        expect(displayLikes([]))->toEqual('no one likes this');
        expect(displayLikes(['Peter']))->toEqual('Peter likes this');
        expect(displayLikes(['Jacob', 'Alex']))->toEqual('Jacob and Alex like this');
        expect(displayLikes(['Max', 'John', 'Mark']))->toEqual(
            'Max, John and Mark like this'
        );
        expect(displayLikes(['Alex', 'Jacob', 'Mark', 'Max']))->toEqual(
            'Alex, Jacob and 2 others like this'
        );
        expect(displayLikes(['Alex', 'Jacob', 'Mark', 'Max', 'Jill']))->toEqual(
            'Alex, Jacob and 3 others like this'
        );
    });

    // 04-find-missing-number
    test('Find missing number', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/04-find-missing-number/find-missing-number-solution.php';

        expect(findMissingNumber([1, 2, 3, 5]))->toBe(4);
        expect(findMissingNumber([10, 8, 6, 7, 5, 4, 2, 3, 1]))->toBe(9);
        expect(findMissingNumber([1, 3, 4, 5, 6]))->toBe(2);
    });

    // 05-find-missing-letter
    test('Find missing letter', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/05-find-missing-letter/find-missing-letter-solution.php';

        expect(findMissingLetter(['a', 'b', 'c', 'e']))->toBe('d');
        expect(findMissingLetter(['X', 'Z']))->toBe('Y');
        expect(findMissingLetter(['m', 'n', 'o', 'q', 'r']))->toBe('p');
        expect(findMissingLetter(['F', 'G', 'H', 'J']))->toBe('I');
    });

    // 06-are-all-chars-unique
    test('Are all characters unique', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/06-are-all-chars-unique/are-all-chars-unique-solution.php';

        expect(areAllCharactersUnique('abcdefg'))->toBe(true);
        expect(areAllCharactersUnique('abcdefgA'))->toBe(true);
        expect(areAllCharactersUnique('programming'))->toBe(false);
        expect(areAllCharactersUnique(''))->toBe(true);
        expect(areAllCharactersUnique('a'))->toBe(true);
    });

    // 07-first-non-repeating-character
    test('First non repeating character', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/07-first-non-repeating/first-non-repeating-solution.php';

        expect(findFirstNonRepeatingCharacter('aabccdeff'))->toBe('b');
        expect(findFirstNonRepeatingCharacter('aabbcc'))->toBe(null);
        expect(findFirstNonRepeatingCharacter('hello world'))->toBe('h');
    });

    // 08-dice-game
    test('Dice game', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/08-dice-game/dice-game-solution.php';

        $numSimulations = 100;
        $simulationResults = diceGameSimulation($numSimulations);

        expect($simulationResults)->toHaveLength($numSimulations);

        foreach ($simulationResults as $simulation) {
            ['dice1' => $dice1, 'dice2' => $dice2, 'sum' => $sum, 'result' => $result] = $simulation;

            expect($dice1)->toBeGreaterThanOrEqual(1);
            expect($dice1)->toBeLessThanOrEqual(6);

            expect($dice2)->toBeGreaterThanOrEqual(1);
            expect($dice2)->toBeLessThanOrEqual(6);

            expect($sum)->toBeGreaterThanOrEqual(2);
            expect($sum)->toBeLessThanOrEqual(12);

            if ($sum === 7 || $sum === 11) {
                expect($result)->toBe('win');
            } else if ($sum === 2 || $sum === 3 || $sum === 12) {
                expect($result)->toBe('lose');
            } else {
                expect($result)->toBe('roll again');
            }
        }
    });

    // 09-format-phone-number
    test('Format phone number', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/09-format-phone-number/format-phone-number-solution.php';

        expect(formatPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]))->toBe(
            '(123) 456-7890'
        );
        expect(formatPhoneNumber([5, 0, 2, 4, 8, 1, 9, 6, 3, 7]))->toBe(
            '(502) 481-9637'
        );
        expect(formatPhoneNumber([9, 9, 9, 9, 9, 9, 9, 9, 9, 9]))->toBe(
            '(999) 999-9999'
        );
    });

    // 10-validate-email
    test('Validate email', function () {
        require_once __DIR__ . '/../02-basic-challenges-2/10-validate-email/validate-email-solution.php';

        expect(validateEmail('john@example.com'))->toBe(true);
        expect(validateEmail('jane.doe@domain.org'))->toBe(true);

        expect(validateEmail('invalid-email'))->toBe(false);
        expect(validateEmail('@domain.com'))->toBe(false);
        expect(validateEmail('user@domain'))->toBe(false);
    });
});
