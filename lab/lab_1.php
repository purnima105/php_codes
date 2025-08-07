<!-- Lab-1  Date- 2082/03/02  -->

<!-- 3. write a hello world program -->

<?php
echo "Hello World";
?>

<!-- 4.how to write single line comment & multi-line comment -->

<?php
// this is a single line comment 
echo "// is used for single line comment <br>";
/* this is a
multi-line
comment */
echo "/* */ is used for multi-line comment.";

?>

<!-- 5. create a different variable with unique data supported by php and print it's datatype. -->
<?php

$college="HDC"; //string
$courses=5; //integer
$number=4.5; //float
$value=true;
$student=["name"=>"Ram", "age"=>20, "course"=>"BIM"];  //array

// getting the data types
echo var_dump($college);
echo var_dump( $courses);
echo var_dump($number);
echo var_dump($value);
echo var_dump($student);
?>

<!-- 6. What are the different output functions or statement used in php? Write with example. -->

<?php
// 1. echo
echo "using echo \n";
// 2. print
print("Hello World\n");
// 3. using print_r
$age=["father"=> 39, "son" =>19];
print_r($age);

?>

<!-- 7. how to concat two strings ? Provide example of string interpolation.  -->
<?php
$first_name= "Ram";
$age= 19;
// concatenation
echo $first_name." ".$age."\n";

// string interpolation
echo "The age of $first_name is $age";
?>