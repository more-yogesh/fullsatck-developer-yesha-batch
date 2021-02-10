<?php

class A
{

    // public function a(){

    // }

    public function __construct()
    {
    }

    public static function greet()
    {
        return "Hellow";
    }
}

// $obj = new A;

echo A::greet();

class B extends A
{
    public static function test()
    {
        return parent::greet();
    }
}
