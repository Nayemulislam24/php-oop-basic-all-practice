<?php
interface A{
    function hello($n);

}
interface B{
    function hi($n);
    function bye($n);
}

class c implements A{
    function hello($n){
        echo "Hello".$n;
    }
    function hi($n){
        echo "interface test-2"  .$n;
    }
    function bye($n){
        echo "inerface test-3"  .$n;
    }
}
$test = new c();
$test->hello("MD.Nayem");
echo"<br>";
$test->hi("MD.shakil");
echo"<br>";
$test->bye("MD.Zannat");
?>