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
            <?php include('includes/details-record.php'); ?>
        </div>


    </main>

    <!-- Footer data  -->
    <footer>
        <?php include("modules/footer.php"); ?>
    </footer>

</body>

</html>