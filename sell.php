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
    <link rel="stylesheet" href="css/sell.css">

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
    <main class="container-sell">
        <h1>Sell an item</h1>
        <form action="process-sell.php" method="get" id="sell" enctype="multipart/form-data" novalidate>

            <!-- Image -->
            <div class="container-input">
                <label for="file">Upload photos</label><br>
                <input type="file" id="submit-imgPic" name="file"><br>
                <button type="submit" id="submit-imgPic" name="Chose a file">Upload picture</button>
            </div>

            <!-- title -->
            <div class="container-input">
                <label for="title">title</label><br>
                <input type="title" id="title" name="title" placeholder="e.g. Black jeans"><br>
            </div>

            <!-- Description -->
            <div class="container-input">
                <label for="descript">Description</label><br>
                <input type="descript" id="descript" name="descript" id="descript" placeholder="e.g. hight waist skinny jeans"><br>
            </div>



            <!-- category -->
            <div class="container-input">
                <label for="category">Category</label><br>
                <div>
                    <select name="category">

                        <?php
                        echo $category = $_GET["category"];
                        ?>
                        <!-- <option value="">--Please choose an option--</option> -->
                        <option value="women" <?php echo $category == "women" ? 'selected' : ''; ?>>women</option>
                        <option value="men" <?php echo $category == "men" ? 'selected' : ''; ?>>men</option>
                        <option value="kids" <?php echo $category == "kids" ? 'selected' : ''; ?>>kids</option>
                        <option value="entertainment" <?php echo $category == "entertainment" ? 'selected' : ''; ?>>entertainment</option>
                        <option value="shoes" <?php echo $category == "shoes" ? 'selected' : ''; ?>>shoes</option>
                        <option value="accessories" <?php echo $category == "accessories" ? 'selected' : ''; ?>>accessories</option>
                        <option value="sport" <?php echo $category == "sport" ? 'selected' : ''; ?>>sport</option>
                        <option value="petCare" <?php echo $category == "petCare" ? 'selected' : ''; ?>>petCare</option>
                    </select>
                </div>
            </div>

            <!-- Repeat brand -->
            <div class="container-input">
                <label for="brand">Brand</label><br>
                <input type="brand" name="brand" id="brand" placeholder="e.g. Lee"><br>
            </div>

            <!-- Repeat condition -->
            <div class="container-input">
                <label for="condition1">Condition</label><br>
                <input type="condition1" name="condition1" id="condition1" placeholder="e.g. only worn a few times"><br>
            </div>

            <div class="container-input">
                <label for="size">size</label><br>
                <div>
                    <select name="size">
                        <?php
                        echo $size = $_GET["size"]
                        ?>
                        <option <?php echo $size == "xs" ? 'selected' : ''; ?>>xs</option>
                        <option <?php echo $size == "s" ? 'selected' : ''; ?>>s</option>
                        <option <?php echo $size == "M" ? 'selected' : ''; ?>>M</option>
                        <option <?php echo $size == "L" ? 'selected' : ''; ?>>L</option>
                        <option <?php echo $size == "XL" ? 'selected' : ''; ?>>XL</option>
                        <option <?php echo $size == "3" ? 'selected' : ''; ?>>Shoes: 3</option>
                        <option <?php echo $size == "4" ? 'selected' : ''; ?>>Shoes: 4</option>
                        <option <?php echo $size == "5" ? 'selected' : ''; ?>>Shoes: 5</option>
                        <option <?php echo $size == "6" ? 'selected' : ''; ?>>Shoes: 6</option>
                        <option <?php echo $size == "7" ? 'selected' : ''; ?>>Shoes: 7</option>
                        <option <?php echo $size == "8" ? 'selected' : ''; ?>>Shoes: 8</option>
                        <option <?php echo $size == "9" ? 'selected' : ''; ?>>Shoes: 9</option>
                    </select>
                </div>
            </div>

            <!-- Repeat price -->
            <div class="container-input">
                <label for="price">Price</label><br>
                <input type="price" name="price" id="price" placeholder="e.g £11"><br>
            </div>

            <button type="submit" class="btn btn-info">Upload</button>

        </form>

    </main>

    <!-- Footer data  -->
    <footer>
        <?php include("modules/footer.php"); ?>
    </footer>

</body>

</html>