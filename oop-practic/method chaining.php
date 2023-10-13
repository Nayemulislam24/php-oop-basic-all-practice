<?php
class personal{
    public function first(){
        echo"This is fist function<br>";
        return$this;
    }
    public function second(){
        echo"This is second function<br>";
        return$this;
    }
    public function third(){
        echo"This is third function";
    }
}


$test = new personal();
$test->first()->second()->third();


?>