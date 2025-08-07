<?php

// arithmetic operator 
echo "\nARITHMETIC OPERATORS\n";

$a = 10;
$b = 5;

$c = $a + $b; //addition
echo "$c\n";
$c = $a - $b;  //subtraction
echo "$c\n";
$c = $a * $b; //multiplication
echo "$c\n";
$c = $a / $b; //division
echo "$c\n";
$c = $a % $b; //modulus
echo "$c\n";
$c = $a ** $b; //exponential
echo "$c\n";

// ASSIGNMENT OPERATORS

echo "\nASSIGNMENT OPERATORS\n";

$c = $a;        //  =
echo "$c\n";
$c += $a;       //  +=
echo "$c\n";
$c -= $a;       //  -=
echo "$c\n";
$c *= $a;       //  *=
echo "$c\n";
$c /= $a;       //  /=
echo "$c\n";
$c %= $a;       //  %=
echo "$c\n";
$c **= $a;       //  **=
echo "$c\n";

// STRING OPERATORS

echo "\nSTRING OPERATORS\n";

$fname = "Ram ";
$lname = "Sharma";
$fullname = $fname . $lname . "\n";  // . (concatenation)
echo $fullname;

$fname .= $lname;   // .= (concatenation assignment)
echo $fname;

// Increment and decrement operators

$x = 5;

echo "\n" . $x++; //5 
echo "\n" . $x--; //6 
echo "\n" . ++$x; //6
echo "\n" . --$x; //5

?>