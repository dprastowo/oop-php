<?php

class Student
{
    var $name;
    var $country = 'none';

    function sayHello()
    {
        return 'Hello world!';
    }

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$student1 = new Student;
$student2 = new Student;

$student1->firstName = 'Muhammad';
$student1->lastName = 'Ihsan';

echo $student1->firstName . "<br>";
echo $student1->lastName . "<br>";

echo $student1->sayHello() . "<br>";
echo $student1->fullName() . "<br>";

$class_methods = get_class_methods('Student');
echo "Method milik student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

if (method_exists('Student', 'sayHello')) {
    echo "Method sayHello tersedia";
} else {
    echo "Method name tidak tersedia";
}