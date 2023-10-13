<?php 

$c = 0;
function test(){
    $a = 1;
    $b = 2;
    
    $c = $a + $b;
    
    return $c;

}

$c = test();
echo $c;
