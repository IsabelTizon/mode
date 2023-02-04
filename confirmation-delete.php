<?php
session_start();

// print_r($_SESSION); //print out the sesion array ej: Array ( [user_id] => 1 )



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
    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>
</head>

<body>
    <header>
        <?php include("modules/navbar-logged.php"); ?>
    </header>

    <!-- main content data  -->
    <main>
        <div class="confirmation-delete">
            <p class="title-confirmation-delete">Are you sure you want to delete this item?</p>
            <div class="btns-confimation-delete">
                <a href="delete.php"><button class="btn btn-red">Yes</button></a>

                <a href="dashboard.php"><button class="btn btn-dashboard btn-purple">No</button></a>
            </div>


        </div>

    </main>

    <!-- Footer data  -->
    <footer>
        <?php include("modules/footer.php"); ?>
    </footer>

</body>

</html>