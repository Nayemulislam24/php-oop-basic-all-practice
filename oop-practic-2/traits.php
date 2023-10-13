<?php
trait test{
    public function hello(){
        echo"trait test-1";
    }
}
trait test2{
    public function hi(){
        echo"trait test-2";
    }
}
class A{
    use test;
}
class B{
    use test2;
}
$obj = new A();
$obj->hello();

echo"<br>";


$obj = new B();
$obj->hi();
?>