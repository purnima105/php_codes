<?php

session_start(); //start suru mai garne ani session globals use garna milxa

if(isset($_SESSION["user"])){   //session check user xa ki xaina 
    header("Location: login.php"); // if xa redirect to login
}
?>