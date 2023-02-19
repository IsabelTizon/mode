<?php
// Including database conexion and error reporting files.
include("includes/dbconx.php");
include("includes/error-reporting.php");

//
$sql = sprintf("SELECT * FROM users WHERE email = '%s'", $conn->real_escape_string($_GET["email"]));

// Conecting withe the database to check the emails 
$result = $conn->query($sql);

// If any row in our database have the same email then is available to using to sign up 
$is_available = $result->num_rows === 0;

header("Content-Type: application/json");
echo json_encode(["available" => $is_available]);
