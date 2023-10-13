<?php

abstract class A{
public $name;
public function __construct($n){
    $this ->name = $n;
    }
abstract public function show();

}

class B extends  A{
    public function show(){
        return $this->name;
    }
}
$test = new b("abstract class test");
echo $test->show();
echo"<br>";
$test2 = new b("abstract class test-2");
echo $test2->show();

?>