<?php

$error = [];
//checking form is submitted/register or not.
if (isset($_GET['register'])) {
    // user le deko information variable ma rakheko
    $name = $_GET['name'];
    $address = $_GET['address'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];

    // checking the length if it is empty or not and triming it.
    if (strlen(trim($name)) == 0) {
        // setting error for name
        $error['name'] = "Name is required.";
    }
    if (strlen(trim($address)) == 0) {
        // setting error for address
        $error['address'] = "Address is required.";
    }
    if (strlen(trim($phone)) == 0) {
        // setting error for phone
        $error['phone'] = "Phone is required.";
    }
    if (strlen(trim($email)) == 0) {
        // setting error for email
        $error['email'] = "Email is required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
            font-size: italic;
        }
    </style>
</head>

<body>
    <?php
    // checking if there is any error set and printing the error array
    if(sizeof($error)>0){
        echo "<p class='error'>";
        foreach($error as $e){
            echo "$e <br>";
        }
        echo"</p>";
    }
    ?>
    <form action="">
        Name: <input type="text" name="name" id="name">
        <?php
        // if the error of name is set show the error in the span tag.
        if (isset($error['name'])) {
            echo "<span class='error'>" . $error['name'] . "</span>";
        }
        ?>
        <br>
        Address: <input type="text" name="address" id="address">  <br>
        Phone: <input type="number" name="phone" id="phone"> <br>
        Email: <input type="text" name="email" id="email"> <br>
        <input type="submit" name="register" value="Register"> <br>
    </form>
</body>

</html>