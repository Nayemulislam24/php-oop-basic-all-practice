<?php
class man{
    public $name;
    public $age;
    function info($fname,$fage){
        $this->name=$fname;
        $this->age=$fage;
        return "Name : ".$this->name .",Age : ".$this->age;
    }

}

// $test = new man();
// $test->name ="Nayem";
// $test->age =20;

// echo "Name: ".$test->name;
// echo "<br>";
// echo "Age: ".$test->age;
// echo "<br>";

// echo "<br>";
// echo "<br>";

// $test2 =new man();
// $test2->name ="saki";
// echo "Name: ".$test2->name;

// echo "<br>";
// function call
$test3 = new man();
echo "<br> Function system";
echo "<br>";

echo $test3->info("MD.Nayem","30");


?>