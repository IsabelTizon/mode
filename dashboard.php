<?php
//session is started
session_start();

// Including error reporting, config, database conexion and active session files.
include("includes/active_session.php");
include("includes/dbconx.php");
include("includes/error-reporting.php");
include("includes/config.php");

?>

<!doctype html>

<html lang="en">

<?php
//ini_set() method
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<!-- Head data -->

<head>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/view-records.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- Including database conexion and head content files -->
    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>
</head>

<body>
    <header>
        <?php
        //condition with isset() to check if the session is start
        if (isset($_SESSION["user_id"])) {
            //If the session is start include navbar logged file
            include("modules/navbar-logged.php");
        } else {
            // if not, include navbar
            include("modules/navbar.php");
        }
        ?>
    </header>

    <!-- main content data  -->
    <main>

        <!-- Records -->
        <div class="records-home">
            <!-- Title -->
            <h1 class="title-dashboard">My Items</h1>
            <!--  -->
            <?php

            include("includes/dbconx.php");
            include("includes/error-reporting.php");
            include("includes/active-session.php");

            //Selecting all the products that the user want to sell
            if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE user_ID = {$_SESSION["user_id"]}")) {
                $stmt->execute(); // execute sql statement
                $result = $stmt->get_result(); //returns the results from sql statement


                //DISPLAYING DATABASE WITH BOOTSTRAP CARDS
                //If there is data in that column show it in cards
                if ($result->num_rows > 0) {
                    echo '<div class="section-card-items-home">';
                    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows

                        //Card
                        echo '<div class="card-item">';
                        echo '<a href="item-page.php?ID=' . $row['order_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '></a>';
                        echo '<div class="card-body body-btn-dashboard">';

                        //Picking the product to be edit it
                        echo '<form class="favForm" action="edit.php?=user' . $user["user_ID"] . $row["order_ID"] . '" method="get" id="formFav" enctype="multipart/form-data" novalidate>';

                        echo '<input type="hidden" id="user" name="user" value=' . $user["user_ID"] . '>';  // hidden user 

                        echo '<input type="hidden" id="order" name="order" value=' . $row["order_ID"] . '>';  // hidden order 
                        // I will need both values to can grab the product and delete or edi it
                        //Edit btn
                        echo '<a href="edit.php?order=' . $row['order_ID'] . '?user=' . $row['user_ID'] . ' "><button style="width:100%;" class="btn btn-dashboard btn-dashboard-edit">Edit</button></a>';
                        echo '</form>';


                        //Picking the product to be delete it
                        echo '<form class="favForm" action="delete.php?=user' . $user["user_ID"] . $row["order_ID"] . '" method="get" id="formFav" enctype="multipart/form-data" novalidate>';

                        echo '<input type="hidden" id="user" name="user" value=' . $user["user_ID"] . '>';  // hidden user 

                        echo '<input type="hidden" id="order" name="order" value=' . $row["order_ID"] . '>';  // hidden order 
                        // I will need both values to can grab the product and delete or edi it

                        //Delete btn
                        echo '<a href="confirmation-delete.php?order=' . $row['order_ID'] . '?user=' . $row['user_ID'] . ' "><button style="width:100%;" class="btn btn-dashboard btn-dashboard-delete">Delete</button></a>';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                    }

                    echo '</div>';
                    $stmt->close(); // close sql statement
                    $conn->close(); // close dbase connection
                } else {
                    //If there is not data to show display a message
                    echo '<p style="font-size:20px;width:50%;margin:12% auto;text-align:center;" class="card-text">You don\'t have any item yet</p>';
                }
            }

            ?>
        </div>


    </main>

    <!-- Footer data  -->
    <footer>
        <!-- Including footer file -->
        <?php include("modules/footer.php"); ?>
    </footer>

</body>

</html>