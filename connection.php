<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "hallbooking";

$link = new mysqli($servername, $username, $password, $database);

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>
