<?php

class Basic
{
    // class creation
    public function hello()
    { //method creation
        echo "Hello from the method";
    }

    // method with given return type and argument type
    public function hello_user(string $name): void
    {
        echo "\nHello $name\n";
    }
}
// creating instance/object
$basic = new Basic();
$basic->hello();
$basic->hello_user("Ram");

if($basic instanceof Basic){
    echo "Yes. \$base is instance of Basic\n ";
}
else{
    echo "NO. \$base is not the instance of Basic ";
}
