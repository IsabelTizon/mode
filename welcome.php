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
    <link rel="stylesheet" href="css/welcome.css">

    <style>
        button.btn.btn-login {
            background-color: #712296 !important;
            color: #ffffff;
            font-size: 14px;
        }
    </style>
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
        <?php include("modules/footer.php"); ?>
    </footer>



    <script>
        function login() {
            location.href = "login.php";
        }
    </script>
</body>

</html>