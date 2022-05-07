<?php

//Question

/*
Write a PHP script to sort the following associative array
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
*/

//solution


// Part-A Start
$a=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

asort($a);

echo "(a) Associative array : Ascending order sort by value: <br>";

foreach($a as $key=>$value) {
  echo "Age of ".$key." is : ".$value."<br>";
}
// Part-A End


// Part-B Start
$b=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

ksort($b);

echo "(b) Associative array : Ascending order sort by Key: <br>";

foreach($b as $key=>$value) {
  echo "Age of ".$key." is : ".$value."<br>";
}
// Part-B End


// Part-C Start
$c=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

arsort($c);

echo "(c) Associative array : Descending order sorting by Value: <br>";

foreach($c as $key=>$value) {
  echo "Age of ".$key." is : ".$value."<br>";
}
// Part-C End


// Part-D Start
$d=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

krsort($d);

echo "(d) Associative array : Descending order sorting by Key: <br>";

foreach($d as $key=>$value) {
  echo "Age of ".$key." is : ".$value."<br>";
}
// Part-D End

?>