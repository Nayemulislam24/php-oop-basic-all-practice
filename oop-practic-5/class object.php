<?php
class test
{
    // Properties
    public $name;
    public $roll;
    //methods
    public function hi()
    {
        echo "This is my name:".$this->name."<br>";
    }
    //methods
    public function test($value)
    {
        echo "This is  age:".$this->roll=$value;
    }
}
//object 
$hello = new test();
//method call
$hello->name="jannatun Nayem";
$hello->hi("test");
$hello->test("20");


