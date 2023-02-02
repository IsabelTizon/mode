<?php
session_start();


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
    <link rel="stylesheet" href="css/details-record.css">

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
        <!-- Record -->
        <div class="record">
            <?php

            $ID =  $_GET['ID'];

            if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE order_ID='$ID'")) {
                $stmt->execute(); // execute sql statement
                $result = $stmt->get_result();


                echo '<div class="det-record">';
                while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows


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
        <?php include("modules/footer.php"); ?>
    </footer>

</body>

</html>