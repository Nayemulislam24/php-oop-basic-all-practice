<?php
trait hello{
    public function sayhello(){
        echo "Hello every one<br>";
    } 
    public function sayhi(){
        echo "Hi every one<br>";
    } 
}
trait byee{
    public function saybyee(){
        echo "Hello every one Byee<br>";
    }
    
}
class base{
    use hello;
}
class base2{
    use hello,byee;
}
$test = new base();
$test2 = new base2();
$test->sayhello();
$test->sayhello();
$test2->saybyee();
$test2->sayhi();

?>