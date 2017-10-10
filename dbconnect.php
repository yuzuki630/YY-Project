<?php
$host = "127.0.0.1";
$user = "yuzuki630";
$pass = "";
$db = "employeedb";

$conn = mysqli_connect ($host, $user, $pass, $db) or
die ("Database connection failed: " . mysqli_connect_error());
?>