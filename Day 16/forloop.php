<?php
for($x=0;$x<10;$x++){
    echo "The Number is:$x<br>";
}

$color=array("red","green","blue","yellow");

foreach ($color as $value){
    echo "$value<br>";
}

$age=array("peter"=>"35","Ben"=>"37","joe"=>"43");

foreach($age as $x=>$val){
    echo "$x=$val<br>";
}
?>