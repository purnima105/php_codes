<?php

session_start(); //start suru mai garne ani session globals use garna milxa

if (!isset($_SESSION['name']) && ($_SESSION['password'])) { //session check user xa ki xaina 
    header("Location: /web2/project_format/");  // if xaina redirect to index page
}

echo "Hello ".$_SESSION['name']. "<br>welcome to dashboard <br><br>";


// access get/post form ko kura 

if(isset($_GET['a'])){
    echo "User ". $_SESSION['name']." typed ". $_GET['a']."<br>";
}

?>

<form >
    <input type="text" name="a" id="a" placeholder="Type anything.....">
    <input type="submit" value="Submit ">
</form>