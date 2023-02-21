<?php

// Including active session, database conexion and error reporting
include("includes/active_session.php");
include("includes/dbconx.php");
include("includes/error-reporting.php");

//Getting the variables user and order
$user = $_GET['user'];
$order = $_GET['order'];

// print_r($user);
// echo '</br>';
// print_r($order);

$sql = "INSERT INTO favorites (user_ID, order_ID) SELECT * FROM (SELECT $user, $order) AS tmp WHERE NOT EXISTS (SELECT * FROM favorites WHERE user_ID = $user && order_ID = $order)";
echo $sql;
$stmt = $conn->stmt_init();


if (!$stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

//If they were introduced go to home page
if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    die("SQL error: " . $conn->error);
}
