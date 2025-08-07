<?php

// check the form is submitted or not 
if (isset($_GET['search_btn'])) {
    echo "Form submitted";
    // trimming and storing the user input in the varaiable 
    $search = trim($_GET['search']);
    // checking the user input is empty or not and also the length.
    if (strlen($search) == 0) {
        $error = "Field can't be empty.";
    } else if (strlen($search <= 5)) {
        $error = "Needs 5 or more character";
    }
}
// printing the user search in the browser
// checking if there is any $error
if(!isset($error)){
    if(isset($search)){
        echo "You are looking for $search";
    }
}

?>

<form action="">
    <label for="search">Search</label>
    <input type="text" name="search" id="search" <?php
    // after search input field ma tehi dekhauna lagi value set gareko
    if (isset($search)) {
        echo "value='$search'";
    }
    ?>>

    <span style="color:red;">
        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
    </span> <br>
    <input type="submit" name="serach_btn" value="Search">
</form>