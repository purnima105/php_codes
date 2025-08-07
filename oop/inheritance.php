<?php

// concept of overriding

class Father
{
    // overiding
    public function hello()
    {
        echo "hello from parent (father) class\n";
    }
}
class Daughter extends Father
{
    // overiding
    public function hello()
    {
        echo "hello from child (daughter) class\n";
        parent::hello();
    }
}
$call= new Daughter();
$call->hello();


class Person{
    public $name;
    public $age;
    public $address;

    public function __construct($name, $age, $address){
        $this->name= $name;
        $this->age=$age;
        $this->address=$address;
        $this->info();
    }
    public function info(){
        echo "$this->name $this->age $this->address" ;
    }

}
class Student extends Person{
    public $crn;

    public function __construct($name, $age, $address,$crn)
    {
        $this->crn=$crn;
        parent::__construct($name, $age, $address);
        echo $crn;
    }
}
$s=new Student(" Ram ",20," BRT  ",1234);