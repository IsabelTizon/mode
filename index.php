<?php
session_start();

print_r($_SESSION); //print out the sesion array ej: Array ( [user_id] => 1 )



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
    <!-- Hero -->
    <div class="video-wrapper">
      <video class="video-hero" autoplay muted loop>
        <source src="media/hero.mp4" type="video/mp4" />
      </video>
      <div class="container-sell">
        <h3 class="text-hero">Give it a second life!</h3>
        <button class="btn btn-sell-hero" onclick="location.href='welcome.php'">
          Sell now
        </button>
        <a class="text-link-hero" href="#">Learn how it works</a>
      </div>
    </div>

    <!-- Records -->
    <div class="records-home">
      <?php include('includes/view-records.php'); ?>
    </div>


  </main>

  <!-- Footer data  -->
  <footer>
    <?php include("modules/footer.php"); ?>
  </footer>

</body>

</html>