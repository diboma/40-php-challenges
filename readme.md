# 40 PHP Challenges

Based on [Traversy JS Challenges, Data Structures, and Algorithms](https://github.com/PacktPublishing/70-JavaScript-Challenges---Data-Structures-and-Algorithms)

## File Structure

Each folder includes:

- `readme.md` - The challenge/code instructions.
- `[name].php` - This is your working file.
- `[name]-solution.php` The solution code.

Sometimes the folder also includes:

- `[name]-solution-eloquent.php` - File to run the code manually. The function is already imported and called with expected parameters.
- `[name]-run.php` - File to run the code manually. The function is already imported and called with expected parameters.

## Install dependencies

Run the command `composer install` from the root directory. This will install the following dependencies:

```json
  "require": {
    "illuminate/collections": "^12.43",
    "illuminate/support": "^12.43"
  },
  "require-dev": {
    "pestphp/pest": "^3.8",
    "yiisoft/var-dumper": "^1.7"
  },
```

## Running Tests

The tests are located in the `./tests` folder and are written using Pest. You can run `composer run test` from the roor directory to run the tests.

## Getting Started

1. Clone the repo
2. Run `composer install`
3. Run `composer run test` to run the tests.

## Index of Challenges/Lessons

#### 01. Basic Challenges 1

These are mostly challenges that have to do with loops, conditionals, and string manipulation.

1. [Hello World Test Challenge](./01-basic-challenges-1/01-hello-world/readme.md)
2. [Get Sum Test Challenge](./01-basic-challenges-1/02-get-sum/readme.md)
3. [Calculator](./01-basic-challenges-1/03-calculator/readme.md)
4. [Count Occurrences](./01-basic-challenges-1/04-count-occurrences/readme.md)
5. [Find Max Number](./01-basic-challenges-1/05-find-max-number/readme.md)
6. [Title Case](./01-basic-challenges-1/06-title-case/readme.md)
7. [Reverse String](./01-basic-challenges-1/07-reverse-string/readme.md)
8. [Palindrome](./01-basic-challenges-1/08-palindrome/readme.md)
9. [Count Vowels](./01-basic-challenges-1/09-count-vowels/readme.md)
10. [Remove Duplicates](./01-basic-challenges-1/10-remove-duplicates/readme.md)

#### 02. Basic Challenges 2

These are more challenges that have to do with iteration. They are slightly harder than the first set of challenges.

1. [FizzBuzz Array](./02-basic-challenges-2/01-fizzbuzz-array/readme.md)
2. [Array Intersection](./02-basic-challenges-2/02-array-intersection/readme.md)
3. [Display Likes](./02-basic-challenges-2/03-display-likes/readme.md)
4. [Find Missing Number](./02-basic-challenges-2/04-find-missing-number/readme.md)
5. [Find Missing Letter](./02-basic-challenges-2/05-find-missing-letter/readme.md)
6. [Are All Characters Unique](./02-basic-challenges-2/06-are-all-chars-unique/readme.md)
7. [First Non-Repeating Character](./02-basic-challenges-2/07-first-non-repeating/readme.md)
8. [Dice Game Simulation](./02-basic-challenges-2/08-dice-game/readme.md)
9. [Format Phone Number](./02-basic-challenges-2/09-format-phone-number/readme.md)
10. [Validate Email](./02-basic-challenges-2/10-validate-email/readme.md)

#### 03. High Order Array Methods

The next set of challenges/lessons has to do with high order array methods.  
Even though most of these can be done with a for loop, the solution will use high order array methods.

1. [Simple Examples](./03-high-order-array-methods/01-simple-examples/readme.md)
2. [Sum Of Even Squares](./03-high-order-array-methods/02-sum-of-even-squares/readme.md)
3. [Calculate Total Sales](./03-high-order-array-methods/03-calculate-total-sales/readme.md)
4. [Highest Scoring Word](./03-high-order-array-methods/04-highest-scoring-word/readme.md)
5. [Valid Anagrams](./03-high-order-array-methods/05-valid-anagrams/readme.md)
6. [HashTag Generator](./03-high-order-array-methods/06-hashtag-generator/readme.md)
7. [Valid IPv4 Address](./03-high-order-array-methods/07-valid-ipv4/readme.md)
8. [Analyze Car Milage](./03-high-order-array-methods/08-analyze-car-milage/readme.md)
9. [Password Validator](./03-high-order-array-methods/09-password-validator/readme.md)
10. [Find Missing Letter Refactor](./03-high-order-array-methods/10-find-missing-letter-refactor/readme.md)

#### 04. Recursion

The next batch of challenges/lessons has to do with recursion.

1. [Recursion Intro (Count Down)](./04-recursion/01-count-down/readme.md)
2. [Unwinding (Sum Up To)](./04-recursion/02-unwinding/readme.md)
3. [Reverse String Recursion](./04-recursion/03-reverse-string-recursion/readme.md)
4. [Fibonacci Sequence](./04-recursion/04-fibonacci-sequence/readme.md)
5. [Factorial](./04-recursion/05-factorial/readme.md)
6. [Power](./04-recursion/06-power/readme.md)
7. [Array Sum](./04-recursion/07-array-sum/readme.md)
8. [Number Range](./04-recursion/08-number-range/readme.md)
9. [Flatten Array](./04-recursion/09-flatten-array/readme.md)
10. [Permutations](./04-recursion/10-permutations/readme.md)
