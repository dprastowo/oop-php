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
    var $city;
    var $country;

    function location()
    {
        return $this->city . ', ' . $this->country;
    }

    function fullName()
    {
        return $this->firstName . ' '. $this->lastName . '(customer)';
    }
}

$u = new User;
$u->firstName = 'Muhammad';
$u->lastName = 'Ihsan';
//$u->city = 'Depok';
//$u->country= 'Indonesia';

echo $u->fullName() . "<br>";
//echo $u->location() . "<br>";

$c = new Customer;
$c->firstName = 'Muhammad';
$c->lastName = 'Ali';
$c->city = 'Depok';
$c->country= 'Indonesia';

echo $c->fullName() . "<br>";
echo $c->location() . "<br>";

if (is_subclass_of($c, 'User')) {
    echo "Instance Customer merupakan subclass class User <br>";
}

$parents = class_parents($c);
echo implode(', ', $parents);