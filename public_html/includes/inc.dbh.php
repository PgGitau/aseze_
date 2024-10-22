<?php

$dbServername = "localhost";
$dbUsername = "asezeafr";
$dbPassword = "Aseze.flipper#2024";
$dbName = "asezeafr_web"; 
$port = "3306";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName, $port);

$deed  = $dbPassword;

/*// TURN OFF STRICT MYSQL MODE
$strict = "SET sql_mode = '' ";
mysqli_query($conn, $strict);*/

?>