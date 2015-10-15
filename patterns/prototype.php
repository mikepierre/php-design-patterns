<?php
class Cloner()
{
    public $first_obj;
    public $second_obj;

    function __clone()
    {
        $this->second_obj = clone $this->first_obj;
    }
}

class Reservations()
{
    public static $instances = 0;
    public  $instance;
    
    public function __construct() 
    {
        $this->instance = ++self::$instances;
    }

    public function  __clone() 
    {
        $this->instance = ++self::$instances;
    }

}

$object = new Cloner();

$object->first_obj = new Reservations();
$object->first_obj = new Reservations();
