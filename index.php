<?php
//A session is started with the session_start() function.
session_start();

// print_r($_SESSION); //print out the sesion array ej: Array ( [user_id] => 1 )

// Including error reporting and config files
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

  <!-- Including database conexion and head content files -->
  <?php include('includes/dbconx.php');
  include("modules/head-content.php"); ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
    <!-- Hero -->
    <?php
    //condition with isset() to check if the session is start
    if (isset($_SESSION["user_id"])) {
      //If the saession is start include hero logged file
      include("modules/hero-logged.php");
    } else {
      // if not, include hero
      include("modules/hero.php");
    }
    ?>

    <!-- Records -->
    <div class="records-home">
      <?php
      //condition with isset() to check if the session is start
      if (isset($_SESSION["user_id"])) {
        //If the saession is start include index logged file
        include("modules/index-logged.php");
      } else {
        // if not, include index
        include("modules/index.php");
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

<script>
  //If the user press any of the buttons "sell now" or  the favourite icon and if not logged will lead the user to the welcome page
  function btnNotLogged() {
    location.href = "welcome.php";
  }
</script>

</html>