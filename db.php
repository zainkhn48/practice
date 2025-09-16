<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="college_db";

$conn = mysqli_connect(hostname : $host,username : $user, password : $pass, database : $db);

if ($conn->connect_error) {
die("connection failed: ". $conn->connect_error);
}
?>