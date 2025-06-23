<?php
$servername = "loneleads.cdiyu24o21ug.eu-west-2.rds.amazonaws.com";
$username = "admin";
$password = "sachinkumar";
$dbname = "loneleads";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>