<?php

abstract  class Database
{
    abstract public function connection();
    
    public function disconnect()
    {
        //Implementasi
    }
}

class Model extends Database
{
    public function connection()
    {
        //
    }
}

$model = new Model();
// $db = new Database();