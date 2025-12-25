<?php

function dumpnl(...$args): void
{
    dump(...$args);
    echo PHP_EOL;
}

function dumpWithLine(...$args): void
{
    dump(...$args);
    echo PHP_EOL;
    line();
}

function nl()
{
    echo PHP_EOL;
}

function line(int $length = 40): void
{
    echo str_repeat('-', $length), PHP_EOL;
}
