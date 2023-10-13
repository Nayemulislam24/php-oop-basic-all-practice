<?php
interface A
{
    public function hello($n);
}
interface B
{
    public function hi($n);
    public function bye($n);
}
class C implements A
{
    public function hello($n)
    {
        echo "hllo"  . $n;
    }
}
$test = new C();
$test->hello("third interface practic");