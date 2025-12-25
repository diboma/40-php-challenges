<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/palindrome-solution.php';

dump(isPalindrome('racecar'));                             // true
dump(isPalindrome('Hello'));                               // false
dump(isPalindrome('A man, a plan, a canal, Panama'));      // true
dump(isPalindrome('12321'));                               // true
