<?php

class Am
{
    public $name;
    function hello()
    {
        echo "Hello $this->name\n";
    }

    private $age; // to access the private properties we have to use setter getter method.
    function set_age($age)
    {
        $this->age=$age;
    }
    function get_age(){
        return $this->age;
    }
}

$am= new Am();
$am->name="Ram";
$am->hello();
$am->set_age(20);
echo $am->get_age();