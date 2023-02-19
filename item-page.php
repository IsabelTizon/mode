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
    <link rel="stylesheet" href="css/details-record.css">

    <!-- Including database conexion and head content files -->
    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>

</head>

<body>
    <header>
        <?php
        //condition with isset() to check if the session is start
        if (isset($_SESSION["user_id"])) {
            //If the saession is start include navbar logged file
            include("modules/navbar-logged.php");
        } else {
            // if not, include navbar
            include("modules/navbar.php");
        }
        ?>
    </header>

    <!-- main content data  -->
    <main>
        <!-- Record -->
        <div class="record">
            <?php

            $ID =  $_GET['ID'];
            //Selecting data from the itemsMode tablewhen the order ID  is equal to the item selected 
            if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE order_ID='$ID'")) {
                $stmt->execute(); // execute sql statement
                $result = $stmt->get_result(); //getting the result


                echo '<div class="det-record">';
                while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows

                    //Item Cards 
                    echo '<img class="img-record" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '>';

                    echo '<div class="container-det">';
                    echo '<h5 class="det det-price">£' . $row['price'] . '</h5>';
                    echo '<p class="det det-brand">BRAND: ' . $row['brand'] . '</p>';
                    echo '<p class="det det-descript">DESCRIPTION: ' . $row['descript'] . '</p>';
                    echo '<p class="det det-size">SIZE: ' . $row['size'] . '</p>';
                    echo '<p class="det det-condition1">CONDITION: ' . $row['condition1'] . '</p>';



                    echo '<div class="display-btnBuy-favorite">';
                    echo '<span class="material-symbols-outlined favorite-icon">favorite</span>';
                    echo '<button type="button" class="btn btn-purple">Buy now</button>';
                    echo '</div>';
                    echo '</div>';
                }

                echo '</div>';
                $stmt->close(); // close sql statement
                $conn->close(); // close dbase connection

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