<?php

/**
 * Recursively counts down from a given number to zero.
 *
 * Logs each number to the console, and prints "All done!" when the countdown reaches zero
 * or a negative value. This function uses recursion and does not return a value.
 *
 * @param int $num - The starting number for the countdown.
 * @return void - This function does not return anything.
 */
function countDown(int $num): void
{
    if ($num <= 0) {
        dump('All done!');
        return;
    }

    dump($num);
    $num--;
    countDown($num);
}
