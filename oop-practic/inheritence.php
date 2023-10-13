<?php
class employee{
    public $name;
    public $age;
    public $salary;

    function __construct($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;

    }
    function info(){
        echo "<h3> Employee Profile</h3>";
        echo "Emloyee Name:" . $this->name . "<br>";
        echo "Emloyee Age:" . $this->age . "<br>";
        echo "Emloyee Salary:" . $this->salary . "<br>";
    }
}

class manager extends employee{
    public $ta = 100;
    public $phone = 300;
    public $totalsalary;
  


function info(){
    $this->totalsalary = $this->salary + $this->ta + $this->phone;

    echo "<h3>Managar Profile</h3>";
    echo "Emloyee Name:" . $this->name . "<br>";
    echo "Emloyee Age:" . $this->age . "<br>";
    echo "Emloyee Salary:" . $this->totalsalary . "<br>";
}
}

$en1 = new manager("Nayem",20,10000);
$en2 = new employee("Zannat",20,20000);

$en1->info();
$en2->info();



?>