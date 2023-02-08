<?php

// session_start();

include("includes/active_session.php");
include("includes/dbconx.php"); //Database conexion
include("includes/error-reporting.php");


$user = $_GET['user'];
$order = $_GET['order'];

// print_r($user);
// echo '</br>';
// print_r($order);

$sql = "INSERT INTO favorites (user_ID, order_ID) VALUES ($user, $order)";
echo $sql;
$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    die("SQL error: " . $conn->error);
}
