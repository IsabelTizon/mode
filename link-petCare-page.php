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
    <link rel="stylesheet" href="css/view-records.css">

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

            <?php

            if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE category='petCare'")) {
                $stmt->execute(); // execute sql statement
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    echo '<div class="section-card-items-home">';
                    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows



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
                    echo '<p style="font-size:20px;width:50%;margin:12% auto;text-align:center;" class="card-text">No items on this section</p>';
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