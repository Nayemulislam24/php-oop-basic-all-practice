<?php
class man{
public $name;
public $age;
public $address;

function __construct($name,$age){
    $this->name=$name;
    $this->age=$age;
    }

 function __destruct(){
    echo "Name :".$this->name .  "<br>Age :".$this->age ;
     }
}
$test = new man("Md.Nayem",20);


?>