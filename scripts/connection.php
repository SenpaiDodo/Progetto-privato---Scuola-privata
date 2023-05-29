<?php

$server = "localhost";
$serverUser = "root";
$serverPassword = "";
$db = "Test";

$conn = new mysqli($server,$serverUser,$serverPassword,$db);

// Check connection
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

?>