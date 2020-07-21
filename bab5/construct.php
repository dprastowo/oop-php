<?php

class Student
{
    public static $instanceCount = 0;

    public function __construct()
    {
        self::$instanceCount++;
    }
}

class Elementary extends Student
{
    public $total = 3;
}

class Junior extends Student
{
    public $total = 2;
}

class Senior extends Student
{
    public $total = 5;
}

$elemetary = new Elementary;
echo "Elementary: {$elemetary->total} <br>";

$junior = new Junior;
echo "Junior: {$junior->total} <br>";

$senior = new senior;
echo "Senior: {$senior->total} <br>";

echo "Instance Count: " . Student::$instanceCount;