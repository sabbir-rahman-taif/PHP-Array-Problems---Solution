<?php

//Write a PHP script that inserts a new item in an array in any position.


// solution
$original = array( '1','2','3','4','5' );

echo "Original array: ";

foreach ($original as $x) {
  echo "$x ";
}
echo "<br>";
$inserted = '$';
array_splice( $original, 3, 0, $inserted );

echo "After inserting '$' the array is: ";

foreach ($original as $x) {
  echo "$x ";
}

?>