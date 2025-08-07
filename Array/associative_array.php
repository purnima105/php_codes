<?php

$boys=["101"=>"Ram","102"=>"Shyam"];
$girls=["103"=>"Mita","104"=>"Geeta"];

// key -string number value ma xa vane merge garda numeric index
// ma change gardinxa so string char ma lekhnu key
$students=array_merge($boys,$girls);
print_r($students);

// 9.array_merge_recursive()
$man=["Ram"=> "10","Shyam"=> "15", "hija"=>"12"];
$women=["Rita"=> "14","Sita"=> "13", "hija"=>"12"];

// recursive le kunai key ko name same xa vane teslai as an array store garxa
$peoples=array_merge_recursive($man,$women);
print_r($peoples);


?>