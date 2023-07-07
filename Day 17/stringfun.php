<?php
$str="Apple's Lab";
$result=addslashes($str);
echo $str.'<br>';
echo $result;
echo '<br?>'.'<br>'.'<br>';

$str1="Rakesh,Ramesh,Suresh,Mahesh";
$result=explode(',',$str1);
echo '<pre>';
print_r($result);
echo '<br>'.'<br>'.'<br>';

$str="Hello World. It's a beautiful day.";
print_r(explode(" ",$str));
echo'<pre>';
echo '<br>'.'<br>'.'<br>';

$implode=implode(' ',$result);
echo $implode;
echo '<br>'.'<br>'.'<br>';

echo strpos("hello... hi good moring!","hi");
echo '<br>'.'<br>'.'<br>';

echo strlen("Helloo..");
echo '<br>'.'<br>'.'<br>';

echo stripos("hello hi good morning!","hi");
echo '<br>'.'<br>'.'<br>';

echo strrpos("hello hi good morning!","hi");
echo '<br>'.'<br>'.'<br>';

$htmlentity="&lt;H&gt";
htmlentities($htmlentity);
echo $htmlentity;
echo '<br>'.'<br>'.'<br>';

html_entity_decode($htmlentity);
echo $htmlentity;
echo '<br>'.'<br>'.'<br>';

$text="THIS IS NICE TEXT";
echo lcfirst($text);
echo '<br>'.'<br>'.'<br>';

$text="this is nice text";
echo ucfirst($text);
echo '<br>'.'<br>'.'<br>';

$psswrd="Abc@123";
echo md5($psswrd);
echo '<br>'.'<br>'.'<br>';

$psswrd="Abc@123";
echo sha1($psswrd);
echo '<br>'.'<br>'.'<br>';

$text1="        Abc@123#";
echo ltrim($text1);
echo '<br>'.'<br>'.'<br>';

$text1="Abc@123#        ";
echo rtrim($text1);
echo '<br>'.'<br>'.'<br>';

$text1="        Abc@123#       ";
echo trim($text1);
echo '<br>'.'<br>'.'<br>';

$rtext="Hellooo";
$text2="Good Moring";
echo str_replace("Good",$rtext,$text2);
echo '<br>'.'<br>'.'<br>';

$amount=1000;
$nformat=number_format($amount,2);
echo $nformat;




?>