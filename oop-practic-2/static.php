<?php
class personal{
    public static $name="test static method";
    public function info(){
        return self::$name;
    }
    public static function info1(){
        echo self::$name;
    }

}
echo personal::$name;
echo "<br>";
echo "<br>";
echo personal::info1();
echo "<br>";
$obj = new personal();
echo $obj->info();
?>