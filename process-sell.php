<?php

// Including active session, database conexion and error reporting files.
include("includes/active_session.php");
include("includes/dbconx.php"); //Database conexion
include("includes/error-reporting.php");

//inserting input in the database

$sql = "INSERT INTO itemsMode (user_ID, itemPic, title, descript, category, brand, condition1, size, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $conn->error);
}

$stmt->bind_param("issssssss", $_GET["user"], $_GET["file"], $_GET["title"], $_GET["descript"], $_GET["category"], $_GET["brand"], $_GET["condition1"], $_GET["size"], $_GET["price"]);


if ($stmt->execute()) {
    header("Location: index.php");
    exit;
} else {
    if ($conn->error) {
        die("email is already taken");
    } else {
        die("SQL error: " . $conn->error);
    }
}
