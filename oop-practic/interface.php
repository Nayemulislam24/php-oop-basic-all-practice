<?php
interface parent1{
    function calc($a,$b);
}
interface parent2{
    function sub($c,$d);
}
class chaildclass implements parent1,parent2{
    public function calc($a,$b){
        echo $a + $b ."<br>";
    }
    public function sub($c, $d){
        echo  $c - $d ;
    }

}
$test = new chaildclass();
$test->calc(20,30) ;
$test->sub(50,30) ;
?>