<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <!-- Logo -->
    <a class="navbar-brand" href="index.php"><img class="logo" src="media/logo/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Search -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-search" action=" search-page.php" method="GET" name="search-items">
            <input class="inputSearch input-group" type="text" name="itemQuery" id="itemQuery">
            <input class="btn material-symbols-outlined search-icon" type="submit" name="submit" id="submit" value="Search">
        </form>
    </div>

    <!-- Sign up / Log in -->
    <button type="button" href="question-home.php" class="btn btn-signUp-login" onclick="questionHome()">Sign up / Log in</button>

    <!-- Sell now -->
    <button type="button" class="btn btn-sell" onclick=" sellNow()">Sell now</button>

    </div>
</nav>

<!-- Second navbar -->
<div class="section-links-navbar">
    <a class="link-navbar" href="link-women-page.php">Women</a>
    <a class="link-navbar" href="link-men-page.php">Men</a>
    <a class="link-navbar" href="link-kids-page.php">Kids</a>
    <a class="link-navbar" href="link-entertainment-page.php">Entertainment</a>
    <a class="link-navbar" href="link-shoes-page.php">Shoes</a>
    <a class="link-navbar" href="link-accessories-page.php">Accessories</a>
    <a class="link-navbar" href="link-sport-page.php">Sport</a>
    <a class="link-navbar" href="link-petCare-page.php">Pet care</a>

</div>

<script>
    function questionHome() {
        // When the sell now button is pressed go to welcome page
        location.href = "welcome.php";
    }

    function sellNow() {
        // When the sell now button is pressed go to welcome page
        location.href = "welcome.php";
    }
</script>