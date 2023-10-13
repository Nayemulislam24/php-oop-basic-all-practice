<?php
 class man{
    public $name;
    public $age;

 function __construct($fname,$fage){
    $this->name=$fname;
    $this->age=$fage;
    }

function info(){
    return "Name :".$this->name .  "<br>Age :".$this->age ;
        }

    }

class student_info extends man{
    public $address;

    function __construct($fname,$fage,$address){
        $this->name=$fname;
        $this->age=$fage;
        $this->address=$address;
        }

    function message(){
        return "Name :".$this->name .  "<br>Age :".$this->age .  "<br>Address :".$this->address; 
       }


}

$test = new student_info("Md.nayem",20,"dhaka");
// echo $test->info();
echo $test->message();


?>