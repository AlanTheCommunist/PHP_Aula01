<?php
$servername = "localhost";
$username = "Yasuo";
$password = "admin";
$dbname = "classeslol";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}