<?php
// Including active session, error reporting and config files
// include("includes/active_session.php");
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
    <link rel="stylesheet" href="css/welcome.css">

    <!-- Internal CSS -->
    <!-- I had to use the internal css because the external did not works -->
    <style>
        button.btn.btn-login {
            background-color: #712296 !important;
            color: #ffffff;
            font-size: 14px;
        }
    </style>

    </style>

    <!-- Including database and head content files -->
    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>
</head>

<body>
    <header>
        <!-- Including navbar (no logged) file -->
        <?php include("modules/navbar.php"); ?>
    </header>

    <!-- main content data  -->
    <main>
        <!-- Hero -->
        <div class="video-wrapper">
            <!-- Video -->
            <video class="video-hero" autoplay muted loop>
                <source src="media/hero.mp4" type="video/mp4" />
            </video>
            <!-- Container text and buttons -->
            <div class="container-sell">
                <h3 class="text-welcome">Welcome!</h3>
                <button class="btn btn-login" onclick="login()">
                    Login
                </button>
                <p>Don´t you have an account?><a class="link-signUp" href="sign-up.php">Sign up</a></p>
            </div>
        </div>

    </main>

    <!-- Footer data  -->
    <footer>
        <!-- Including footer file -->
        <?php include("modules/footer.php"); ?>
    </footer>



    <script>
        // When the button login is pressed the login() function It will take you to the login page.
        function login() {
            location.href = "login.php";
        }
    </script>
</body>

</html>