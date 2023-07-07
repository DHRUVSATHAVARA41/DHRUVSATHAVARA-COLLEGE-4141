<?php
$array1=array("key1"=>50,"key2"=>40,"key3"=>30);
echo print_r($array1);
echo "<br>";
$array2=array(50,40,30);
echo print_r($array2);
echo "<br>";
$array3=["d","h","r","u","v"];
echo print_r($array3);
echo "<br>";
//multidimensional array

$array4=array(
    array("BMW","THAR","AUDI"),
    array("mango","banana","apple"),
    array("rohan","darshan","meet")
);
echo print_r($array4);
echo "<br>";
$array5=array(
    "first"=>array("first_first"=>"apple"),
    "second"=>array("second_second"=>"mango"),
    "third"=>array(
        array("third_third"=>"orange")
    )
);
echo "<pre>";
echo print_r($array5);
echo "<br>";

//sorting

rsort($array1);
ksort($array2);

print_r($array1);
print_r($array2);

$sort=sort($array5);
print_r($sort);
?>