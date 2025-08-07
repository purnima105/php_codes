<?php
declare(strict_types=1);
// lab 3

// FUNCTION
// 1. create a function hello_world without parameter
// 2. create a function add with two parameter. Do addition and print the result 
// 3. create a function multiply with 2 parameter which returns the result.
// 4. create a function hello_user with two parameter name and age. Enforce data type for each parameter (scalar data type ).
// 5. create a function which should return interger value . donot return anything from the function. write what error or warning 
//    it genereate. and provide the solution.

// INCLUDE/REQUIRE
// 6. create a file named function.php inside includes folder . on main folder create index.php and use the functions define in function.php

// 1.
function hello_world()
{
    echo "Hello World." . "<br>";
}
hello_world();

// 2.
function add($x, $y)
{
    echo "addition" . $x + $y . "<br>";
}
add(5, 3);

// 3.
function multiply($x, $y)
{
    return $x * $y;
}
$z = multiply(5, 3);
echo "multiplication:" . $z . "<br>";

// 4.

function hello_user(string $name, int $age)
{
    echo "Hello $name your age is $age <br>";
}
hello_user("Purnima", 20);

// 5.
// function rtn($a, $b): int
// {
//    echo $a + $b;
// }
// rtn(2, 3);

// solving error
function solving_rtn($a, $b): int
{
    return $a + $b;
}
// $c = solving_rtn(2, 3);
echo "The return value is ".solving_rtn(2, 3);

// 6.




?>