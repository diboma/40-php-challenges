<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/password-validator-solution.php';
require_once __DIR__ . '/password-validator-solution-eloquent.php';

dump(validatePassword('Abc12345')); // true
dump(validatePassword('password123')); // false
dump(validatePassword('Pass')); // false
dump(validatePassword('HelloWorld')); // false

dump(validatePasswordEloquent('Abc12345')); // true
dump(validatePasswordEloquent('password123')); // false
dump(validatePasswordEloquent('Pass')); // false
dump(validatePasswordEloquent('HelloWorld'));// false