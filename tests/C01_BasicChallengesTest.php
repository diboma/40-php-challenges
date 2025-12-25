<?php

describe('Basic Challenges 1', function () {
    // 01-hello-world
    test('Hello world', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/01-hello-world/hello-world-solution.php';
        expect(helloWorld())->toBe('Hello World!');
    });

    // 02-get-sum
    test('Get sum', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/02-get-sum/get-sum-solution.php';
        expect(getSum(1, 2))->toBe(3);
        expect(getSum(10, 5))->toBe(15);
        expect(getSum(2, 2))->toBe(4);
    });

    // 03-calculator
    test('Calculator', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/03-calculator/calculator-solution.php';
        expect(calculator(1, 2, '+'))->toBe(3);
        expect(calculator(10, 5, '-'))->toBe(5);
        expect(calculator(2, 2, '*'))->toBe(4);
        expect(calculator(10, 5, '/'))->toBe(2);
    });

    // 04-count-occurrences
    test('Count occurrences', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/04-count-occurrences/count-occurrences-solution.php';
        expect(countOccurrences('hello', 'l'))->toBe(2);
        expect(countOccurrences('programming', 'm'))->toBe(2);
        expect(countOccurrences('banana', 'a'))->toBe(3);
    });

    // 05-find-max-number
    test('Find max number', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/05-find-max-number/find-max-number-solution.php';
        expect(findMaxNumber([1, 5, 3, 9, 2]))->toBe(9);
        expect(findMaxNumber([0, -1, -5, 2]))->toBe(2);
        expect(findMaxNumber([10, 10, 10, 10]))->toBe(10);
    });

    // 06-title-case
    test('Title case', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/06-title-case/title-case-solution.php';
        require_once __DIR__ . '/../01-basic-challenges-1/06-title-case/title-case-solution-eloquent.php';

        expect(titleCase('hello world'))->toBe('Hello World');
        expect(titleCase('javascript programming'))->toBe('Javascript Programming');
        expect(titleCase('openai chatbot'))->toBe('Openai Chatbot');

        expect(titleCaseEloquent('hello world'))->toBe('Hello World');
        expect(titleCaseEloquent('javascript programming'))->toBe('Javascript Programming');
        expect(titleCaseEloquent('openai chatbot'))->toBe('Openai Chatbot');
    });

    // 07-reverse-string
    test('Reverse string', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/07-reverse-string/reverse-string-solution.php';
        require_once __DIR__ . '/../01-basic-challenges-1/07-reverse-string/reverse-string-solution-eloquent.php';

        expect(reverseString('Hello'))->toBe('olleH');
        expect(reverseString('JavaScript'))->toBe('tpircSavaJ');
        expect(reverseString('12345'))->toBe('54321');

        expect(reverseStringEloquent('Hello'))->toBe('olleH');
        expect(reverseStringEloquent('JavaScript'))->toBe('tpircSavaJ');
        expect(reverseStringEloquent('12345'))->toBe('54321');
    });

    // 08-Palindrome
    test('Checking for palindrome strings', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/08-palindrome/palindrome-solution.php';
        require_once __DIR__ . '/../01-basic-challenges-1/08-palindrome/palindrome-solution-eloquent.php';

        expect(isPalindrome('racecar'))->toBe(true);
        expect(isPalindrome('Hello'))->toBe(false);
        expect(isPalindrome('A man, a plan, a canal, Panama'))->toBe(true);
        expect(isPalindrome('12321'))->toBe(true);

        expect(isPalindromeEloquent('racecar'))->toBe(true);
        expect(isPalindromeEloquent('Hello'))->toBe(false);
        expect(isPalindromeEloquent('A man, a plan, a canal, Panama'))->toBe(true);
        expect(isPalindromeEloquent('12321'))->toBe(true);
    });

    // 09-count-vowels
    test('Count vowels', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/09-count-vowels/count-vowels-solution.php';
        require_once __DIR__ . '/../01-basic-challenges-1/09-count-vowels/count-vowels-solution-eloquent.php';

        expect(countVowels('Hello, World!'))->toBe(3);
        expect(countVowels('JavaScript'))->toBe(3);
        expect(countVowels('OpenAI Chatbot'))->toBe(6);
        expect(countVowels('Coding Challenge'))->toBe(5);

        expect(countVowelsEloquent('Hello, World!'))->toBe(3);
        expect(countVowelsEloquent('JavaScript'))->toBe(3);
        expect(countVowelsEloquent('OpenAI Chatbot'))->toBe(6);
        expect(countVowelsEloquent('Coding Challenge'))->toBe(5);
    });

    // 10-remove-duplicates
    test('Remove duplicates from an array', function () {
        require_once __DIR__ . '/../01-basic-challenges-1/10-remove-duplicates/remove-duplicates-solution.php';
        require_once __DIR__ . '/../01-basic-challenges-1/10-remove-duplicates/remove-duplicates-solution-eloquent.php';

        expect(removeDuplicates([1, 2, 3, 2, 4, 1, 5]))->toEqual([1, 2, 3, 4, 5]);
        expect(removeDuplicates(['apple', 'banana', 'orange', 'banana', 'kiwi']))
            ->toEqual(['apple', 'banana', 'orange', 'kiwi']);
        expect(removeDuplicates([true, true, false, true, false]))
            ->toEqual([true, false]);

        expect(removeDuplicatesEloquent([1, 2, 3, 2, 4, 1, 5]))->toEqual([1, 2, 3, 4, 5]);
        expect(removeDuplicatesEloquent(['apple', 'banana', 'orange', 'banana', 'kiwi']))
            ->toEqual(['apple', 'banana', 'orange', 'kiwi']);
        expect(removeDuplicatesEloquent([true, true, false, true, false]))
            ->toEqual([true, false]);
    });
});
