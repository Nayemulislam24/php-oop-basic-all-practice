<?php

namespace animals;

include_once 'dog.php';
include_once 'cat.php';



$test = new dog();
$test->greet();

$test = new \cat();
$test->greet();