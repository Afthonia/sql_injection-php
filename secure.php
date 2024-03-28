<?php

include 'db.php'; //with connection to the database

// take the user name and password from 
$username = $_POST['username'];
$password = $_POST['password'];

// finding the user with the given username and password from the already existing user records
$query = "SELECT * FROM users WHERE username = '" . mysqli_escape_string($db, $username) . "' AND password = '" . mysqli_escape_string($db, $password) . "'";
// mysqli_escape_string() method provides escaping using special characters in sql queries

// with the result that is taken from evaluating the query
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$num = mysqli_fetch_array($result); //turning it into an array

// state if there is a user record 
if ($num > 0) {
    echo nl2br("\r\nLogin Success\n\n");
    echo ("user id:" . $num[0]);
    
} else { // or not
    echo nl2br("\nWrong info\n");
}
?>