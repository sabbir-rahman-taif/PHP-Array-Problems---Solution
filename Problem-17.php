<?php
// Write a PHP function that returns the lowest integer that is not 0. 


function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");
?>