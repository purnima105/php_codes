<?php

// numeric index array 

$names = ["ram ", "shyam ", "hari "];


$age = array(19, 20, 21);

print_r($age);
echo "<br>";

foreach ($names as $name) {
    echo $name;
}
echo "<br>";

for ($i = 0; $i < sizeof($names); $i++) {
    echo $names[$i];
}
echo "<br>";
echo "<br>";

// associative array

$marks = [" Rita " => 12, " Sita " => 15, " Rima " => 13];

print_r($marks);
echo "<br>";

foreach ($marks as $key => $mark) {
    echo $key . $mark;
}
echo "<br>";

$key = array_keys($marks);
for ($i = 0; $i < sizeof($key); $i++) {
    $key=$key[$i];

}


 
?>