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

  <?php include('includes/dbconx.php');
  include("modules/head-content.php"); ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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
    <?php
    if (isset($_SESSION["user_id"])) {
      include("modules/hero-logged.php");
    } else {
      include("modules/hero.php");
    }
    ?>

    <!-- Records -->
    <div class="records-home">
      <?php
      if (isset($_SESSION["user_id"])) {
        include("modules/index-logged.php");
      } else {
        include("modules/index.php");
      }
      ?>
    </div>
  </main>

  <!-- Footer data  -->
  <footer>
    <?php include("modules/footer.php"); ?>
  </footer>


</body>

<script>
  function btnNotLogged() {
    location.href = "welcome.php";
  }
</script>

</html>