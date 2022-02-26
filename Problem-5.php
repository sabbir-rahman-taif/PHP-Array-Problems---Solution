<?php

// Question

/*
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
*/

$color = array(4 => 'white', 6 => 'green', 11=> 'red');


echo reset($color); //white

//or,

echo reset($color)."\n"; //white

?>