<?php

// Question No-2
/*
$color = array('white', 'green', 'red'') Go to the editor
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,

.green
.red
.white
*/

$color = array('white', 'green','red');

// Solution 1
echo $color[0].", ".$color[1].", ".$color[2].","."<br>";
echo "<ul><li>$color[1]</li><li>$color[2]</li><li>$color[0]</li></ul>";

// Solution 2
foreach ($color as $x) {
  echo "$x, ";
}
  sort($color);
  echo "<ul>";
  foreach ($color as $u) {
  echo "<li>$u</li>";
  }
  echo "</ul>";

  ?>