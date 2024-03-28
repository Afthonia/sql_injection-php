<?php
/*
mysql server is used in this project 
so neccessary configurations have to be made 
and the section below (hostname, user, password) 
must be filled with the appropriate values
*/
$servername = "<hostname>";
$username = "<user>";
$password = "<password>";
$database = "user";

$db = mysqli_connect($servername, $username, $password, $database);

if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

echo "successfully connected to db\n"; 
?>