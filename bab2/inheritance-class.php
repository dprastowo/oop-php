<?php

class User 
{
    var $firstName;
    var $lastName;
    var $userName;

    function fullName()
    {
        return $this->firstName . ' '. $this->lastName;
    }
}

class Customer extends User 
{

}

$c = new Customer;
$c->firstName = 'Muhammad';
$c->lastName = 'Ali';

echo $c->fullName() . "<br>";

if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass class User <br>";
}

$parents = class_parents($c);
echo implode(', ', $parents);