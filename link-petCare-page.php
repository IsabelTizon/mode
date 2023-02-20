<?php
//session is started
session_start();

// Including error reporting, config and active session files
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

    <style>
        /* card title */
        .card-title {
            margin-top: 13px;
        }
    </style>
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
            //Selecting pet care produts in the itemsMode table
            if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE category='petCare'")) {
                $stmt->execute(); // execute sql statement
                $result = $stmt->get_result();

                //If there is data in that column show it in cards
                if ($result->num_rows > 0) {
                    echo '<div class="section-card-items-home">';
                    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows

                        if (isset($_SESSION["user_id"])) {
                            //Card
                            echo '<div class="card-item">';
                            echo '<a href="item-page.php?ID=' . $row['order_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '></a>';
                            echo '<div class="card-body"></a>';
                            echo '<div class="display-title-favorite">';
                            echo '<h6 class="card-title">£' . $row['price'] . '</h6>';

                            //favourite
                            echo '<form class="favForm" action="process-fav.php?=user' . $user["user_ID"] . $row["order_ID"] . '" method="get" id="formFav" enctype="multipart/form-data" novalidate>';

                            echo '<input type="hidden" id="user" name="user" value=' . $user["user_ID"] . '>';  // hidden user 

                            echo '<input type="hidden" id="order" name="order" value=' . $row["order_ID"] . '>';  // hidden order 
                            // I will need both values to can grab the user favourite products 

                            echo '<button type="submit" value="submit" class="btn btn-add-favorite"><span class="material-symbols-outlined">favorite</span></button>';
                            echo '</form>';

                            //Card body 
                            echo '</div>';
                            echo '<p class="card-text">' . $row['brand'] . '</p>';
                            echo '<p class="card-text">' . $row['descript'] . '</p>';
                            echo '<p class="card-text">size ' . $row['size'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            //Card
                            echo '<div class="card-item">';
                            echo '<a href="item-page.php?ID=' . $row['order_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '></a>';
                            echo '<div class="card-body"></a>';
                            echo '<div class="display-title-favorite">';
                            echo '<h6 class="card-title">£' . $row['price'] . '</h6>';

                            //favourite
                            echo '<button type="submit" value="submit" class="btn btn-add-favorite"><span class="material-symbols-outlined">favorite</span></button>';
                            echo '</form>';

                            //Card body 
                            echo '</div>';
                            echo '<p class="card-text">' . $row['brand'] . '</p>';
                            echo '<p class="card-text">' . $row['descript'] . '</p>';
                            echo '<p class="card-text">size ' . $row['size'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }

                    echo '</div>';
                    $stmt->close(); // close sql statement
                    $conn->close(); // close dbase connection

                } else {
                    //If there is not data to show display a message
                    echo '<p style="font-size:20px;width:50%;margin:12% auto;text-align:center;" class="card-text">No items on this section</p>';
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