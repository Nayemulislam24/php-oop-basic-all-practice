<?php
class abc{
    public function __construct(){
        echo "This is Construct function<br>";
    }
    public function hello(){
        echo "Hello Everyone <br>";
    }
    public function __destruct(){
        echo "This is destruct function<br>";
    }
}
$test = new abc();
$test->hello();
$test->hello();
$test->hello();
$test->hello();
?>





<?php
class abcd{
    private $conn;
    public function __construct(){
       $this->conn = mysquli_connect();
    }
    public function hello(){
        echo "Hello Everyone <br>";
    }
    public function __destruct(){
         mysquli_connect($this->conn);
    }
}
$test1 = new abcd();
$test2->hello();
$test3->hello();
$test4->hello();
$test5->hello();
?>