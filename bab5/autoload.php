<?php

spl_autoload_register('myAutoload'); 

function myAutoload($className) {
    $path = "classes/";
    $extension = ".php";
    $fullpath = $path . $className . $extension;

    include_once $fullpath;
    
}

$student = new Student();
echo $student->name;