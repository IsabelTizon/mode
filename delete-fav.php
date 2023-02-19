<?php

session_start();

include("includes/active_session.php");
include("includes/dbconx.php"); //Database conexion
include("includes/error-reporting.php");


if ($stmt = $conn->prepare("SELECT * FROM favorites WHERE user_ID = {$_SESSION["user_id"]}")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result(); //returns the results from sql statement


    //DISPLAYING DATABASE WITH BOOTSTRAP CARDS

    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows
        echo '<p>your order is: ' . $row['order_ID'] . '</p>';
        $order = $row['order_ID'];


        $sql = "DELETE FROM favorites WHERE order_ID =  '$order'";

        $stmt = $conn->stmt_init(); //Initialize a statement and return an object to use with stmt_prepare():

        if (!$stmt->prepare($sql)) {
            die("SQL error: " . $conn->error);
        }

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location: favourites.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    }
}
