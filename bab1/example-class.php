<?php

class Student
{

}

$classes = get_declared_classes();

echo "Classes : " . implode(', ', $classes). "</br>";

$classNames = ['Product', 'Student', 'student'];

foreach ($classNames as $classNames) {
    if (class_exists($classNames)){
        echo "{$classNames} class ada. </br>";
    } else {
        echo "{$classNames} class tidak ada. </br>"; 
    }
}