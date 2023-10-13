<?php

require 'products.php';
require 'testing.php';

function wow(){
    echo "wow from Index File.<br><br><br>";
}

$obj = new test\product();


wow();
?>
