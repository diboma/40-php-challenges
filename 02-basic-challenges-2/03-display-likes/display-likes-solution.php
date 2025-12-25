<?php

/**
 * Returns a string of who likes the post.
 * 
 * @param string[] $names - The names of the people who like the post.
 * @return string - A string of who likes the post.
 */
function displayLikes(array $names): string
{
    if (count($names) === 0) {
        return 'no one likes this';
    } elseif (count($names) === 1) {
        return $names[0] . ' likes this';
    } elseif (count($names) === 2) {
        return $names[0] . ' and ' . $names[1] . ' like this';
    } elseif (count($names) === 3) {
        return $names[0] . ', ' . $names[1] . ' and ' . $names[2] . ' like this';
    } else {
        return $names[0] . ', ' . $names[1] . ' and ' . (count($names) - 2) . ' others like this';
    }
}
