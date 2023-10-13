<?php
class base{
    public static $name="MD Nayem";
}     
class derived extends base{
    public static function show(){
       
        echo self::$name;
    }
}

// echo base::$name;
// base::show();

$test = new derived();
$test->show();
?>