<?php

//array creation
$names=[];
var_dump($names);  //array (0)

$names[0]="Ram";
$names[1]="Shyam";
$names[2]= "Hina";
var_dump($names);

//access array values using for each loop
//for each good to use when array has a null value 
foreach($names as $name){
    echo $name."<br>\n";
}

//for use garera print
$keys=array_keys($names);
for($i=0;$i<sizeof($keys);$i++){
    $key=$keys[$i];
    echo $key."\n<br>";
}

?>