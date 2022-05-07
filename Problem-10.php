<?php

// question

/*
Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.

Note : Do not use any PHP control statement.
Expected Output : 200,204,208,212,216,220,224,228,232,236,240,244,248
*/


$my_array = array("abcd","abc","de","hjjj","g","wer");

$new_array = array_map('strlen', $my_array);

// Show maximum and minimum string length using max() function and min() function

echo "The shortest array length is " . min($new_array) . ". The longest array length is " . max($new_array).'.';

?>