<?php

$names=["Ram","Shyam","Hari"];
//1. array_keys()
$keys=array_keys($names);
print_r ($keys);

//2. array() function (short array function)
$fruits=array("Apple","Papaya","Mango","Orange"); 
print_r($fruits);
$fruits[1]="Pineapple";
print_r($fruits); //papaya is replaced by Pineapple

//3. array_push()
array_push($fruits,"Banana"); //last index paxi add 
print_r($fruits);

//4. array_pop()
array_pop($fruits); //last index ko remove garxa
print_r($fruits);

//5.sort()
sort($fruits);
print_r($fruits);

//6.rsort()
rsort($fruits);
print_r($fruits);

//7. duplicate items bata unique linu xa vane
array_push($fruits,"Mango"); //duplicate value
print_r($fruits);
print_r(array_unique($fruits));

//8. merge two array
$boys=["Ram ","Shyam ","Hari "];
$girls=array("Rita","Nita","Geeta");
$students=array_merge($girls,$boys);
print_r($students);

//9. array_merge_recursive

?>