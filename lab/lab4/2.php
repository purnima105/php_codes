<!-- 2)Here is a message variable.Do as follows $message="welcome to HDC". -->

<?php
$message="Welcome to HDC";
// a)Print how many characters are there
echo "The length is ".strlen($message)."<br>";

// b)Print how many words are there
echo "The no. of words are: ". str_word_count($message)."<br>";

// c)From what index HDC starts.
echo "The position of HDC starts from: ".strpos($message,"HDC");

// d)Using array function print welcome from $message.
$sub =substr($message, 0, 7);
echo $sub . "<br>";   

// e)print uppercase and lowercase from of $message
$upp= strtoupper($message);
$lrr= strtolower($message);
echo "Uppercase: " . $upp . "<br>";
echo "Lowercase: " . $lrr . "<br>"; 

// f)Replace HDC to Himalaya darshan college using array function
$replace = str_replace("HDC", "Himalaya Darsan College", $message);
echo $replace . "<br>";

// 3)WAP to convert string to array and array to string
$ArrayFromString = explode(" ", $message);
print_r($ArrayFromString);
echo "<br>";
$StringFromArray = implode(" ", $ArrayFromString);
echo $StringFromArray . "<br>";

// 4)Using array function check whether"madam" is palindrome or not

$palin="madam";


?>
