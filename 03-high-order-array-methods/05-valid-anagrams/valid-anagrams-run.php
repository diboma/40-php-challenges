<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/valid-anagrams-solution.php';

dump(validAnagrams('listen', 'silent'));
dump(validAnagrams('hello', 'world'));
dump(validAnagrams('astronomer', 'moonstarer'));
dump(validAnagrams('apple', 'banana'));
