<?php
class Technologoy{
    const TV_const = "Constant paractic" ;
    function tv(){
    return self :: TV_const;
    }
}
$test = new Technologoy();
echo $test->tv();
?>