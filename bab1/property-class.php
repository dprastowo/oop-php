<?php

class Student
{
    var $name;
    var $country = 'none';
}

$student1 = new Student;
$student2 = new Student;

$student1->name = 'Hakim';
$student2->name = 'Luna';

echo $student1->name . "<br>";
echo $student2->name . "<br>";

$class_vars = get_class_vars('Student');
echo "Property milik student: ";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

if (property_exists('Student', 'name')) {
    echo "Property name tersedia";
} else {
    echo "Property name tidak tersedia";
}