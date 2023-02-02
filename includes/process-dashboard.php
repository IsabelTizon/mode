<?php

include("includes/dbconx.php");
include("includes/error-reporting.php");
include("includes/active-session.php");


if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE user_ID = {$_SESSION["user_id"]}")) {
    $stmt->execute(); // execute sql statement
    $result = $stmt->get_result(); //returns the results from sql statement


    //DISPLAYING DATABASE WITH BOOTSTRAP CARDS
    echo '<div class="section-card-items-home">';
    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows



        echo '<div class="card-item">';
        echo '<a href="item-page.php?ID=' . $row['order_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '></a>';
        echo '<div class="card-body body-btn-dashboard">';
        echo '<a href="index.php"><button class="btn btn-dashboard btn-dashboard-edit ">Edit</button></a>';
        echo '<a href="index.php"><button class="btn btn-dashboard btn-dashboard-delete">Delete</button></a>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    $stmt->close(); // close sql statement
    $conn->close(); // close dbase connection

}
