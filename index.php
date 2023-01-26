<?php include("includes/active_session.php");
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
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/view-records.css">

  <?php include('includes/dbconx.php');
  include("modules/head-content.php"); ?>
</head>

<body>
  <header>
    <?php include("modules/navbar.php"); ?>
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
        <button class="btn btn-sell-hero" onclick="location.href='item-page.php'">
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