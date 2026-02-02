<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "login_web_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);

}
?>