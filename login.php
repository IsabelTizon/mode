<?php include("includes/active_session.php");
include("includes/error-reporting.php");
include("includes/config.php"); ?>

<!-- if ($_SERVER["REQUEST_METHOD"] === "POST") {


} -->
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
    <link rel="stylesheet" href="css/welcome.css">

    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>
</head>

<body>
    <header>
        <?php include("modules/navbar-logged.php"); ?>
    </header>

    <!-- main content data  -->
    <main>
        <!-- Hero -->
        <div class="video-wrapper">
            <video class="video-hero" autoplay muted loop>
                <source src="media/hero.mp4" type="video/mp4" />
            </video>
            <div class="container-sell">
                <h3 class="text-welcome">Login</h3>


                <form action="signed.php" method="post">

                    <label for="email">Email</label><br>
                    <input type="password" name="email" id="email"><br>

                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password"><br>

                    <button class="btn btn-info">Continue</button>
                </form>
            </div>
        </div>

    </main>

    <!-- Footer data  -->
    <footer>
        <?php include("modules/footer.php"); ?>
    </footer>
</body>

</html>