<?php
session_start();

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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/view-records.css">
    <link rel="stylesheet" href="css/dashboard.css">



    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>
</head>

<body>
    <header>
        <?php
        if (isset($_SESSION["user_id"])) {
            include("modules/navbar-logged.php");
        } else {
            include("modules/navbar.php");
        }
        ?>
    </header>

    <!-- main content data  -->
    <main>

        <!-- Records -->
        <div class="records-home">
            <h1 class="title-dashboard">My Items</h1>
            <!--  -->
            <?php

            include("includes/dbconx.php");
            include("includes/error-reporting.php");
            include("includes/active-session.php");


            if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE user_ID = {$_SESSION["user_id"]}")) {
                $stmt->execute(); // execute sql statement
                $result = $stmt->get_result(); //returns the results from sql statement


                //DISPLAYING DATABASE WITH BOOTSTRAP CARDS
                if ($result->num_rows > 0) {
                    echo '<div class="section-card-items-home">';
                    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows



                        echo '<div class="card-item">';
                        echo '<a href="item-page.php?ID=' . $row['order_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '></a>';
                        echo '<div class="card-body body-btn-dashboard">';
                        //Edit btn
                        echo '<a href="edit.php?order=' . $row['order_ID'] . '?user=' . $row['user_ID'] . ' "><button class="btn btn-dashboard btn-dashboard-edit">Edit</button></a>';

                        //Delete btn
                        echo '<a href="confirmation-delete.php?order=' . $row['order_ID'] . '?user=' . $row['user_ID'] . ' "><button class="btn btn-dashboard btn-dashboard-delete">Delete</button></a>';
                        echo '</div>';
                        echo '</div>';
                    }

                    echo '</div>';
                    $stmt->close(); // close sql statement
                    $conn->close(); // close dbase connection
                } else {
                    echo '<p style="font-size:20px;width:50%;margin:12% auto;text-align:center;" class="card-text">You don\'t have any item yet</p>';
                }
            }

            ?>
        </div>


    </main>

    <!-- Footer data  -->
    <footer>
        <?php include("modules/footer.php"); ?>
    </footer>

</body>

</html>