<?php
//session is started
session_start();

// Including error reporting, database conexion and active session files.
include("includes/active_session.php");
include("includes/dbconx.php");
include("includes/error-reporting.php");


$order = $_GET['order'];

echo '<p>order: ' . $order . '</p>';

// If the user id logged all the data from itemsMode table is gonna be selected
if ($stmt = $conn->prepare("SELECT * FROM favorites WHERE order_ID ='$order'")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result(); //returns the results from sql statement

    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows
        // echo '<p>your order is: ' . $row['order_ID'] . '</p>';
        // $order = $row['order_ID'];

        // Deleting from the database itemsMode table the product selected
        $sql = "DELETE FROM favorites WHERE order_ID = '$order'";
        // $sql = "DELETE FROM itemsMode, favorites WHERE order_ID =  '$order'";

        $stmt = $conn->stmt_init(); //Initialize a statement and return an object to use with stmt_prepare():

        if (!$stmt->prepare($sql)) {
            die("SQL error favourites: " . $conn->error);
        }

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            // If the product is deleted go to dashboard page
            header("Location: dashboard.php");
        } else {
            echo "Error updating record favourites: " . $conn->error;
        }
    }
}

if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE order_ID = '$order'")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result(); //returns the results from sql statement

    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows
        // echo '<p>your order is: ' . $row['order_ID'] . '</p>';
        // $order = $row['order_ID'];

        // Deleting from the database itemsMode table the product selected
        $sql = "DELETE FROM itemsMode WHERE order_ID = '$order'";
        // $sql = "DELETE FROM itemsMode, itemsMode WHERE order_ID =  '$order'";

        $stmt = $conn->stmt_init(); //Initialize a statement and return an object to use with stmt_prepare():

        if (!$stmt->prepare($sql)) {
            die("SQL error products to sell: " . $conn->error);
        }

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            // If the product is deleted go to dashboard page
            header("Location: dashboard.php");
        } else {
            echo "Error updating record dashboard: " . $conn->error;
        }

        $conn->close(); // close dbase connection
    }
}
