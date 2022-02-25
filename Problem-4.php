<?php

//Question
/*
$x = array(1, 2, 3, 4, 5);
Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.

Sample Output :
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } 
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
*/

$x = array(1, 2, 3, 4, 5);

//solution
var_dump($x);
unset($x[2]);

$x = array_values($x);
echo "";
var_dump($x);

?>