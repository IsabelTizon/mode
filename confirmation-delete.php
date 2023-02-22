<?php
//session is started
session_start();

// print_r($_SESSION); //print out the sesion array ej: Array ( [user_id] => 1 )

// Including error reporting and config files.
include("includes/error-reporting.php");
include("includes/dbconx.php");
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

    <!-- Internal CSS -->
    <!-- I resorted to the internal css because the external did not change the styles  -->
    <style>
        .confirmation-delete {
            width: 40%;
            margin: 10% auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        p.title-confirmation-delete {
            font-size: 20px;
            margin-bottom: 40px;
        }

        .btns-confimation-delete {
            display: flex;
            flex-direction: row;
            width: 80%;
        }

        .btn.btn-red {
            border-color: #fad8d8;
            background-color: #fad8d8;
            color: #000000;
            font-size: 14px;
            width: 80%;
            margin: auto;
        }

        .btn.btn-purple {
            border-color: #712296;
            background-color: #ffffff;
            color: #000000;
            font-size: 14px;
            width: 80%;
            margin: auto;

        }
    </style>

    <!-- Including database conexion and head content files -->
    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>
</head>

<body>
    <header>
        <!-- Including navbar logged -->
        <?php include("modules/navbar-logged.php"); ?>
    </header>

    <!-- main content data  -->
    <main>
        <!-- Deleting confirmation -->
        <div class="confirmation-delete">
            <p class="title-confirmation-delete">Are you sure you want to delete this item?</p>
            <div class="btns-confimation-delete">

                <?php
                // $user = $_GET["user"];
                // $order = $_GET['order'];
                // echo $user;
                // echo $order;
                ?>


                <?php

                include("includes/dbconx.php");
                include("includes/error-reporting.php");
                include("includes/active-session.php");


                $user = $_GET['user'];
                $order = $_GET['order'];


                if ($stmt = $conn->prepare("SELECT * FROM itemsMode WHERE user_ID = $user && order_ID = $order")) {
                    $stmt->execute(); // execute sql statement
                    $result = $stmt->get_result(); //returns the results from sql statement

                    while ($row = $result->fetch_assoc()) { //fetches one row of data from the results set. Continues until there are no more rows



                        //Card
                        echo '<div class="card-item">';
                        echo '<a href="item-page.php?ID=' . $row['order_ID'] . '"><img class="card-img-top" alt="item picture" src=' . '"media/items/photos/' . $row['itemPic'] . '"' . '></a>';
                        echo '<div class="card-body body-btn-dashboard">';


                        // // //Picking the product to be DELETE it
                        // echo '<form class="favForm" action="delete.php?=user' . $user["user_ID"] . $row["order_ID"] . '" method="get" id="formFav" enctype="multipart/form-data" novalidate>';

                        // echo '<input type="hidden" id="user" name="user" value=' . $user["user_ID"] . '>';  // hidden user 

                        // echo '<input type="hidden" id="order" name="order" value=' . $row["order_ID"] . '>';  // hidden order 
                        echo '<a href="dashboard.php"><button class="btn btn-purple">No</button></a>';
                        echo '<a href="delete.php?order=' . $row['order_ID'] . ' "><button class="btn btn-red">Yes</button></a>';


                        // echo '</form>';
                        // I will need both values to can grab the product and delete or edi it

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

                ?>


            </div>
        </div>



    </main>

    <!-- Footer data  -->
    <footer>
        <!-- Including footer file -->
        <?php include("modules/footer.php"); ?>
    </footer>

</body>

</html>