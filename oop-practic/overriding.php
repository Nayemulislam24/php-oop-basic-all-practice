<?php
class base{
    public $name = "Parent class";
    function calc($a,$b){
        return $a * $b;
    }
}


class derived extends base {
    public $name = "Chaild  class";
    function calc($a,$b){
        return $a + $b;
    }
}
$test = new base();
echo $test->name . "<br>";
echo $test->calc(5,10);


?>