<?php
class car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color=$color;
        $this->model=$model;

    }
    public function message(){
        return "my car is a ".$this->color." ".$this->model."!";
    }
}

$myCar=new car("black","thar");
echo $myCar->message();
echo "<br>";
$myCar = new car("red","thar");
echo $myCar->message();
?>