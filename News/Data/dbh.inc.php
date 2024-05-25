<?php

$servername = "localhost";
$dbname = "globe";
$username = "root";
$password = "0000";
$potr = 8134;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $potr);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}