<?php
// activating the session
session_start();

// Including error reporting, config and active session files.
include("includes/active_session.php");
include("includes/dbconx.php"); //Database conexion
include("includes/error-reporting.php");


if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE user_ID = {$_SESSION["user_id"]}")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result(); //returns the results from sql statement


    //DISPLAYING DATABASE WITH BOOTSTRAP CARDS

    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows
        echo '<p>your order is: ' . $row['order_ID'] . '</p>';
        $order = $row['order_ID'];

        $file = $_GET["file"];
        $title = $_GET["title"];
        $descript = $_GET["descript"];
        $category = $_GET["category"];
        $brand = $_GET["brand"];
        $condition1 = $_GET["condition1"];
        $size = $_GET["size"];
        $price = $_GET["price"];


        //Updating a particular product
        $sql = "UPDATE itemsMode SET itemPic = '$file', title = '$title', descript = '$descript', category = '$category', brand = '$brand', condition1 = '$condition1', size = '$size', price ='$price' WHERE order_ID =  '$order'";

        $stmt = $conn->stmt_init(); //Initialize a statement and return an object to use with stmt_prepare():

        if (!$stmt->prepare($sql)) {
            die("SQL error: " . $conn->error);
        }

        //If the record is successfully update go to dashboard
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location: dashboard.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        //closing the conexion with the database 
        $conn->close();
    }
}
