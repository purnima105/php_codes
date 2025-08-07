<?php

class Constructor
{
    public $name;
    public $age;
    public function __construct($name, $age) // construction create
    {
        $this->name = $name;
        $this->age = $age;
        $this->hello_print();
    }
    public function hello_print(){
        echo "Hello $this->name your age is $this->age\n";
    }

    public function __destruct(){
        echo "instance is destroyed\n";
    }
}

$c= new Constructor("Ram",20);
