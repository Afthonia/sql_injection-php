<?php
$servername = "localhost";
$username = "ayse";
$password = "@Y;eS3n8";
$database = "user";

$db = mysqli_connect($servername, $username, $password, $database);

if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

echo "successfully connected to db\n"; 
?>