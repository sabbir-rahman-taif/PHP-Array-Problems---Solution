<?php

// Write a PHP function to sort subnets. 

function sort_subnets ($x, $y) {
  $x_arr = explode('.', $x);
  $y_arr = explode('.', $y);
  foreach (range(0,3) as $i) {
      if ( $x_arr[$i] < $y_arr[$i] ) {
          return -1;
      }
      elseif ( $x_arr[$i] > $y_arr[$i] ) {
          return 1;
      }
  }
  return -1;
}

$subnet_list = 
array('192.169.12',
'192.167.11',
'192.169.14',
'192.168.13',
'192.167.12',
'122.169.15',
'192.167.16'
);
usort($subnet_list, 'sort_subnets');
print_r($subnet_list);

?>