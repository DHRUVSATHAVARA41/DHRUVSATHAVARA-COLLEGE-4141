<?php
echo "The orignal array is:<br>";
$a=array("xyz"=>12,"abc"=>35,"jkl"=>22);
echo "<pre>";
print_r($a);
echo "After ksorting...<br>";
ksort($a);
echo"<pre>";
print_r($a);
echo "After rsorting...<br>";
rsort($a);
echo"<pre>";
print_r($a);
?>