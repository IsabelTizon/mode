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

    <?php include('includes/dbconx.php');
    include("modules/head-content.php"); ?>

    <!-- Just validate -->
    <!-- defer atributte to ensure they downloded in order -->
    <!-- 
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>

    <script src="./js/validation.js" defer></script> -->

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
                <h3 class="text-welcome">Sign up</h3>

                <!-- Form POST method -->
                <form action="process-signUp.php" method="post" id="signUp" novalidate>
                    <!-- User name -->
                    <label for="username">User name</label><br>
                    <input type="text" id="username" name="username"><br>

                    <!-- email -->
                    <label for="email">Email</label><br>
                    <input type="password" id="email" name="email" id="email"><br>

                    <!-- password -->
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password"><br>

                    <!-- Repeat password -->
                    <label for="password_confirmation">Repeat password</label><br>
                    <input type="password" name="password_confirmation" id="password_confirmation"><br>


                    <div class="checkbox-age">
                        <input type="checkbox" name="checkbox_age" id="checkbox_age" value="yes" />
                        <label for="checkbox_age">By registering, Y confirm that I accept Mode Terms and conditions and I have read the Privacy Policy and I am at least 18 years old.</label>
                    </div>

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