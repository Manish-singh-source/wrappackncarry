<?php
$servername = "localhost";
$username = "u802703949_wrappackncarry";
$password = "Technofra@123";
$dbname = "u802703949_wrappackncarry";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
