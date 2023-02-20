<?php
// Including error reporting, config and active session files.
include("includes/error-reporting.php");
include("includes/config.php");
include("includes/active-session.php")
?>


<!DOCTYPE html>
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

    <!-- Internal styles -->
    <!-- External didn't works -->
    <style>
        .container-sell {
            padding: 20px;
            height: 43vh;
        }

        .input-login {
            width: 100%;
            margin-bottom: 20px;
        }

        .btn-login {
            width: 100%;
            margin-bottom: 20px;
        }
    </style>

    <!-- Including database conexion and head content files -->
    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>
</head>

<body>
    <header>
        <!-- Including navbar (no logged) -->
        <?php include("modules/navbar.php"); ?>
    </header>

    <!-- main content data  -->
    <main>
        <!-- Hero -->
        <!-- Video -->
        <div class="video-wrapper">
            <video class="video-hero" autoplay muted loop>
                <source src="media/hero.mp4" type="video/mp4" />
            </video>
            <!-- Text -->
            <div class="container-sell">
                <h3 class="text-welcome">Login</h3>
                <!-- Display a red message if the login is invalid -->
                <?php if ($is_invalid) : ?>
                    <p style="font-size:13px;color:red">Invalid login</p>
                <?php endif; ?>

                <!-- Form: email and password to log in -->
                <form method="post">
                    <!-- email -->
                    <label for="email">Email</label><br>
                    <input class="input-login" type="email" name="email" id="email" value="<?= htmlspecialchars($_POST['email'] ?? "") ?>"><br>

                    <!-- password -->
                    <label for="password">Password</label><br>
                    <input class="input-login" type="password" name="password" id="password"><br>

                    <!-- Button to submit -->
                    <button class="btn btn-info btn-login">Continue</button>
                </form>
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