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

$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "Associative array : Ascending order sort by value";

asort($array2);

foreach($array2 as $y=>$y_value){
  echo "Age of ".$y." is : ".$y_value."";
}

echo "Associative array : Ascending order sort by Key";

$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);

foreach($array3 as $y=>$y_value){
  echo "Age of ".$y." is : ".$y_value."";
}
echo "Associative array : Descending order sorting by Value";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Key
";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
?>