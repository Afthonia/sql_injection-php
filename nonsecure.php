<?php

include 'db.php'; //with connection to the database

// take the user name and password from the request
$username = $_POST['username'];
$password = $_POST['password'];

// finding the user with the given username and password from the already existing user records
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// with the result that is taken from evaluating the query
$result = mysqli_query($db, $query) or die(mysqli_error($db));
$num = mysqli_fetch_array($result); //turning it into an array

// state if there is a user record 
if ($num > 0) {
    /*
    if the client sends "' OR 1=1 LIMIT 1 -- " as password or username, 
    the login will be successfull which is a flaw in security
    */
    echo nl2br("\r\nLogin Success\n\n");
    echo ("user id:" . $num[0]);
    
} else { // or not
    echo nl2br("\nWrong info\n");
}
?>