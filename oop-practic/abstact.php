<?php
abstract class parentclass{
    public $name;
    abstract protected function calc($a,$b);

}
class childclass extends parentclass{
    public function calc($c,$d){
        echo $c + $d;
        echo "hello";
    }
}
$test = new childclass();
$test->calc(10,20);
?>
 