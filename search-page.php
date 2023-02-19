<?php
//session is started
session_start();

// Including error reporting, config and active session files.
include("includes/active_session.php");
include("includes/error-reporting.php");
include("includes/config.php"); ?>

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
    <link rel="stylesheet" href="css/view-records.css">

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
            <?php
            // Getting the search input 
            $itemQuery = $_GET['itemQuery']; //connecting with email.php

            //Selecting the items that match with the search input ($itemQuery)
            if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE title LIKE '%$itemQuery%'  OR descript LIKE '%$itemQuery%'  OR category LIKE '%$itemQuery%' OR brand LIKE '%$itemQuery%' OR size LIKE '%$itemQuery%' OR condition1 LIKE '%$itemQuery%' OR price LIKE '%$itemQuery%'")) {
                $stmt->execute(); // execute sql statement
                $result = $stmt->get_result();

                //If there is data in that column show it in cards
                if ($result->num_rows > 0) {

                    //DISPLAYING DATABASE WITH BOOTSTRAP CARDS
                    echo '<div class="section-card-items-home">';
                    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows

                        //Cards
                        echo '<div class="card-item">';
                        echo '<a href="item-page.php?ID=' . $row['order_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '></a>';
                        echo '<div class="card-body"></a>';
                        echo '<div class="display-title-favorite">';
                        echo '<h6 class="card-title">£' . $row['price'] . '</h6>';
                        echo '<span class="material-symbols-outlined">favorite</span>';
                        echo '</div>';
                        echo '<p class="card-text">' . $row['brand'] . '</p>';
                        echo '<p class="card-text">' . $row['descript'] . '</p>';
                        echo '<p class="card-text">size ' . $row['size'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }

                    echo '</div>';
                    $stmt->close(); // close sql statement
                    $conn->close(); // close dbase connection

                } else {
                    //If there is not data to show display a message
                    echo '<p style="font-size:20px;width:50%;margin:12% auto;text-align:center;" class="card-text">Any found with that details</p>';
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