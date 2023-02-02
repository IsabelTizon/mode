<?php

include('includes/dbconx.php');
include("includes/error-reporting.php");
include("includes/config.php");
include('includes/active-session.php');


?>


<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php"><img class="logo" src="media/logo/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-search" action=" search-page.php" method="GET" name="search-items">
            <input class="inputSearch input-group" type="text" name="itemQuery" id="itemQuery">
            <input class="btn material-symbols-outlined search-icon" type="submit" name="submit" id="submit" value="Search">
        </form>
    </div>




    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            <span class="material-symbols-outlined">person</span>
        </a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item" href="#"><?= htmlspecialchars($user["username"]) ?></a>
            <a class="dropdown-item" href="dashboard.php">Dashboard</a>
            <a class="dropdown-item" href="#">Edit Record</a>
            <a class="dropdown-item" href="#">Delete Record</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">Logged out</a>
        </div>
    </div>
    <span class="material-symbols-outlined">favorite</span>
    </div>
    <button type="button" class="btn btn-sell" onclick=" sellNow()">Sell now</button>
</nav>

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
    function sellNow() {
        location.href = "index-sell.php";
    }
</script>