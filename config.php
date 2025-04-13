<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "user_authentication";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
date_default_timezone_set('UTC');
?> 