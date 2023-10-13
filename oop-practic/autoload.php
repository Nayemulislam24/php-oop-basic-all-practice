<?php
// require "classes/first.php";
// require "classes/second.php";
spl_autoload_register(function ($class_name) {
    include "classes/" .$class_name . '.php';
});

$obj  = new MyClass1();
$obj2 = new MyClass2(); 
// $test = new second();
// $test1 = new first();
?>